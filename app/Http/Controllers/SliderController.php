<?php

namespace App\Http\Controllers;

use App\Http\Resources\SliderResource;
use App\Models\Slider;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Slider
 */
class SliderController extends Controller
{
    /**
     * Mendapatkan list data slider yang tersedia.
     *
     * @queryParam search string Mencari data slider. Example: Jawa Barat
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     *
     * @param Request $request
     * @return SliderResource
     *
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $allowed = [
            'created_at'
        ];

        $regions = QueryBuilder::for(Slider::class)
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return SliderResource::collection($regions);
    }
}
