<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdvReportsController extends Controller
{
    public function index(){

        $Advisors = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors where Advisors.Id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");

        $Reports = DB::select("select  users.id , users.name , reports.Report_Id , reports.Report_Title , reports.Report_body , reports.Report_File ,reports.created_at,reports.Sender_id,reports.Receiver_id from reports , users where Receiver_id = " . Auth::id() ." AND Sender_id = users.id
        group by reports.Report_Id , reports.Report_Title , reports.Report_body , reports.Report_File , reports.Sender_id , users.id ,users.name , reports.created_at ,reports.Sender_id,reports.Receiver_id");

        $Adv_reports = DB::select("select  users.id ,reports.related_to,  reports.name , reports.Report_Id , reports.Report_Type , reports.Report_Title , reports.Report_body , reports.Report_File ,reports.created_at,reports.Sender_id,reports.Receiver_id from reports , users where (Receiver_id =".Auth::id()." and Sender_id=users.id) OR (Sender_id=".Auth::id()." and Receiver_id=users.id)
        group by users.id, reports.name  , reports.Report_Id, reports.related_to , reports.Report_Title , reports.Report_body, reports.Report_Type , reports.Report_File ,reports.created_at,reports.Sender_id,reports.Receiver_id ");
            return view('Advisor/AdvReports')
            ->with('Reports', $Reports)
            ->with('Advisors', $Advisors)
                ->with('Adv_reports',$Adv_reports);


    }

}
