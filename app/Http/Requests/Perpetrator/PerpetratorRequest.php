<?php

namespace App\Http\Requests\Perpetrator;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam case_report_id int  valid id <b>case_report</b>. Example: 1
 * @bodyParam nik int required NIK. Example: 123123123
 * @bodyParam name string required Nama lengkap. Example: Arya Anggara
 * @bodyParam phone_number string required nomor telepon. Example: 0821123213
 * @bodyParam address string required Alamat lengkap. Example: Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia
 * @bodyParam photo file required file berupa gambar
 * @bodyParam information string required informasi tambahan.
 */
class PerpetratorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'case_report_id' => 'nullable|exists:case_reports,id',
            'nik' => 'required|numeric',
            'name' => 'required|min:3|max:255|string',
            'phone_number' => 'required|phone:id',
            'address' => 'required|max:255|string',
            'photo' => 'nullable|image|max:5000',
            'information' => 'nullable|string',
        ];
    }
}
