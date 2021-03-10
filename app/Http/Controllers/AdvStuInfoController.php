<?php

namespace App\Http\Controllers;

use App\Advisor;
use App\User_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdvStuInfoController extends Controller
{
    public function index()
    {

        $Advisors = DB::select("select DISTINCT Students.Name, Students.id from Students,Advisors where " . Auth::id() . "=Students.Advisor_id");
        $Stu_Infos= DB::select("select user_infos.*,Students.Name from user_infos,Students where Students.id=user_infos.Student_id ");

        $Advisor = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors where Advisors.Id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");


        return view('/Advisor/AdvStuInfo')
            ->with('Advisors', $Advisors)
            ->with('Advisor', $Advisor)
            ->with('Stu_Infos',$Stu_Infos);
    }

    public function Show(Request $request)
    {
        $Advisors = DB::select("select DISTINCT Students.Name, Students.id from Students,Advisors where " . Auth::id() . "=Students.Advisor_id");

        $adv = new Advisor;
        $adv->User_Infos = $request->Input('Stu_Info');

        $value = $request->Stu_Info;



        return redirect('/Advisor/AdvStuInfo')
            ->with('Advisors', $Advisors)
            ->with('values', $value);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $Student_id
     * @return \Illuminate\Http\Response
     */
    public function SurveyShow($Student_id){
        $dl = User_info::find($Student_id);
        return Storage::download($dl->File_path,$dl->Survey_File);

    }
}
