<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CarFuelResource;
use App\Models\CarFuel;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Kelola Mobil
 */
class CarFuelController extends Controller
{
    /**
     * Mendapatkan list data bahan bakar mobil.
     * @authenticated
     *
     * @queryParam search string Mencari data bahan bakar mobil. Example: Diesel
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default fuel. Example: -fuel
     *
     * @param \Illuminate\Http\Request $request
     * @return CarFuelResource
     *
     * @responseFile storage/responses/fuel-resource.response.json
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $allowed = ['fuel'];

        $carFuels = QueryBuilder::for(CarFuel::class)
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedSorts($allowed)
            ->defaultSort($allowed[0])
            ->jsonPaginate();

        return CarFuelResource::collection($carFuels);
    }
}
