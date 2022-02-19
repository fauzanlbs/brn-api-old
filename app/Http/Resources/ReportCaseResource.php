<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ReportCaseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if($this->perpetrator)
        return [
            "id" => $this->id,
            "nama_pelapor" => $this->nama_pelapor,
            "nama_rental" => $this->nama_rental,
            "id_brn" => $this->id_brn,
            "alamat" =>  $this->alamat,
            "nik" =>  $this->nik,
            "phone" => $this->phone,
            "order_number" => $this->order_number,
            "korda_pelapor" => $this->korda_pelapor,
            "kronologi_kejadian" =>  $this->kronologi_kejadian,
            "unit_kendaraan" =>  $this->unit_kendaraan,
            "data_penyewa" => Storage::disk('public')->path($this->data_penyewa),
        // $path = Storage::disk('public')->path($report_cases->data_penyewa);

            "nama_sesuai_ktp" => $this->nama_sesuai_ktp,
            "status" => $this->status,
            "perpetrator" => PerpetratorResource::make($this->perpetrator),
        ];
        else
        return [
            "id" => $this->id,
            "nama_pelapor" => $this->nama_pelapor,
            "nama_rental" => $this->nama_rental,
            "id_brn" => $this->id_brn,
            "alamat" =>  $this->alamat,
            "nik" =>  $this->nik,
            "phone" => $this->phone,
            "order_number" => $this->order_number,
            "korda_pelapor" => $this->korda_pelapor,
            "kronologi_kejadian" =>  $this->kronologi_kejadian,
            "unit_kendaraan" =>  $this->unit_kendaraan,
            "data_penyewa" => $this->data_penyewa,
            "nama_sesuai_ktp" => $this->nama_sesuai_ktp,
            "status" => $this->status,
            "perpetrator" => ""
        ];
    }
}
