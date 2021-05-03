<?php

namespace App\Http\Controllers;

use App\Http\Resources\PointResource;
use App\Http\Resources\UserPointHistoryResource;
use App\Models\Point;
use Illuminate\Http\Request;

/**
 * @group Point
 */
class PointController extends Controller
{
    /**
     * Mendapatkan list data histori point.
     * @authenticated
     *
     * @param Request $request
     * @return UserPointHistoryResource
     *
     * @responseFile storage/responses/user-point-history-resource.response.json
     */
    public function histories(Request $request)
    {
        $histories = $request->user()->pointsRelation()->simplePaginate(10);
        return UserPointHistoryResource::collection($histories);
    }


    /**
     * Mendapatkan list data misi.
     * @authenticated
     *
     * @return PointResource
     *
     * @responseFile storage/responses/point-resource.response.json
     */
    public function missions()
    {
        $missions = Point::where('active', true)->orderBy('points', 'desc')->simplePaginate(10);
        return PointResource::collection($missions);
    }
}
