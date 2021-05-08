<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use BeyondCode\Comments\Traits\HasComments;
use Conner\Likeable\Likeable;

class Comment extends Model
{
    use HasComments;
    use Likeable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comment',
        'user_id',
        'is_approved'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_approved' => 'boolean'
    ];


    /**
     * Scope where comment is approved
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }


    public function commentable()
    {
        return $this->morphTo();
    }


    public function commentator()
    {
        return $this->belongsTo($this->getAuthModelName(), 'user_id');
    }


    /**
     * Approve the comment
     *
     * @return App\Modes\Comment
     */
    public function approve()
    {
        $this->update([
            'is_approved' => true,
        ]);

        return $this;
    }


    /**
     * Disapprove the comment
     *
     * @return App\Modes\Comment
     */
    public function disapprove()
    {
        $this->update([
            'is_approved' => false,
        ]);

        return $this;
    }


    protected function getAuthModelName()
    {
        if (config('comments.user_model')) {
            return config('comments.user_model');
        }

        if (!is_null(config('auth.providers.users.model'))) {
            return config('auth.providers.users.model');
        }

        throw new Exception('Could not determine the commentator model name.');
    }


    /**
     * Get all of the replies comments.
     */
    public function replies()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
