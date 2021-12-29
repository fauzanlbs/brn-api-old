<?php

namespace App\Models;

use App\Models\Scopes\ImageUrlable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    // use ImageUrlable;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'active'  => 'boolean',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'image_url',
    ];

    public function getImageUrlAttribute()
    {
        return env('BACKEND_BASE_URL', 'https://admin.brnjuara.com')  . $this->image;
    }
}
