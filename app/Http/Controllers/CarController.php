<?php

namespace App\Http\Controllers;

use App\Http\Requests\Car\CarRequest;
use App\Http\Resources\CarResource;
use App\Models\Car;
use App\Models\CarImage;
use App\Repositories\Car\EloquentCarRepository;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Kelola Mobil
 */
class CarController extends Controller
{
    use ResponseAPI;

    protected $eloquentCar;

    /**
     * @param EloquentCarRepository $eloquentCar
     */
    public function __construct(EloquentCarRepository $eloquentCar)
    {
        $this->eloquentCar = $eloquentCar;
    }

    /**
     * Mendapatkan list data mobil pengguna saat ini.
     * Dibagian ini Anda bisa mendapatkan list data mobil pengguna saat ini.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @queryParam search string Mencari data mobil pengguna saat ini. Example: Avansa
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam include string Include akan memuat relasi, relasi yang tersedia: <br> #1 <b>carMake</b> : Produsen mobil. <br> #2 <b>carType</b> : Jenis kelas. <br> #3 <b>carFuel</b> : Bahan bakar. <br> #4 <b>carModel</b> : Model mobil. <br> #5 <b>carColor</b> : Warna. <br> #6 <b>carImages</b> : List gambar mobil. <br>Untuk <b>multiple include</b> Anda cukup menambahkan <i>koma</i> (,). Example: carImages
     *
     * @queryParam filter[status] string Penyortiran berdasarkan status. Example: lost
     * @queryParam filter[is_approved] string Penyortiran berdasarkan diterima (1=true 0=false). Example: true
     * @queryParam filter[police_number] string Penyortiran berdasarkan nomor polisi. Example: Y 3168 XP
     * @queryParam filter[year] string Penyortiran berdasarkan tahun mobil. Example: 2015
     * @queryParam filter[is_automatic] string Penyortiran berdasarkan is automatic (1=true 0=false). Example: true
     * @queryParam filter[capacity] int Penyortiran berdasarkan kapasitas. Example: 4
     * @queryParam filter[equipment] string Penyortiran berdasarkan equipment.
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     *
     * @param Request $request
     * @return CarResource
     *
     * @responseFile storage/responses/car-resource.response.json
     */
    public function getUserCars(Request $request)
    {
        $search = $request->query('search');

        $allowed = [
            'created_at', 'status', 'is_approved', 'police_number', 'year', 'is_automatic', 'capacity', 'equipment',
        ];

        $include = ['carMake', 'carType', 'carFuel', 'carModel', 'carColor', 'carImages',];

        $uid = $request->user()->id;

        $userCars = QueryBuilder::for(Car::class)
            ->where('user_id', $uid)
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedIncludes($include)
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return CarResource::collection($userCars);
    }


    /**
     * Mendapatkan detail data mobil pengguna saat ini.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @urlParam car int required valid id car. Example: 1
     *
     * @param Car $car
     * @return CarResource
     *
     * @responseFile storage/responses/single-car-resource.response.json
     */
    public function getUserCarDetail(Car $car)
    {
        $car->load(['carMake', 'carType', 'carFuel', 'carModel', 'carColor', 'carImages',]);

        return new CarResource($car);
    }


    /**
     * Menambahkan mobil pengguna saat ini.
     * Dibagian ini Anda bisa menambahkan mobil pengguna saat ini.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @param CarRequest $request
     * @return CarResource
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function store(CarRequest $request)
    {

        $car = $this->eloquentCar->createOrUpdate(NULL, $request);

        return (new CarResource($car))->additional([
            'message' => __('messages.created', ['attr' => 'mobil']),
        ]);
    }


    /**
     * Memperbaharui salah satu mobil pengguna saat ini.
     * Dibagian ini Anda bisa memperbaharui salah satu mobil pengguna saat ini.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @param CarRequest $request
     * @param \App\Models\Car $car
     * @return CarResource
     *
     * @urlParam car int required valid id car. Defaults to 'id'. Example: 1
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function update(CarRequest $request, Car $car)
    {
        $this->authorize('update', $car);

        $car = $this->eloquentCar->createOrUpdate($car->id, $request);

        return (new CarResource($car))->additional([
            'message' => __('messages.updated', ['attr' => 'mobil']),
        ]);
    }


    /**
     * Menghapus salah satu mobil pengguna saat ini.
     * Dibagian ini Anda bisa menghapus salah satu mobil pengguna saat ini.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @param Request $request
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\Response
     *
     * @urlParam car int required valid id car. Defaults to 'id'. Example: 1
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function destroy(Request $request, Car $car)
    {
        $this->authorize('delete', $car);

        $car->load('carImages');
        foreach ($car->carImages as $ci) {
            Storage::disk('public')->delete($ci->image);
        }

        $car->carImages()->delete();
        $car->delete();

        return $this->responseMessage(__('messages.deleted', ['attr' => 'mobil']));
    }


    /**
     * Menghapus salah satu gambar mobil pengguna saat ini.
     * Dibagian ini Anda bisa menghapus salah satu gambar mobil pengguna saat ini.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @param Request $request
     * @param \App\Models\CarImage $carImage
     * @return \Illuminate\Http\Response
     *
     * @urlParam carImage int required valid id carImage. Defaults to 'id'. Example: 1
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function destroyCarImage(Request $request, CarImage $carImage)
    {
        if (!$carImage->car) {
            return $this->responseMessage('Mobil dari gambar ini tidak ditemukan.', 404);
        }

        $user = $request->user();
        if ($user->id != $carImage->car->user_id) {
            return $this->responseMessage(__('messages.cant'), 422);
        }

        Storage::disk('public')->delete($carImage->image);
        $carImage->delete();

        return $this->responseMessage(__('messages.deleted', ['attr' => 'gambar mobil']));
    }
}
