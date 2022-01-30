<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrnPayment extends Model
{
    use HasFactory;
    protected $table = 'brn_payments';
    protected $fillable = ['paymentable_type', 'paymentable_id', 'amount'];

    // public $with = ['paymentable'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'month','year','month_year','data_date'
    ];

    public function paymentable()
    {
        if($this->paymentable_type == 'registration' || $this->paymentable_type == 'extension'){
            return $this->belongsTo('App\User', 'paymentable_id', 'id');
            // $this->belongsTo()
        }else if($this->paymentable_type == 'donation'){
            return $this->belongsTo('App\DonationUser', 'paymentable_id', 'id');
        }
    }

    public function getMonthAttribute($value)
    {
        if($this->created_at != "" || $this->created_at != null){
            return date("m", strtotime($this->created_at));
        }
    }
    public function getYearAttribute($value)
    {
        if($this->created_at != "" || $this->created_at != null){
            return date("Y", strtotime($this->created_at));
        }
    }
    public function getMonthYearAttribute($value)
    {
        if($this->created_at != "" || $this->created_at != null){
            return date("m-Y", strtotime($this->created_at));
        }
    }
    public function getDataDateAttribute($value)
    {
        if($this->created_at != "" || $this->created_at != null){
            return date("Y-m-d", strtotime($this->created_at));
        }
    }

     /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /**
     * Scoping where aricle is publised
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeSourceReg($query)
    {
        return $query->where('paymentable_type', 'registration');
    }
    public function scopeSourceExt($query)
    {
        return $query->where('paymentable_type', 'extension');
    }
    public function scopeSourceOlshop($query)
    {
        return $query->where('paymentable_type', 'olshop');
    }
    public function scopeSourceDonation($query)
    {
        return $query->where('paymentable_type', 'donation');
    }
}
