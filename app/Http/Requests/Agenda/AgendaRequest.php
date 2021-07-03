<?php

namespace App\Http\Requests\Agenda;

use App\Rules\Location;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam area_id int required valid id <b>area</b>. Example: 1
 * @bodyParam image file file berupa gambar gambar.
 * @bodyParam type string  valid string in HUT,TOUR,KOPDAR,UNCATEGORIZED. Default UNCATEGORIZED. Example: KOPDAR
 * @bodyParam title string required judul agenda. Example: Acara Kopdar BRN.
 * @bodyParam description string required deskripsi agenda. Example: Datang untuk menhadiri acara kopdar BRN pada tangal ****.
 * @bodyParam address string required alamat. Example: Gg. Basuki Rahmat  No. 460, Gorontalo 76653, Kaltara.
 * @bodyParam start_date string required tanggal mulai. Example: 2021-03-05
 * @bodyParam end_date string required tanggal selesai. Example: 2021-11-11
 * @bodyParam start_time string required jam mulai. Example: 08:00:00
 * @bodyParam end_time string required jam selesai. Example: 13:20:00
 * @bodyParam location string lokasi (lat, long). Example: 31.2467601,29.9020376
 */
class AgendaRequest extends FormRequest
{
    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => auth()->user()->id,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'area_id' => 'required|exists:areas,id',
            'image' => 'required|image|max:5000',
            'type' => 'required|in:HUT,TOUR,KOPDAR,UNCATEGORIZED',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'start_time' => 'required|date_format:H:i:s',
            'end_time' => 'required|date_format:H:i:s',
            'location' => ['nullable', new Location],
        ];
    }
}
