<?php

namespace App\Http\Controllers;

use App\Models\ReportCase;
use Illuminate\Http\Request;
use Response;

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
        return response()->json(["report_cases"=>$report_cases]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        if($request->hasFile('data_penyewa')){
            $name = time(). "." .$request->file('data_penyewa')->getClientOriginalName();
            $input['data_penyewa'] = url(asset('public/images/'.$name));
          $request->data_penyewa->move(public_path()."/images" , $name);
            }
        $report_case=ReportCase::create($input);
        return response()->json(["report_case"=>$report_case]);
    }

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
