<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrnPaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" =>  $this->id,
            "category" => $this->transaction_code,
            "amount" => $this->amount,
            // "detail" => $this->paymentable,
            "month" => $this->months == null || $this->months == '' ? $this->month : $this->months,
            "year" => $this->years == null || $this->years == '' ? $this->year : $this->years,
            "created_at" => $this->created_at,
            "korda_id" => $this->korda_id,
            "korwil_id" => $this->korwil_id,
        ];
    }
}
