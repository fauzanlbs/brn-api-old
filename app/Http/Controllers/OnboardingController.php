<?php

namespace App\Http\Controllers;

use App\Http\Resources\Onboarding\OnboardingResource;
use App\Models\Onboarding;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;


/**
 * @group Onboarding
 */
class OnboardingController extends Controller
{
    /**
     * Mendapatkan list data onboarding.
     * @queryParam group string String pilihan onboarding / sponsor
     *
     * @return OnboardingResource
     *
     * @responseFile storage/responses/onboarding-resource.response.json
     */
    public function index(Request $request)
    {
        // $onboardings = Onboarding::orderBy('order', 'asc')->get();
        // return OnboardingResource::collection($onboardings);

        $group = $request->query('group');
        // print_r($group);exit;
        $onboardings = QueryBuilder::for(Onboarding::class)
        ->when($group, function($q, $group){
            // print_r($group);exit;
            return $q->where('group_code', $group);
        })
        ->get();
        return  OnboardingResource::collection($onboardings);
    }
}
