<?php

namespace App\Http\Requests\Discussion;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam user_ids integer[] List dari id user. Example: 1
 */
class DiscussionMemberCaseReportRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_ids' => 'nullable|array',
            'user_ids.*' => 'exists:users,id',
        ];
    }
}
