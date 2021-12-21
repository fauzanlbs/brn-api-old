<?php

namespace App\Http\Requests\Discussion;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam invite_user_ids integer[] List dari id user. Example: [1]
 * @bodyParam case_report_id integer required valid id laporan kasus. Example: 1
 */
class DiscussionCaseReportRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'case_report_id' => 'required|exists:case_reports,id',
            'invite_user_ids' => 'nullable|array',
            'invite_user_ids.*' => 'exists:users,id',
        ];
    }
}
