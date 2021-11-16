<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam current_password string required kata sandi saat ini. Example: passworddulu
 * @bodyParam password string required kata sandi baru. Example: passwordbaru
 */
class UpdatePasswordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'current_password' => 'required|string',
            'password' => 'required|string|min:8',
        ];
    }
}
