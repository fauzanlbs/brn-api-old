<?php

namespace App\Models;

use App\Models\Scopes\ImageUrlable;
use App\Models\Scopes\LimitChars;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    use ImageUrlable;
    use LimitChars;
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'donated_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'image_url',
    ];


    /*
    |--------------------------------------------------------------------------
    | RELATION
    |--------------------------------------------------------------------------
    */

    public function donationUser()
    {
        return $this->hasMany(DonationUser::class);
    }
}
