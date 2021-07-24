<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\AddressRequest;
use App\Http\Requests\User\PersonalInformationRequest;
use App\Http\Requests\User\PhoneNumberRequest;
use App\Http\Requests\User\UpdateProfilePhotoRequest;
use App\Http\Requests\User\UserRequest;
use App\Http\Resources\AddressResource;
use App\Http\Resources\PersonalInformationResource;
use App\Http\Resources\UserResource;
use App\Models\Car;
use App\Models\CaseReport;
use App\Models\User;
use App\Models\UserPersonalInformation;
use App\Repositories\User\EloquentUserAddressRepository;
use App\Traits\ResponseAPI;
use App\Traits\UrlParamCheck;
use Illuminate\Http\Request;
use \Rinvex\Addresses\Models\Address;
use Illuminate\Auth\Access\Response;
use Kreait\Firebase\JWT\Error\IdTokenVerificationFailed;
use Kreait\Firebase\JWT\IdTokenVerifier;

/**
 * @group Profile
 */
class ProfileController extends Controller
{
    use ResponseAPI;

    /**
     * Menghitung jumlah mobil dan laporan kasus pengguna saat ini.
     * @authenticated
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "data": {
     *     "count_cars" : "1",
     *     "count_case_reports" : "2"
     *  },
     * }
     */
    public function countCarAndCaseReport(Request $request)
    {
        $uid = $request->user()->id;

        $countCars = Car::where('user_id', $uid)->count();
        $countCaseReports = CaseReport::where('user_id', $uid)->count();

        return response()->json([
            "data" => [
                "count_cars" => $countCars,
                "count_case_reports" => $countCaseReports,
            ]
        ], 400);
    }
}
