<?php

namespace App\Traits;

use App\Models\User;

trait ResponseAPI
{
    /**
     * API response access token
     *
     * @param User $user
     * @param int $status_code
     *
     * @return \Illuminate\Http\JsonResponse
     */
    private function responseToken(User $user, ?int $status_code = 200)
    {
        $token = $user->createToken('auth_token')->plainTextToken;

        $response = [
            'access_token' => $token,
            'token_type' => 'Bearer',
        ];

        return response()->json($response, $status_code);
    }

    /**
     * API response message with status code
     *
     * @param string $message
     * @param int $status_code
     *
     * @return \Illuminate\Http\JsonResponse
     */
    private function responseMessage(string $message, ?int $status_code = 200)
    {
        return response()->json(['message' => $message], $status_code);
    }

    /**
     * API response message with status code & data
     *
     * @param string $message
     * @param mixed $data
     * @param int $status_code
     *
     * @return \Illuminate\Http\JsonResponse
     */
    private function responseMessageWithData(string $message, $data, ?int $status_code = 200)
    {
        return response()->json([
            'message' => $message,
            'data' => $data,
        ], $status_code);
    }
}
