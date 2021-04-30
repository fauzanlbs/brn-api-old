<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam nik_ktp string nik ktp. Example: 317250754107......
 * @bodyParam bio string bio. Example: Don`t care what you say about me I like the way I am.
 * @bodyParam gender string Jenis kelamin (male, female). Example: male
 * @bodyParam place_of_birth string Tempat lahir. Example: Jakarta
 * @bodyParam date_of_birth string Tanggal lahir. Example: 2002-12-25
 */
class PersonalInformationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nik_ktp' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:255',
            'gender' => 'nullable|in:male,female',
            'place_of_birth' => 'nullable|max:45',
            'date_of_birth' => 'nullable|date_format:Y-m-d',
        ];
    }
}
