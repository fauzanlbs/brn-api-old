<?php

namespace App\Http\Requests\CaseReport;

use App\Rules\Location;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam car_id int required valid id <b>car</b>. Example: 1
 * @bodyParam location string required lokasi (lat, long). Example: 31.2467601,29.9020376
 * @bodyParam chronology string required kronologi.
 */
class CaseReportRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'car_id' => 'required|exists:cars,id',
            // 'location' => ['required', new Location],
            'chronology' => 'required|string'
        ];
    }
}
