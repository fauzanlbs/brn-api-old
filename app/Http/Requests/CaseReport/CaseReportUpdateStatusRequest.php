<?php

namespace App\Http\Requests\CaseReport;

use App\Rules\Location;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam status string required lokasi (lat, long). Example: 31.2467601,29.9020376
 */
class CaseReportUpdateStatusRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'status' => 'required|in:pending|verified|progress|completed',
        ];
    }
}
