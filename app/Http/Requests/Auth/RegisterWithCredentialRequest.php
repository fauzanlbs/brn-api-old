<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam name string required nama lengkap. Example: Arya Anggara
 * @bodyParam email string required email. Example: aryaanggara.dev@gmail.com
 * @bodyParam password string required kata sandi. Example: isipassword
 */
class RegisterWithCredentialRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ];
    }
}
