<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam comment string required judul komentar. Example: Semangat terus :)
 * @bodyParam comment string required isi komentar. Example: Semangat terus :)
 */
class CommentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'title' => 'required|string',
            'comment' => 'required|string',
        ];
    }
}
