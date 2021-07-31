<?php

namespace App\Http\Controllers;

use App\Http\Requests\Firebase\DevideTokenRequest;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;

/**
 * @group Firebase
 */
class FirebaseController extends Controller
{
    use ResponseAPI;
    /**
     * Memperbaharui device token.
     * @authenticated
     *
     *
     * @param DevideTokenRequest $request
     * @param Discussion $discussion
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil memperbaharui device token.",
     * }
     */
    public function updateDeviceToken(DevideTokenRequest $request)
    {
        $deviceToken = $request['device_token'];

        $request->user()->firebase()->updateOrCreate(
            ['user_id' => $request->user()->id],
            [
                'device_token' => $deviceToken,
            ]
        );

        return $this->responseMessage('Berhasil memperbaharui device token.');
    }
}
