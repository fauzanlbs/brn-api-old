<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrnPayment extends Model
{
    use HasFactory;
    protected $table = 'brn_payments';
    protected $fillable = ['transaction_code', 'amount'];
}
