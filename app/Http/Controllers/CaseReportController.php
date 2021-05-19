<?php

namespace App\Http\Controllers;

use App\Http\Requests\CaseReport\CaseReportRequest;
use App\Http\Resources\CaseReport\CaseReportResource;
use App\Models\Car;
use App\Models\CaseReport;
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


    /**
     * Mendapatkan list data laporan kasus.
     * Dibagian ini Anda bisa mendapatkan list data laporan kasus.
     * @authenticated
     *
     * @queryParam search string Mencari data laporan kasus. Example: Avansa
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
}
