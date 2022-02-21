<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlackListResource;
use App\Http\Resources\CaseReport\PerpetratorResource;
use App\Models\Perpetrator;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group BlackList
 */
class BlackListController extends Controller
{
    /**
     * Mendapatkan list data blacklist.
     *
     * @queryParam search string Mencari data daerah. Example: Tasik
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam filter[name] string Penyortiran berdasarkan nama. Example: Arya
     * @queryParam filter[nik] string Penyortiran berdasarkan nik. Example: 123123123
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     *
     * @param Request $request
     * @return BlackListResource
     *
     * @responseFile storage/responses/blacklist-resource.response.json
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $allowed = [
            'created_at', 'name', 'nik'
        ];

        $areas = QueryBuilder::for(Perpetrator::class)
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return BlackListResource::collection($areas);
    }


    /**
     * Mendapatkan detail data blacklist.
     *
     * @urlParam perpetrator int required valid id perpetrator. Example: 1
     *
     * @param Perpetrator $perpetrator
     * @return BlackListResource
     *
     * @responseFile storage/responses/single-perpetrator-resource.response.json
     */
    public function getPerpetratorDetail(Perpetrator $perpetrator)
    {
        $perpetrator->load(['caseReport', 'created_by']);

        return new PerpetratorResource($perpetrator);
    }
}
