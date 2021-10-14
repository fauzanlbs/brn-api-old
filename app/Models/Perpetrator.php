<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use App\Traits\HasProfilePhoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perpetrator extends Model
{
    use HasFactory;
    use Searchable;
    use HasProfilePhoto;

    protected $fillable = [
        'case_report_id',
        'nik',
        'name',
        'phone_number',
        'address',
        'profile_photo_path',
        'information',
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
     * The attributes that are mass searchable.
     *
     * @var array
     */
    protected $searchableFields = ['*'];


    /*
    |--------------------------------------------------------------------------
    | RELATION
    |--------------------------------------------------------------------------
    */

    /**
     * Get a case report that uses this perpetrator
     */
    public function caseReport()
    {
        return $this->belongsTo(CaseReport::class);
    }
}
