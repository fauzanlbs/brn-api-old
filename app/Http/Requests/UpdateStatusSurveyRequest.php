<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


/**
 * @bodyParam is_survey bool required telah di survey apa belum.
 */
class UpdateStatusSurveyRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'is_survey' => 'required|boolean',
        ];
    }
}
