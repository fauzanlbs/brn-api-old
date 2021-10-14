<?php

namespace App\Models;

use App\Models\Scopes\ImageUrlable;
use App\Models\Scopes\LimitChars;
use App\Models\Scopes\Searchable;
use BeyondCode\Comments\Traits\HasComments;
use Conner\Likeable\Likeable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rinvex\Categories\Traits\Categorizable;
use CyrildeWit\EloquentViewable\InteractsWithViews;

class Article extends Model implements Viewable
{
    use HasFactory;
    use Sluggable;
    use SluggableScopeHelpers;
    use Categorizable;
    use Searchable;
    use LimitChars;
    use HasComments;
    use InteractsWithViews;
    use Likeable;
    use ImageUrlable;

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
        'date'      => 'date',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'image_url',
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
     * Get the author that owns the article.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
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
    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED')
            ->where('date', '<=', date('Y-m-d'));
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
}
