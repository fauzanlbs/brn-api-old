<?php

namespace App\Models;

use App\Models\CaseReport;
use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'user_id',
        // 'car_make_id',
        // 'car_type_id',
        // 'car_fuel_id',
        // 'car_model_id',
        // 'car_color_id',
        // 'status',
        // 'is_approved',
        // 'police_number',
        // 'year',
        // 'is_automatic',
        // 'capacity',
        // 'equipment',

        'id',
        'user_id',
        'stnk_image',
        'machine_number',
        'chassis_number',
        'car_make_id',
        'car_type_id',
        'car_fuel_id',
        'car_model_id',
        'car_color_id',
        'status',
        'is_approved',
        'police_number',
        'year',
        'is_automatic',
        'capacity',
        'equipment',
        'created_at',
        'updated_at',
        'stnk_number',
    ];



    /**
     * The attributes that are mass searchable.
     *
     * @var array
     */
    protected $searchableFields = ['*'];

    protected $casts = [
        'is_approved' => 'boolean',
        'is_automatic' => 'boolean',
    ];


    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /**
     * Scoping where car is lost
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeWhereLost($query)
    {
        return $query->where('status', 'lost');
    }


    /**
     * Scoping where car is active
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeWhereActive($query)
    {
        return $query->where('status', 'active');
    }

    /*
    |--------------------------------------------------------------------------
    | RELATION
    |--------------------------------------------------------------------------
    */

    /**
     * Get the make this car.
     */
    public function carMake()
    {
        return $this->belongsTo(CarMake::class);
    }


    /**
     * Get the type this car.
     */
    public function carType()
    {
        return $this->belongsTo(CarType::class);
    }

    /**
     * Get the fuel this car.
     */
    public function carFuel()
    {
        return $this->belongsTo(CarFuel::class);
    }

    /**
     * Get the model this car.
     */
    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }

    /**
     * Get the color this car.
     */
    public function carColor()
    {
        return $this->belongsTo(CarColor::class);
    }

    /**
     * Get the user this car.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the images this car.
     */
    public function carImages()
    {
        return $this->hasMany(CarImage::class);
    }

    public function caseReports()
    {
        return $this->hasMany(CaseReport::class, 'car_id', 'id');
    }
}
