<?php

namespace App\Http\Requests\CaseReport;

use App\Rules\Location;
use Illuminate\Foundation\Http\FormRequest;
use Propaganistas\LaravelPhone\PhoneNumber;

/**
 * @bodyParam car_id int required valid id <b>car</b>. Example: 1
 * @bodyParam location string required lokasi (lat, long). Example: 31.2467601,29.9020376
 * @bodyParam chronology string required kronologi.
 * @bodyParam perpetrator object required Pelaku.
 * @bodyParam perpetrator.nik int required NIK. Example: 123123123
 * @bodyParam perpetrator.name string required Nama lengkap. Example: Arya Anggara
 * @bodyParam perpetrator.phone_number string required nomor telepon. Example: 0821123213
 * @bodyParam perpetrator.address string required Alamat lengkap. Example: Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia
 * @bodyParam perpetrator.photo image required file berupa gambar. Example: path
 * @bodyParam perpetrator.information string required informasi tambahan.
 */
class CaseReportRequest extends FormRequest
{
    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'perpetrator.phone_number' => PhoneNumber::make($this->phone_number, 'ID'),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'car_id' => 'required|exists:cars,id',
            'location' => ['required', new Location],
            'chronology' => 'required|string',
            'perpetrator' => 'required|array',
            'perpetrator.nik' => 'required|numeric',
            'perpetrator.name' => 'required|min:3|max:255|string',
            'perpetrator.phone_number' => 'required|phone:id',
            'perpetrator.address' => 'required|max:255|string',
            'perpetrator.photo' => 'required|image|max:5000',
            'perpetrator.information' => 'required|string',
        ];
    }
}
