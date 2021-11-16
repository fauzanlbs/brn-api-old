<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam key string required upload file key. Example: secret
 * @bodyParam files object[] required List file.
 */
class UploadFileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'key' => 'required',
            'files' => 'required|array',
            'files.*' => 'required|file|max:10000',
        ];
    }
}
