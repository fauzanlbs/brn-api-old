<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam key string required key yang dikirimkan ke email dari request sebelumnya.
 * @bodyParam password string required kata sandi baru. Example: passwordbaru
 */
class ResetPasswordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'key' => 'required|exists:users,password_helper_key',
            'password' => 'required|string|min:8',
        ];
    }
}
