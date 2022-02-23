<?php

namespace App\Models;

use App\Models\User;
use App\Models\UserPersonalInformation;
use App\Traits\HasProfilePhoto;
use App\Models\Scopes\Searchable;
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
        'birth_date',
        'chronology',
        'created_by_id',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public $with = ['created_by'];

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

    /**
     * Get a user that create this perpetrator
     */
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }

    /**
     * Get a user rental info that create this perpetrator
     */
    public function rent_created_by()
    {
        return $this->belongsTo(UserPersonalInformation::class, 'created_by_id', 'user_id');
    }

    public function reportCase()
    {
        return $this->belongsTo(ReportCase::class,'case_report_id');
    }
}
