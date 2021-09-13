<?php

namespace App\Http\Controllers;

use App\Http\Requests\CaseReport\CaseReportRequest;
use App\Http\Requests\Perpetrator\PerpetratorRequest;
use App\Http\Resources\CaseReport\CaseReportResource;
use App\Http\Resources\CaseReport\PerpetratorResource;
use App\Models\Car;
use App\Models\CaseReport;
use App\Models\Perpetrator;
use App\Repositories\Perpetrator\EloquentPerpetratorRepository;
use App\Traits\Analytics;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use Propaganistas\LaravelPhone\PhoneNumber;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Laporan kasus
 */
class CaseReportController extends Controller
{
    use ResponseAPI;
    use Analytics;

    protected $eloquentPerpetrator;

    /**
     * @param EloquentPerpetratorRepository $eloquentPerpetrator
     */
    public function __construct(EloquentPerpetratorRepository $eloquentPerpetrator)
    {
        $this->eloquentPerpetrator = $eloquentPerpetrator;
    }

    /**
     * Mendapatkan data chart laporan kasus .
     * <aside class="note">Harus memiliki akses <b>Admin / Korda / Korwil </b></aside>
     * @authenticated
     *
     * @queryParam date string Penyortiran berdasarkan tanggal <br>harus salah satu dari hari-ini, 7-hari-terakhir, 30-hari-terakhir, bulan-ini, bulan-lalu. Example: hari-ini
     *
     * @param Request $request
     *
     */
    public function getChartCaseReports(Request $request)
    {
        $selectedDate = $request->query('date');

        $allowedDates = [
            'hari-ini',
            '7-hari-terakhir',
            '30-hari-terakhir',
            'bulan-ini',
            'bulan-lalu',
        ];

        if (!in_array($selectedDate, $allowedDates)) {
            return $this->responseMessage('query param `date` harus salah satu dari hari-ini, 7-hari-terakhir, 30-hari-terakhir, bulan-ini, bulan-lalu.', 400);
        }

        $chartDatas = $this->getAnalyticsData('case_reports', $selectedDate);

        return $chartDatas;
    }

    /**
     * Mendapatkan data count laporan kasus pengguna saat ini.
     * <aside class="note">Harus memiliki akses <b>Admin / Korda / Korwil </b></aside>
     * @authenticated
     *
     * @queryParam start_date string Penyortiran berdasarkan tanggal mulai. Example: 2020-01-24
     * @queryParam end_date string Penyortiran berdasarkan tanggal selesai. Example: 2020-12-24
     *
     * @param Request $request
     *
     */
    public function getCountCaseReports(Request $request)
    {

        $start_date = $request->query('start_date');
        $end_date = $request->query('end_date');


        $userCountCaseReports = CaseReport::when($start_date, function ($q, $start_date) {
            return $q->where('created_at', '<=', $start_date);
        })
            ->when($end_date, function ($q, $end_date) {
                return $q->where('created_at', '>=', $end_date);
            })
            ->count();

        return $this->responseMessageWithData('success', [
            'count' => $userCountCaseReports,
        ]);
    }


    /**
     * Mendapatkan data count laporan kasus pengguna saat ini.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @queryParam start_date string Penyortiran berdasarkan tanggal mulai. Example: 2020-01-24
     * @queryParam end_date string Penyortiran berdasarkan tanggal selesai. Example: 2020-12-24
     *
     * @param Request $request
     *
     */
    public function getUserCountCaseReports(Request $request)
    {

        $start_date = $request->query('start_date');
        $end_date = $request->query('end_date');

        $uid = $request->user()->id;

        $userCountCaseReports = CaseReport::where('user_id', $uid)
            ->when($start_date, function ($q, $start_date) {
                return $q->where('created_at', '<=', $start_date);
            })
            ->when($end_date, function ($q, $end_date) {
                return $q->where('created_at', '>=', $end_date);
            })
            ->count();

        return $this->responseMessageWithData('success', [
            'count' => $userCountCaseReports,
        ]);
    }


