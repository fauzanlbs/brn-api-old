<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam car_make_id int valid id <b>carMake</b>. Example: 1
 * @bodyParam car_type_id int valid id <b>carType</b>. Example: 1
 * @bodyParam car_fuel_id int valid id <b>carFuel</b>. Example: 1
 * @bodyParam car_model_id int valid id <b>carModel</b>. Example: 1
 * @bodyParam car_color_id int valid id <b>carColor</b>. Example: 1
 * @bodyParam police_number string required nomor polisi. Example: K 7998 UG
 * @bodyParam year string required tahun. Example: 2015
 * @bodyParam is_automatic bool required apakah automatic?. Example: false
 * @bodyParam capacity string required kapasitas mobil. Example: 4
 * @bodyParam equipment string  eqipment.
 * @bodyParam files object[] List gambar.
 * @bodyParam files[].image image file gambar. Example: path
 */
class CarRequest extends FormRequest
{
    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => auth()->user()->id,
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
            'user_id' => 'required',
            'car_make_id' => 'required|exists:car_makes,id',
            'car_type_id' => 'required|exists:car_types,id',
            'car_fuel_id' => 'required|exists:car_fuels,id',
            'car_model_id' => 'required|exists:car_models,id',
            'car_color_id' => 'required|exists:car_colors,id',
            'police_number' => 'required|max:255|string',
            'year' => 'required|numeric',
            'is_automatic' => 'required|boolean|boolean',
            'capacity' => 'required|max:255',
            'equipment' => 'nullable|max:255|string',
            'files' => 'nullable|array',
            'files.*.image' => 'required|image|max:5000',
        ];
    }
}
