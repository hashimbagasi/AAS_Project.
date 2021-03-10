<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StuShowRegController extends Controller
{
    public function index()
    {
        $Advisors = DB::select("select Advisors.Name,Advisors.Id , Students.Advisor_Id from  Students , Advisors where Students.id =" . Auth::id() . " AND Advisors.Id = Students.Advisor_Id
            group by Advisors.Name,Advisors.Id , Students.Advisor_Id");

        $Students = DB::select("select id ,Advisor_Id,name, email,Department,College ,Recorded_Hours,Level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA
        from Students where " . Auth::id() ."= Students.id
        group by id ,Advisor_Id,name, email,department,College ,Recorded_Hours,level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA");

        return view('Student/StuShowReg')
            ->with('Students', $Students)
            ->with('Advisors', $Advisors);
    }
}
