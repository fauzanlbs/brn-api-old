<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    /**
     * Define the table
     *
     * @var string
     */
    protected $table = 'likeable_likes';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @access private
     */
    public function likeable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
