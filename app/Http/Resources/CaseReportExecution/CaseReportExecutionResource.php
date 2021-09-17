<?php

namespace App\Http\Resources\CaseReport;

use App\Http\Resources\CarResource;
use App\Http\Resources\SimpleUserResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CaseReport\CaseReportResource;

class CaseReportExecutionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            'case_report_id' => $this->case_report_id,
            'koordinator_user_id' => $this->koordinator_user_id,
            'korda_yang_menangani' => $this->korda_yang_menangani,
            'perpetrator_id' => $this->perpetrator_id,
            'status' => $this->status,
            'uraian_singkat' => $this->uraian_singkat,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "case_report" => new CaseReportResource($this->whenLoaded('case_report')),
        ];
    }
}
