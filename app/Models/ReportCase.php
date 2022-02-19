<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportCase extends Model
{
    use HasFactory;
    public $table = 'report_cases';
    public $guarded = [];
    
    
public function perpetrator()
{
    return $this->hasOne(Perpetrator::class,'case_report_id');
}


}


