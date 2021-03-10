<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Hamcrest\Core\IsNull;
use Illuminate\Http\Request;
use app\User_info;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\Nullable;

class StuHomeController extends Controller
{
    public function index()
    {

        $Advisors = DB::select("select Advisors.Name,Advisors.Id , Students.Advisor_Id from  Students , Advisors where Students.id =" . Auth::id() . " AND Advisors.Id = Students.Advisor_Id
            group by Advisors.Name,Advisors.Id , Students.Advisor_Id");

        $Students = DB::select("select id ,Advisor_Id,name, email,Department,College ,Recorded_Hours,Level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA
        from Students where " . Auth::id() . "= Students.id
        group by id ,Advisor_Id,name, email,department,College ,Recorded_Hours,level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA");

        $Auth_Surv = DB::select('select Info_Status from Students ');


           $user_id =Auth::user()->id ;
           $student = Student::find($user_id);
//           dd($student->Info_Status);
           if ($student->Info_Status == 0)
               return redirect('Student/StuMandatorySurvay');
           else
               return view('Student/StuHome')
                   ->with('Students', $Students)
                   ->with('Advisors', $Advisors);
//           dd($student);


        }


    }
