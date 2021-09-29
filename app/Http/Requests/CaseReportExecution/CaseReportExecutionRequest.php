<?php

namespace App\Http\Requests\CaseReportExecution;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam case_report_id int required
 * @bodyParam koordinator_user_id int required
 * @bodyParam korda_yang_menangani int required
 * @bodyParam perpetrator_id int required
 * @bodyParam status string required Status. Example: 'pending', 'verified', 'progress', 'completed'
 * @bodyParam uraian_singkat string 
 */
class CaseReportExecutionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'case_report_id' => 'required|exists:case_reports,id',
            'koordinator_user_id' => 'required',
            'korda_yang_menangani' => 'required',
            'perpetrator_id' => 'required|exists:perpetrators,id',
            'status' => ['required', Rule::in(['pending', 'verified', 'progress', 'completed'])],
            'uraian_singkat' => ['required'],
        ];
    }
}
