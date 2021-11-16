<?php

namespace App\Http\Requests\Donation;

use Illuminate\Foundation\Http\FormRequest;

class DonationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'nominal' => 'required|string',
            'prayer' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'email' => 'nullable|email',
            'payment_status' => 'nullable|numeric',
        ];
    }
}
