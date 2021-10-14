<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class UserPersonalInformation extends Model
{
    use HasFactory;

    protected $guarded  = [];

    protected $table = 'user_personal_informations';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date_of_birth' => 'datetime:Y-m-d'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'company_logo_url',
        'siupsku_image_url',
    ];


    public function setDateAttribute($value)
    {
        $this->attributes['date'] = (new Carbon($value))->format('Y-m-d');
    }


    /**
     * Get comapany logo url attribute
     *
     * @return string
     */
    public function getCompanyLogoUrlAttribute()
    {
        return $this->company_logo
            ? Storage::disk('public')->url($this->company_logo)
            : ('https://ui-avatars.com/api/?name=' . urlencode($this->company_name ?? 'A') . '&color=7F9CF5&background=EBF4FF');
    }


    /**
     * Get comapany logo url attribute
     *
     * @return string
     */
    public function getSiupskuImageUrlAttribute()
    {
        return $this->siupsku_image
            ? Storage::disk('public')->url($this->siupsku_image)
            : ('https://ui-avatars.com/api/?name=' . urlencode($this->company_name ?? 'S') . '&color=7F9CF5&background=EBF4FF');
    }


    /*
    |--------------------------------------------------------------------------
    | RELATION
    |--------------------------------------------------------------------------
    */

    /**
     * Get the user that owns the personal information.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
