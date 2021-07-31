<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CarMakeResource;
use App\Models\CarMake;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Kelola Mobil
 */
class CarMakeController extends Controller
{
    /**
     * Mendapatkan list data produsen mobil.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @queryParam search string Mencari data produsen mobil. Example: BMW
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default make. Example: -make
     *
     * @param \Illuminate\Http\Request $request
     * @return CarMakeResource
     *
     * @responseFile storage/responses/make-resource.response.json
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $allowed = ['make'];

        $carMakes = QueryBuilder::for(CarMake::class)
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedSorts($allowed)
            ->defaultSort($allowed[0])
            ->jsonPaginate();

        return CarMakeResource::collection($carMakes);
    }
}
