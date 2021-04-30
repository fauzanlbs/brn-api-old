<?php

namespace App\Models;

use App\Traits\CollectsPoints;
use App\Traits\HasProfilePhoto;
use App\Traits\UserRegularFunction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Rinvex\Addresses\Traits\Addressable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use UserRegularFunction;
    use HasProfilePhoto;
    use Addressable;
    use HasRoles;
    use CollectsPoints;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo_path'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    /**
     * Get the providers for the user.
     */
    public function socialAccounts()
    {
        return $this->hasMany(SocialAccount::class);
    }


    /**
     * Get the personal information for the user.
     */
    public function personalInformation()
    {
        return $this->hasOne(UserPersonalInformation::class);
    }
}
