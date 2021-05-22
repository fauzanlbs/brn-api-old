<?php

namespace App\Http\Requests\Firebase;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam device_token string required device token. Example: cSN1fH...
 */
class DevideTokenRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'device_token' => 'required|string'
        ];
    }
}
