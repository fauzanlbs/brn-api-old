<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Area;
use App\Models\Region;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public $with = ['korda', 'korwil'];


    public function setDateAttribute($value)
    {
        $this->attributes['date'] = (new Carbon($value))->format('Y-m-d');
    }

    /**
     * Get garage image url attribute
     *
     * @return string
     */
    public function getGarageImageUrlAttribute()
    {
        return $this->garage_image
            ? Storage::disk('public')->url($this->garage_image)
            : ('https://ui-avatars.com/api/?name=' . urlencode($this->company_name ?? 'A') . '&color=7F9CF5&background=EBF4FF');
    }


    /**
     * Get profile image url attribute
     *
     * @return string
     */
    public function getProfileImageUrlAttribute()
    {
        return $this->profile_image
            ? Storage::disk('public')->url($this->profile_image)
            : ('https://ui-avatars.com/api/?name=' . urlencode($this->company_name ?? 'A') . '&color=7F9CF5&background=EBF4FF');
    }

    /**
     * Get passport image url attribute
     *
     * @return string
     */
    public function getPassportImageUrlAttribute()
    {
        return $this->passport_image
            ? Storage::disk('public')->url($this->passport_image)
            : ('https://ui-avatars.com/api/?name=' . urlencode($this->company_name ?? 'A') . '&color=7F9CF5&background=EBF4FF');
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

    public function korda()
    {
        return $this->belongsTo(Area::class, 'korda_id', 'id');
    }

    public function korwil()
    {
        return $this->belongsTo(Region::class, 'korwil_id', 'id');
    }
}
