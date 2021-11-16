<?php

namespace App\Models;

use App\Models\Scopes\ImageUrlable;
use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarImage extends Model
{
    use HasFactory;
    use Searchable;
    use ImageUrlable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['car_id', 'image'];

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
     * Get a car that uses this image
     */
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
