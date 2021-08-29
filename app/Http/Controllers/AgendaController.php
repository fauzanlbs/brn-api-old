<?php

namespace App\Http\Controllers;

use App\Http\Requests\Agenda\AgendaRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Http\Resources\AgendaResource;
use App\Models\Agenda;
use App\Repositories\Agenda\EloquentAgendaRepository;
use App\Royalty\Actions\HutPoint;
use App\Royalty\Actions\KopdarPoint;
use App\Royalty\Actions\TourPoint;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Agenda
 */
class AgendaController extends Controller
{
    use ResponseAPI;

    protected $eloquentAgenda;

    /**
     * @param EloquentAgendaRepository $eloquentAgenda
     */
    public function __construct(EloquentAgendaRepository $eloquentAgenda)
    {
        $this->eloquentAgenda = $eloquentAgenda;
    }

    /**
     * Mendapatkan list data agenda.
     * Dibagian ini Anda bisa mendapatkan list data agenda.
     *
     * @queryParam search string Mencari data agenda. Example: Avansa
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam include string Include akan memuat relasi, relasi yang tersedia: <br> #1 <b>user</b> : Pengguna yang membuat agenda. <br> #2 <b>area</b> : Daerah. Example: user
     *
     * @queryParam filter[type] string Penyortiran berdasarkan tipe agenda. Example: HUT
     * @queryParam filter[title] string Penyortiran berdasarkan judul.
     * @queryParam filter[description] string Penyortiran berdasarkan deskripsi.
     * @queryParam filter[address] string Penyortiran berdasarkan deskripsi.
     * @queryParam filter[latitude] string Penyortiran berdasarkan latitude. Example: 31.2467601
     * @queryParam filter[longitude] string Penyortiran berdasarkan longitude. Example: 29.9020376
     * @queryParam filter[start_date] string Penyortiran berdasarkan tanggal mulai. Example: 2020-01-24
     * @queryParam filter[end_date] string Penyortiran berdasarkan tanggal selesai. Example: 2020-12-24
     * @queryParam filter[start_time] string Penyortiran berdasarkan jam mulai. Example: 12:00
     * @queryParam filter[end_time] string Penyortiran berdasarkan jam selesai. Example: 17:00
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     *
     * @param Request $request
     * @return AgendaResource
     *
     * @responseFile storage/responses/agenda-resource.response.json
     */
    public function getAgendas(Request $request)
    {
        $search = $request->query('search');

        $allowed = [
            'created_at', 'type', 'title', 'description', 'address', 'latitude', 'longitude', 'start_date', 'end_date', 'start_time', 'end_time',
        ];

        $include = ['user', 'area'];

        $agendas = QueryBuilder::for(Agenda::class)
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedIncludes($include)
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return AgendaResource::collection($agendas);
    }


    /**
     * Absen Agenda.
     * @authenticated
     *
     * @urlParam agenda int required valid id agenda. Example: 1
     *
     * @param Request $request
     * @param \App\Models\Agenda $agenda
     * @return \Illuminate\Http\Response
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function qrScan(Request $request, Agenda $agenda)
    {
        $uid = $request->user()->id;

        $absentExists = $agenda->absentUsers->contains($uid);

        // return if user already absent in this agenda
        if ($absentExists) {
            return $this->responseMessage('Anda sudah absen untuk agenda ini sebelumnya.', 400);
        }

        $agenda->absentUsers()->syncWithoutDetaching($uid);

        switch ($agenda->type) {
            case 'HUT':
                $request->user()->givePoints(new HutPoint);
                break;
            case 'TOUR':
                $request->user()->givePoints(new TourPoint);
                break;
            case 'KOPDAR':
                $request->user()->givePoints(new KopdarPoint);
                break;
            default:
                # tidak mendapatkan point...
                break;
        }

        return $this->responseMessage('Berhasil Absen');
    }


    /**
     * Mendapatkan detail data agenda.
     *
     * @urlParam agenda int required valid id agenda. Example: 1
     *
     * @param Agenda $agenda
     * @return AgendaResource
     *
     * @responseFile storage/responses/single-agenda-resource.response.json
     */
    public function getAgendaDetail(Agenda $agenda)
    {
        $agenda->load(['user', 'area']);

        return new AgendaResource($agenda);
    }


    /**
     * Menambahkan agenda.
     * Dibagian ini Anda bisa menambahkan agenda.
     * <aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>
     * @authenticated
     *
     * @param AgendaRequest $request
     * @return AgendaResource
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function store(AgendaRequest $request)
    {
        $agenda = $this->eloquentAgenda->createOrUpdate(NULL, $request);

        return (new AgendaResource($agenda))->additional([
            'message' => __('messages.created', ['attr' => 'agenda']),
        ]);
    }


    /**
     * Memperbaharui salah satu agenda.
     * Dibagian ini Anda bisa memperbaharui salah satu agenda.
     * <aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>
     * @authenticated
     *
     * @param AgendaRequest $request
     * @param \App\Models\Agenda $agenda
     * @return AgendaResource
     *
     * @urlParam agenda int required valid id agenda. Defaults to 'id'. Example: 1
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function update(AgendaRequest $request, Agenda $agenda)
    {
        $this->authorize('update', $agenda);

        $agenda = $this->eloquentAgenda->createOrUpdate($agenda->id, $request);

        return (new AgendaResource($agenda))->additional([
            'message' => __('messages.updated', ['attr' => 'agenda']),
        ]);
    }


    /**
     * Menghapus salah satu agenda.
     * Dibagian ini Anda bisa menghapus salah satu agenda.
     * <aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>
     * @authenticated
     *
     * @param Request $request
     * @param \App\Models\Agenda $agenda
     * @return \Illuminate\Http\Response
     *
     * @urlParam agenda int required valid id agenda. Defaults to 'id'. Example: 1
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function destroy(Request $request, Agenda $agenda)
    {
        $this->authorize('delete', $agenda);

        $agenda->deleteImage();
        $agenda->delete();

        return $this->responseMessage(__('messages.deleted', ['attr' => 'agenda']));
    }


    /**
     * Menghapus gambar agenda.
     * <aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>
     * @authenticated
     *
     * @param Request $request
     * @param \App\Models\Agenda $agenda
     * @return \Illuminate\Http\Response
     *
     * @urlParam agenda int required valid id agenda. Defaults to 'id'. Example: 1
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function destroyImage(Request $request, Agenda $agenda)
    {
        $agenda->deleteImage();

        return $this->responseMessage(__('messages.deleted', ['attr' => 'gambar agenda']));
    }

    /**
     * Memperbaharui gambar agenda.
     * <aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>
     * @authenticated
     *
     * @param UpdateImageRequest $request
     * @return \Illuminate\Http\Response
     * @param \App\Models\Agenda $agenda
     *
     * @urlParam agenda int required valid id agenda. Defaults to 'id'. Example: 1
     *
     * @response {
     *  "message": "Gambar berhasil diperbaharui",
     *  "data": {
     *     "image_url" : "https:// ....."
     *  },
     * }
     */
    public function updateImage(UpdateImageRequest $request, Agenda $agenda)
    {
        $this->authorize('update', $agenda);

        $agenda->updateImage($request->file('image'));

        return $this->responseMessageWithData(__('messages.updated', ['attr' => 'gambar']), [
            'image_url' => $agenda->imageUrl
        ]);
    }
}
