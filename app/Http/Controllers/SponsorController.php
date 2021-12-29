<?php

namespace App\Http\Controllers;

use App\Http\Resources\Sponsor\SponsorResource;
use App\Models\Sponsor;

/**
 * @group Sponsor
 */
class SponsorController extends Controller
{
    /**
     * Mendapatkan list data sponsor.
     *
     * @return SponsorResource
     *
     * @responseFile storage/responses/sponsor-resource.response.json
     */
    public function index()
    {
        $sponsors = Sponsor::orderBy('order', 'asc')->get();
        return SponsorResource::collection($sponsors);
    }
}
