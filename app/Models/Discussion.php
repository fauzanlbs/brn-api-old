<?php

namespace App\Models;

use App\Traits\HasComments;
use Conner\Likeable\Likeable;
use App\Models\Scopes\LimitChars;
// use BeyondCode\Comments\Traits\HasComments;
use App\Models\Scopes\Searchable;
use App\Models\Scopes\ImageUrlable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Sluggable;
use Rinvex\Categories\Traits\Categorizable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discussion extends Model
{
    use HasFactory;
    use Sluggable;
    use SluggableScopeHelpers;
    use Categorizable;
    use Searchable;
    use LimitChars;
    use HasComments;
    use Likeable;
    use ImageUrlable;

    protected $guarded = [];

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
        'featured'  => 'boolean',
        'private'  => 'boolean',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'slug_or_title',
            ],
        ];
    }


    /**
     * Get the user that create the discussion.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    /**
     * Get the users that invited in this discussion.
     */
    public function invitedUsers()
    {
        return $this->belongsToMany(User::class);
    }


    /**
     * Get a case report that uses this discussion
     */
    public function caseReport()
    {
        return $this->belongsTo(CaseReport::class);
    }


    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /**
     * Scoping where discussion is finished
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeFinished($query)
    {
        return $query->where('finished_at', '!=', null);
    }


    /**
     * Scoping where discussion is for the case report
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeCaseReport($query)
    {
        return $query->where('case_report_id', '!=', null);
    }


    /**
     * Scoping where discussion not for the case report
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeNotCaseReport($query)
    {
        return $query->where('case_report_id', '!=', null);
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /**
     * The slug is created automatically from the "title" field if no slug exists.
     *
     * @return String
     */
    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->title;
    }

    public function getCoverImageUrlAttribute()
    {
        return $this->cover_image
            ? Storage::disk('public')->url($this->cover_image)
            : null;
    }
}
