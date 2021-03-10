<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StuReportsController extends Controller
{
    public function index()
    {
        $Advisors = DB::select("select Advisors.Name,Advisors.Id , Students.Advisor_Id from  Students , Advisors where Students.id =" . Auth::id() . " AND Advisors.Id = Students.Advisor_Id
            group by Advisors.Name,Advisors.Id , Students.Advisor_Id");

        $Students = DB::select("select id ,Advisor_Id,name, email,Department,College ,Recorded_Hours,Level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA
        from Students where " . Auth::id() ."= Students.id
        group by id ,Advisor_Id,name, email,department,College ,Recorded_Hours,level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA");

        $Reports =  DB::select("select  users.id, reports.name , reports.Report_Id ,reports.Report_Type,reports.Report_Title , reports.Report_body , reports.Report_File ,reports.created_at,reports.Sender_id,reports.Receiver_id from reports , users where (Receiver_id =".Auth::id()." and Sender_id=users.id) OR (Sender_id=".Auth::id()." and Receiver_id=users.id)
        group by users.id, reports.name , reports.Report_Type  , reports.Report_Id,reports.Report_Title , reports.Report_body , reports.Report_File ,reports.created_at,reports.Sender_id,reports.Receiver_id ");
        return view('Student/StuReports')
            ->with('Students', $Students)
            ->with('Reports', $Reports)
            ->with('Advisors', $Advisors);
    }
    public function ReportShow($Report_Id){
        $dl = Report::find($Report_Id);
        return Storage::download($dl->File_path,$dl->Report_File);

    }
}
