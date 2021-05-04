<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'histories' => 'array',
        'organizational_regulations' => 'array',
        'organizational_regulations' => 'array',
        'adarts' => 'array',
    ];
}
