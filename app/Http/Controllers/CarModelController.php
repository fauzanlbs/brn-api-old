<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CarModelResource;
use App\Models\CarModel;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Kelola Mobil
 */
class CarModelController extends Controller
{
    /**
     * Mendapatkan list data model mobil.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @queryParam search string Mencari data model mobil. Example: S40
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default model. Example: -model
     *
     * @queryParam filter[car_make_id] int Penyortiran berdasarkan id mobil. Example: 1
     *
     * @param \Illuminate\Http\Request $request
     * @return CarModelResource
     *
     * @responseFile storage/responses/model-resource.response.json
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $allowed = ['car_make_id', 'model'];

        $carModels = QueryBuilder::for(CarModel::class)
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort($allowed[0])
            ->jsonPaginate();

        return CarModelResource::collection($carModels);
    }
}
