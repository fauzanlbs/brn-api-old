<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam nik_ktp string nik ktp. Example: 317250754107......
 * @bodyParam bio string bio. Example: Don`t care what you say about me I like the way I am.
 * @bodyParam gender string Jenis kelamin (male, female). Example: male
 * @bodyParam place_of_birth string Tempat lahir. Example: Jakarta
 * @bodyParam date_of_birth string Tanggal lahir. Example: 2002-12-25
 * @bodyParam company_name string nama perusahaan. Example: Neosantara
 * @bodyParam company_logo file logo perusahaan.
 * @bodyParam siupsku_number string nomor siupsku. Example: 123123
 * @bodyParam siupsku_image file gambar siupsku.
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
            'company_name' => 'nullable|string|max:255',
            'company_logo' => 'nullable|image|max:5000',
            'siupsku_number' => 'nullable|string|max:255',
            'siupsku_image' => 'nullable|image|max:5000',
            'area' => 'nullable|string|max:255',
            'area_code' => 'nullable|string|max:255',
            'region' => 'nullable|string|max:255',
        ];
    }
}
