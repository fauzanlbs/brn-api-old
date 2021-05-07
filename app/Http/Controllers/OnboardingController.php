<?php

namespace App\Http\Controllers;

use App\Http\Resources\Onboarding\OnboardingResource;
use App\Models\Onboarding;

/**
 * @group Onboarding
 */
class OnboardingController extends Controller
{
    /**
     * Mendapatkan list data onboarding.
     *
     * @return OnboardingResource
     *
     * @responseFile storage/responses/onboarding-resource.response.json
     */
    public function index()
    {
        $onboardings = Onboarding::orderBy('order', 'asc')->get();
        return OnboardingResource::collection($onboardings);
    }
}
