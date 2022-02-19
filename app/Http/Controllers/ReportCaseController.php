<?php

namespace App\Http\Controllers;

use App\Models\ReportCase;
use Illuminate\Http\Request;
use Response;
use App\Models\Perpetrator;
use App\Http\Resources\ReportCaseResource;
use Illuminate\Support\Facades\Storage;
class ReportCaseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report_cases=ReportCase::get();
       
        // if($report_cases->perpetrator->information == null)
        // $report_cases->perpetrator->information ="";
        // if($report_cases->perpetrator->created_by_id == null)
        // $report_cases->perpetrator->created_by_id ="";
        return response()->json(["report_cases"=>ReportCaseResource::collection($report_cases)]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

        if (isset($input['data_penyewa'])) {
            $input['data_penyewa'] = $input['data_penyewa']->storePublicly(
                'perpetrator',
                ['disk' => 'public']
            );
        }
        // return $input['data_penyewa'];
        // if($request->hasFile('data_penyewa')){
        //     $name = time(). "." .$request->file('data_penyewa')->getClientOriginalName();
        //     $input['data_penyewa'] = url(asset('public/images/'.$name));
        //   $request->data_penyewa->move(public_path()."/images" , $name);
        //     }
        $report_case=ReportCase::create($input);
        return response()->json(["report_case"=>$report_case]);
    }


    public function perpetrator(Request $request)
    {
        $validated = $request->validate([
            'case_report' => 'required|exists:report_cases,id',
            ]);

        $input=$request->all();
        if (isset($input['profile_photo_path'])) {
            $input['profile_photo_path'] = $input['profile_photo_path']->storePublicly(
                'perpetrator',
                ['disk' => 'public']
            );
        }
        // $input['case_report_id']=2;
        // if($request->hasFile('profile_photo_path')){
        //     $name = time(). "." .$request->file('profile_photo_path')->getClientOriginalName();
        //     $input['profile_photo_path'] = url(asset('public/images/'.$name));
        //   $request->profile_photo_path->move(public_path()."/images" , $name);
        //     }
        $perpetrator=Perpetrator::create($input);
        $perpetrator->case_report_id=$request->case_report;
        $perpetrator->save();
        return response()->json(["perpetrator"=>$perpetrator]);
    }

    // public function perpetrator(Request $request)
    // {
    //     $perpetrator = $this->eloquentPerpetrator->createOrUpdate(NULL, $request);

    //     return response()->json(["perpetrator"=>$perpetrator]);
        
    // }
    

public function return(Request $request)
{
    $validated = $request->validate([
        'id' => 'required|exists:report_cases',
    ]); 
    $report_case=ReportCase::where('id',$request->id)->update(['status'=>'RETURNED']);

        return response()->json(["message"=>'done']);

}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReportCase  $reportCase
     * @return \Illuminate\Http\Response
     */
    public function show(ReportCase $reportCase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportCase  $reportCase
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportCase $reportCase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportCase  $reportCase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportCase $reportCase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportCase  $reportCase
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportCase $reportCase)
    {
        //
    }
}
