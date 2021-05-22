<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use App\Traits\CollectsPoints;
use App\Traits\HasProfilePhoto;
use App\Traits\UserRegularFunction;
use BeyondCode\Comments\Contracts\Commentator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Rinvex\Addresses\Traits\Addressable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements Commentator
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use UserRegularFunction;
    use HasProfilePhoto;
    use Addressable;
    use HasRoles;
    use CollectsPoints;
    use Searchable;

    /**
     * The attributes that are mass searchable.
     *
     * @var array
     */
    protected $searchableFields = ['*'];

    /**
     * Check if a comment for a specific model needs to be approved.
     * @param mixed $model
     * @return bool
     */
    public function needsCommentApproval($model): bool
    {
        return false;
    }

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


    /**
     * Get the articles where created by this user.
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }


    /**
     * Get the discussion where created by this user.
     */
    public function discussions()
    {
        return $this->hasMany(Article::class);
    }


    /**
     * Get the daily check in   for the user.
     */
    public function dailyCheckIn()
    {
        return $this->hasMany(DailyCheckIn::class);
    }


    /**
     * Get the course where created by this user.
     */
    public function courses()
    {
        return $this->hasMany(Course::class);
    }


    /**
     * Get my learnings course.
     */
    public function myLearnings()
    {
        return $this->belongsToMany(Course::class, 'course_user', 'user_id', 'course_id');
    }


    /**
     * Get my Cars.
     */
    public function myCars()
    {
        return $this->hasMany(Car::class);
    }

    /**
     * Get my Firebase data.
     */
    public function firebase()
    {
        return $this->hasOne(Firebase::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