    /**
     * Mendapatkan list data laporan kasus.
     * Dibagian ini Anda bisa mendapatkan list data laporan kasus.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @queryParam search string Mencari data laporan kasus. Example: Avansa
     * @queryParam area_code string Filter berdasarkan area code. Example: 1
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam include string Include akan memuat relasi, relasi yang tersedia:
     * <br> #1 <b>in-charge</b> : Penanggung jawab kasus. <br> #1 <b>car</b> : Mobil, Anda bisa mengabukannya dengan (<i>car-make</i>, <i>car-type</i>, <i>car-fuel</i>, <i>car-model</i>, <i>car-color</i>, <i>car-images</i>). contoh car.car-color. <br> #1 <b>perpetrator</b> : tersangka.
     *
     * @queryParam filter[status] string Penyortiran berdasarkan status (pending, verified, progress, completed). Example: pending
     * @queryParam filter[request_delete] int Penyortiran berdasarkan permintaan pembatalan kasus (1=true 0=false). Example: 1
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     *
     * @param Request $request
     * @return CaseReportResource
     *
     * @responseFile storage/responses/case-report-resource.response.json
     */
    public function getCaseReports(Request $request)
    {
        $search = $request->query('search');
        $area_code = $request->query('area_code');

        $allowed = [
            'created_at', 'status', 'request_delete'
        ];

        $include = [
            'inCharge', 'perpetrator',
            'car',
            'car.carMake',
            'car.carType',
            'car.carFuel',
            'car.carModel',
            'car.carColor',
            'car.carImages',
        ];

        $caseReports = QueryBuilder::for(CaseReport::class)
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->when($area_code, function ($q, $area_code) {
                return $q->whereHas('user', function ($q) use ($area_code) {
                    $q->whereHas('personalInformation', function ($q) use ($area_code) {
                        $q->where('area_code', $area_code);
                    });
                });
            })
            ->allowedIncludes($include)
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return CaseReportResource::collection($caseReports);
    }


    /**
     * Mendapatkan list data laporan kasus pengguna saat ini.
     * Dibagian ini Anda bisa mendapatkan list data laporan kasus pengguna saat ini.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @queryParam search string Mencari data laporan kasus pengguna saat ini. Example: Avansa
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam include string Include akan memuat relasi, relasi yang tersedia:
     * <br> #1 <b>in-charge</b> : Penanggung jawab kasus. <br> #1 <b>car</b> : Mobil, Anda bisa mengabukannya dengan (<i>car-make</i>, <i>car-type</i>, <i>car-fuel</i>, <i>car-model</i>, <i>car-color</i>, <i>car-images</i>). contoh car.car-color. <br> #1 <b>perpetrator</b> : tersangka.
     *
     * @queryParam filter[status] string Penyortiran berdasarkan status (pending, verified, progress, completed). Example: pending
     * @queryParam filter[request_delete] int Penyortiran berdasarkan permintaan pembatalan kasus (1=true 0=false). Example: 1
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     *
     * @param Request $request
     * @return CaseReportResource
     *
     * @responseFile storage/responses/case-report-resource.response.json
     */
    public function getUserCaseReports(Request $request)
    {
        $search = $request->query('search');

        $allowed = [
            'created_at', 'status', 'request_delete'
        ];

        $include = [
            'inCharge', 'perpetrator',
            'car',
            'car.carMake',
            'car.carType',
            'car.carFuel',
            'car.carModel',
            'car.carColor',
            'car.carImages',
        ];

        $uid = $request->user()->id;

        $userCaseReports = QueryBuilder::for(CaseReport::class)
            ->where('user_id', $uid)
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedIncludes($include)
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return CaseReportResource::collection($userCaseReports);
    }


    /**
     * Mendapatkan detail data laporan kasus pengguna saat ini.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @urlParam caseReport int required valid id caseReport. Example: 1
     *
     * @param CaseReport $caseReport
     * @return CarResource
     *
     * @responseFile storage/responses/single-case-report-resource.response.json
     */
    public function getUserCaseReportDetail(CaseReport $caseReport)
    {
        $this->authorize('view', $caseReport);

        $caseReport->load(['inCharge', 'car' => function ($query) {
            $query->with(['carMake', 'carType', 'carFuel', 'carModel', 'carColor', 'carImages',]);
        }, 'perpetrator']);

        return new CaseReportResource($caseReport);
    }


