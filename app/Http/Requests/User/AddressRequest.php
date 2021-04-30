<?php

namespace App\Http\Requests\User;

use App\Rules\Location;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam label string required label. Example: Default Address
 * @bodyParam given_name string required nama pemberian. Example: Abdelrahman
 * @bodyParam family_name string nama keluarga. Example: Omran
 * @bodyParam organization string organisasi. Example: Rinvex
 * @bodyParam country_code string required kode negara (id, sg). Example: id
 * @bodyParam street string jalan. Example: 56 john doe st.
 * @bodyParam state string negara. Example: Alexandria
 * @bodyParam city string kota. Example: Alexandria
 * @bodyParam postal_code string kode pos . Example: 21614
 * @bodyParam location string lokasi (lat, long). Example: 31.2467601,29.9020376
 */
class AddressRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'label' => 'required|string|max:255',
            'given_name' => 'required|string|max:255',
            'family_name' => 'nullable|string|max:255',
            'organization' => 'nullable|string|max:255',
            'country_code' => 'required|in:id,sg',
            'street' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'postal_code' => 'nullable|postal_code:ID',
            'location' => ['nullable', new Location],
        ];
    }
}
