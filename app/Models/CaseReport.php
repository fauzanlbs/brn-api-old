<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CaseReport extends Model
{
    use HasFactory;
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'car_id',
        'in_charge_id',
        'latitude',
        'longitude',
        'chronology',
        'status',
        'request_delete',
    ];

    /**
     * The attributes that are mass searchable.
     *
     * @var array
     */
    protected $searchableFields = ['*'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'request_delete' => 'boolean',
    ];


    /*
    |--------------------------------------------------------------------------
    | RELATION
    |--------------------------------------------------------------------------
    */

    /**
     * Get a user that own this case report.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Get the perpetrator this case report.
     */
    public function perpetrator()
    {
        return $this->hasOne(Perpetrator::class);
    }


    /**
     * Get a car that uses this case report.
     */
    public function car()
    {
        return $this->belongsTo(Car::class);
    }


    /**
     * Get the in_charge this case report.
     */
    public function inCharge()
    {
        return $this->belongsTo(User::class, 'in_charge_id');
    }
}