    /**
     * Menambahkan laporan kasus pengguna saat ini.
     * Dibagian ini Anda bisa menambahkan laporan kasus pengguna saat ini.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @param CaseReportRequest $request
     * @return CaseReportResource
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function store(CaseReportRequest $request)
    {
        $uid = $request->user()->id;
        $car = Car::findOrFail($request['car_id']);

        if ($car->user_id != $uid) {
            return $this->responseMessage(__('messages.cant'), 401);
        };

        $existsCaseReport = CaseReport::where('car_id', $car->id)->exists();
        if ($existsCaseReport) {
            return $this->responseMessage('Laporan kasus dengan mobil yang dipilih sudah ada.', 400);
        }

        if ($request->user()->points()->number() == 0) {
            return $this->responseMessage('Jumlah point anda harus lebih besar dari 0', 400);
        }

        $validated = $request->validated();
        $validated['perpetrator']['phone_number'] = PhoneNumber::make($validated['perpetrator']['phone_number'], 'ID');
        $validated['user_id'] = $request->user()->id;

        $perpetratorRequest = $validated['perpetrator'];
        unset($validated['perpetrator']);
        $caseReportRequest  = $validated;

        $latLong  = explode(",", $validated['location']);
        unset($caseReportRequest['location']);
        $caseReportRequest['latitude'] = $latLong[0];
        $caseReportRequest['longitude'] = $latLong[1];

        $caseReport = CaseReport::create($caseReportRequest);

        $perpetratorRequest['profile_photo_path'] = $perpetratorRequest['photo']->storePublicly(
            'perpetrator',
            ['disk' => 'public']
        );

        $caseReport->perpetrator()->create($perpetratorRequest);


        return (new CaseReportResource(CaseReport::with('perpetrator')->find($caseReport->id)))->additional([
            'message' => __('messages.created', ['attr' => 'laporan kasus']),
        ]);
    }


    /**
     * Batalkan laporan kasus pengguna saat ini.
     * Dibagian ini Anda bisa membuat permintaan pembatalan laporan kasus CaseReportController.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @param Request $request
     * @param CaseReport $caseReport
     * @return \Illuminate\Http\Response
     *
     * @urlParam caseReport int required valid id caseReport. Defaults to 'id'. Example: 1
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function cancelCaseReport(CaseReport $caseReport)
    {
        $this->authorize('cancel', $caseReport);

        $caseReport->forceFill([
            'request_delete' => true
        ])->save();

        return $this->responseMessage('Berhasil.');
    }


    /**
     * Menambahkan Pelaku.
     * <aside class="note">Harus memiliki akses <b>Korda</b> / <b>Korwil </b></aside>
     * @authenticated
     *
     * @param PerpetratorRequest $request
     * @return PerpetratorResource
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function storePerpetrator(PerpetratorRequest $request)
    {
        $perpetrator = $this->eloquentPerpetrator->createOrUpdate(NULL, $request);

        return (new PerpetratorResource($perpetrator))->additional([
            'message' => __('messages.created', ['attr' => 'pelaku']),
        ]);
    }


    /**
     * Memperbaharui salah satu data pelaku.
     * <aside class="note">Harus memiliki akses <b>Korda</b> / <b>Korwil </b></aside>
     * @authenticated
     *
     * @param PerpetratorRequest $request
     * @param \App\Models\Perpetrator $perpetrator
     * @return PerpetratorResource
     *
     * @urlParam perpetrator int required valid id perpetrator. Defaults to 'id'. Example: 1
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function updatePerpetrator(PerpetratorRequest $request, Perpetrator $perpetrator)
    {
        $perpetrator = $this->eloquentPerpetrator->createOrUpdate($perpetrator->id, $request);

        return (new PerpetratorResource($perpetrator))->additional([
            'message' => __('messages.updated', ['attr' => 'pelaku']),
        ]);
    }


    /**
     * Menghapus salah satu pelaku.
     * <aside class="note">Harus memiliki akses <b>Korda</b> / <b>Korwil </b></aside>
     * @authenticated
     *
     * @param Request $request
     * @param \App\Models\Perpetrator $perpetrator
     * @return \Illuminate\Http\Response
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function destroyPerpetrator(Request $request, Perpetrator $perpetrator)
    {
        $perpetrator->deleteProfilePhoto();
        $perpetrator->delete();

        return $this->responseMessage(__('messages.deleted', ['attr' => 'pelaku']));
    }
}
