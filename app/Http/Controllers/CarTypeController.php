<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CarTypeResource;
use App\Models\CarType;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Kelola Mobil
 */
class CarTypeController extends Controller
{
    /**
     * Mendapatkan list data jenis kelas mobil.
     * @authenticated
     *
     * @queryParam search string Mencari data jenis kelas mobil. Example: Sedan
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default class. Example: -class
     *
     * @param \Illuminate\Http\Request $request
     * @return CarTypeResource
     *
     * @responseFile storage/responses/type-resource.response.json
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $allowed = ['class'];

        $carTypes = QueryBuilder::for(CarType::class)
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedSorts($allowed)
            ->defaultSort($allowed[0])
            ->jsonPaginate();

        return CarTypeResource::collection($carTypes);
    }
}
