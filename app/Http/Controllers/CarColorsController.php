<?php

namespace App\Http\Controllers;

use App\Models\CarColor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CarColorResource;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Kelola Mobil
 */
class CarColorsController extends Controller
{
    /**
     * Mendapatkan list data warna mobil.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @queryParam search string Mencari data warna mobil. Example: merah
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default color. Example: -color
     *
     * @param \Illuminate\Http\Request $request
     * @return CarColorResource
     *
     * @responseFile storage/responses/color-resource.response.json
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $allowed = ['color'];

        $carColors = QueryBuilder::for(CarColor::class)
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedSorts($allowed)
            ->defaultSort($allowed[0])
            ->jsonPaginate();

        return CarColorResource::collection($carColors);
    }
}
