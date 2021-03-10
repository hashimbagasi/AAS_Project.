<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdvCreateDeptReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Departments = DB::select("select Advisors.id , Departments.name,Departments.id , Advisors.Department_id from Advisors , Departments
           where Advisors.id =" . Auth::id() . " AND Departments.id = Advisors.Department_Id
            group by Departments.name,Departments.id , Advisors.Department_id , Advisors.id");

        $Students = DB::select("select Students.name,Students.id , Students.Advisor_Id from Students where Students.Advisor_Id =" . Auth::id() . "
            group by Students.Name, Students.id,Students.Advisor_Id");

        $Advisors = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors where Advisors.Id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");


        return view('Advisor/AdvCreateDeptReport')
            ->with('Students' , $Students)
            ->with('Departments', $Departments)
            ->with('Advisors', $Advisors);
    }

    public function ReportStore(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'Receiver_id' => 'required|string',
            'body'=>'required',
            'Report_Type'=>'required',
            'related_to' => 'required|string',
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
        $report->Report_Type = $request->input('Report_Type');
        $report->Report_Title = $request->input('title');
        $report->related_to = $request->input('related_to');
        $report->Report_body = $request->input('body');
        if ($request->file!==null){
            $upload=$request->file('file');
            $path=$upload->store('public/storage');
            $report->Report_File = $upload->getClientOriginalName();
            $report->File_path=$path;
        }
        $report->Receiver_id = $request->input('Receiver_id');


        $report->save();

        return redirect('Advisor/AdvCreateDeptReport')->with('success','Report Created');

    }

}
