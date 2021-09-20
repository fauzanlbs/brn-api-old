<?php

namespace App\Http\Controllers;

use App\Models\CaseReport;

use Illuminate\Http\Request;
use App\Models\CaseReportExecution;
use App\Http\Resources\CaseReport\CaseReportExecutionResource;
use App\Http\Requests\CaseReportExecution\CaseReportExecutionRequest;

/**
 * @group Laporan eksekusi kasus
 */
class CaseReportExecutionController extends Controller
{
    /**
     * Menambahkan eksekusi laporan kasus pengguna saat ini.
     * Dibagian ini Anda bisa menambahkan laporan eksekusi kasus pengguna saat ini.
     * @authenticated
     *
     * @param CaseReportExecutionRequest $request
     * @return CaseReportExecutionResource
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function store(CaseReportExecutionRequest $request)
    {
        $uid = $request->user()->id;

        $validated = $request->validated();
        $case_report_execution_request = $validated;

        // check if case_report has case_report_execution data ?
        $case_report_execution = CaseReportExecution::where([
            'case_report_id' => $case_report_execution_request['case_report_id']
        ])->first();

        if ($case_report_execution) {
            // update
            $case_report_execution->update($case_report_execution_request);
        } else {
            // create new
            $case_report_execution = CaseReportExecution::create($case_report_execution_request);
        }


        return (new CaseReportExecutionResource(CaseReportExecution::with('case_report')->find($case_report_execution->id)))->addtional([
            'message' => __('messages.created', ['attr' => 'laporan eksekusi kasus ']),
        ]);
    }
}
