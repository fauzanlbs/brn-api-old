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
            "month" => $this->month,
            "year" => $this->year,
            "created_at" => $this->created_at,
            "korda_id" => $this->korda_id,
            "korwil_id" => $this->korwil_id,
        ];
    }
}
