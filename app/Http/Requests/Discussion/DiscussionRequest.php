<?php

namespace App\Http\Requests\Discussion;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam title string required judul diskusi. Example: diskusi tentang rental mobil
 * @bodyParam description string deskripsi diskusi.
 * @bodyParam cover_image string cover image diskusi.
 * @bodyParam discussion_type string optional (default forum) isi dengan forum/chat
 * @bodyParam private numeric optional (default 1) isi dengan 1 / 0
 */
class DiscussionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|string',
            'discussion_type' => 'nullabel|string',
            'private' => 'nullable|numeric'
        ];
    }
}
