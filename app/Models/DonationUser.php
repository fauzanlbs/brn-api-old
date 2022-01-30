<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationUser extends Model
{
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | RELATION
    |--------------------------------------------------------------------------
    */

    public function donation()
    {
        return $this->belongsTo(Donation::class,'donation_id', 'id');
    }

    public function payment()
    {
        return $this->morphOne('App\BrnPayment', 'paymentable');
    }
}
}
