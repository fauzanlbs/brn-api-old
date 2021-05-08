<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

/**
 * @group Server
 */
class PingController extends Controller
{
    /**
     * Ping the server.
     */
    public function index()
    {
        return response()->json([
            'status' => 'ok',
            'timestamp' => Carbon::now(),
            'host' => request()->ip(),
        ]);
    }
}
