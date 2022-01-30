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
        $detail = [];
        if($this->whenLoaded('paymentable')){
            if($this->paymentable_type == 'registration' ||  $this->paymentable_type == 'extension'){
                $detail = new SimpleUserResource($this->whenLoaded('paymentable'));
            }else if($this->paymentable_id == 'donation'){
                $detail = UserDonationResource::collection($this->whenLoaded('paymentable'));
            }
        }
        
        return [
            "id" =>  $this->id,
            "category" => $this->paymentable_type,
            "amount" => $this->amount,
            "detail" => $detail,
        ];
    }
}
