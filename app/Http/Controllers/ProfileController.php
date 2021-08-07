<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStatusRequest;
use App\Models\Car;
use App\Models\CaseReport;
use App\Models\User;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;

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
        ], 200);
    }

    /**
     * Memperbaharui status level diklat.
     * @authenticated
     *
     * @param UpdateStatusRequest $request
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": 'Berhasil memperbaharui status level diklat',
     * }
     */
    public function updateStatus(UpdateStatusRequest $request)
    {
        $uid = $request->user()->id;

        $user = User::find($uid);
        $user->status_level_diklat = $request->level;
        $user->save();

        return response()->json([
            "message" => 'Berhasil memperbaharui status level diklat',
        ], 200);
    }
}
