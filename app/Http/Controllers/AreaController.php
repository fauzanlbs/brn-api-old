<?php

namespace App\Http\Controllers;

use App\Http\Resources\AreaResource;
use App\Models\Area;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Daerah
 */
class AreaController extends Controller
{
    /**
     * Mendapatkan list data daerah yang tersedia.
     *
     * @queryParam search string Mencari data daerah. Example: Tasik
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam filter[area] string Penyortiran berdasarkan nana daerah. Example: Tasik
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     *
     * @param Request $request
     * @return AreaResource
     *
     * @responseFile storage/responses/area-resource.response.json
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $allowed = [
            'created_at', 'area',
        ];

        $areas = QueryBuilder::for(Area::class)
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return AreaResource::collection($areas);
    }
}
