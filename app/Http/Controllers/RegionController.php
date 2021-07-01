<?php

namespace App\Http\Controllers;

use App\Http\Resources\AreaResource;
use App\Http\Resources\RegionResource;
use App\Models\Area;
use App\Models\Region;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Wilayah
 */
class RegionController extends Controller
{
    /**
     * Mendapatkan list data wilayah yang tersedia.
     *
     * @queryParam search string Mencari data wilayah. Example: Jawa Barat
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam filter[region] string Penyortiran berdasarkan nana wilayah. Example: Jawa Barat
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     *
     * @param Request $request
     * @return RegionResource
     *
     * @responseFile storage/responses/region-resource.response.json
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $allowed = [
            'created_at', 'region',
        ];

        $regions = QueryBuilder::for(Region::class)
            ->withCount('areas')
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return RegionResource::collection($regions);
    }


    /**
     * Mendapatkan list data area berdasarkan region yang dipilih.
     *
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     *
     * @urlParam region int required valid id region. Example: 1
     *
     * @param Region $region
     * @return AreaResource
     *
     * @responseFile storage/responses/area-resource.response.json
     */
    public function getAreaWhereRegion(Region $region)
    {
        $areas = Area::where('region_id', $region->id)->jsonPaginate();

        return AreaResource::collection($areas);
    }
}
