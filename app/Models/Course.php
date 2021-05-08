<?php

namespace App\Models;

use App\Models\Scopes\ImageUrlable;
use App\Models\Scopes\Searchable;
use BeyondCode\Comments\Traits\HasComments;
use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    use Searchable;
    use HasComments;
    use Likeable;
    use ImageUrlable;

    /**
     * The attributes that are mass searchable.
     *
     * @var array
     */
    protected $searchableFields = ['*'];

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

    /**
     * Get the user that owns the course.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Get the lesson this course.
     */
    public function lessons()
    {
        return $this->hasMany(CourseLesson::class, 'course_id');
    }


    /**
     * Get the students this course.
     */
    public function students()
    {
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /**
     * Scoping where course is enabled
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeEnbaled($query)
    {
        return $query->where('status', 'enabled');
    }
}
