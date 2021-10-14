<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam provider string required nama provider (google,facebook,twitter). Example: google
 * @bodyParam token string required social token. Example: eyJ0eXA...
 */
class SocialRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'provider' => 'required|in:google,facebook,twitter',
            'token' => 'required|string|max:255',
        ];
    }
}
