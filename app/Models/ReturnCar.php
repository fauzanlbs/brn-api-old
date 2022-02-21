<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnCar extends Model
{
    use HasFactory;
    public $table = 'return_cars';
    public $guarded = [];


    public function reportCase()
    {
        return $this->belongsTo(ReportCase::class,'case_report_id');
    }
}
