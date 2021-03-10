<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdvCreateStuReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $Advisors = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors where Advisors.Id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");


        $Students = DB::select("select id ,Advisor_Id,name, email,Department,College ,Recorded_Hours,Level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA
        from Students where " . Auth::id() . "= Students.Advisor_Id
        group by id ,Advisor_Id,name, email,department,College ,Recorded_Hours,level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA");

        return view('Advisor/AdvCreateStuReport')
            ->with('Advisors', $Advisors)
            ->with('Students', $Students);
    }
    public function ReportStore(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'Report_Type'=>'required',
            'Receiver_id' => 'required|string',
            'body'=>'required',
            'file'=>'mimes:pdf,png,jpg,docx|file|max:20000'
        ]);
        if ($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();

            $filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);

            $extension = $request->file('file')->getClientOriginalExtension();

            $fileNameToStore= $filename.'_'.time().'.'.$extension;

            $path = $request->file('file')->storeAs('public/image', $fileNameToStore);
        }else{
            $fileNameToStore='null';
        }
        $report = new Report;
        $report->name =Auth::user()->name;
        $report->Sender_id = Auth::id();
        $report->Report_Title = $request->input('title');
        $report->Report_Type = $request->input('Report_Type');
        $report->related_to = $request->input('Receiver_id');
        $report->Report_body = $request->input('body');
        if ($request->file!==null){
            $upload=$request->file('file');
            $path=$upload->store('public/storage');
            $report->Report_File = $upload->getClientOriginalName();
            $report->File_path=$path;
        }
        $report->Receiver_id = $request->input('Receiver_id');


        $report->save();

        return redirect('Advisor/AdvCreateStuReport')->with('success','Report Created');

    }

}

