<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CaseReportExecution extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'case_report_executions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'case_report_id',
        'koordinator_user_id',
        'korda_yang_menangani',
        'perpetrator_id',
        'status',
        'uraian_singkat',
    ];

    /**
     * The attributes that are mass searchable.
     *
     * @var array
     */
    protected $searchableFields = ['*'];
}
