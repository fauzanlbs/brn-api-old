<?php

namespace App\Http\Controllers;

use App\Models\DailyCheckIn as ModelsDailyCheckIn;
use App\Royalty\Actions\DailyCheckIn;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @group Daily Check in
 */
class DailyCheckInController extends Controller
{
    use ResponseAPI;

    /**
     * Check in hari ini.
     * @authenticated
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil check in hari ini.",
     * }
     */
    public function checkIn(Request $request)
    {
        $current = ModelsDailyCheckIn::where('date', now()->format('Y-m-d'))->first();
        if ($current) {
            return $this->responseMessage('Anda sudah check in sebelumnya', 400);
        }

        DB::beginTransaction();
        try {
            $request->user()->givePoints(new DailyCheckIn);
            $request->user()->dailyCheckIn()->create(['date' => now()->format('Y-m-d')]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return $this->responseMessage($e->getMessage(), 500);
        }

        return $this->responseMessage('Berhasil check in hari ini.');
    }
}
