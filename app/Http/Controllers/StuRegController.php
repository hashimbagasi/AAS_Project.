<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StuRegController extends Controller
{
    public function index()
    {
        $Advisors = DB::select("select Advisors.Name,Advisors.Id , Students.Advisor_Id from  Students , Advisors where Students.id =" . Auth::id() . " AND Advisors.Id = Students.Advisor_Id
            group by Advisors.Name,Advisors.Id , Students.Advisor_Id");

        $Students = DB::select("select id ,Advisor_Id,name, email,Department,College ,Recorded_Hours,Level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA
        from Students where " . Auth::id() . "= Students.id
        group by id ,Advisor_Id,name, email,department,College ,Recorded_Hours,level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA");

        //$Course1 = DB::select("select * from Courses where Course_id = 14013602 order by Course_id");
        //$Course2 = DB::select("select * from Courses where Course_id = 14014305 order by Course_id");
        //$Course3 = DB::select("select * from Courses where Course_id = 14013654 order by Course_id");
        //$Course4 = DB::select("select * from Courses where Course_id = 14013778 order by Course_id");
//        $Course5 = DB::select("select * from Courses where Course_id = 5 order by Course_id");
//        $Course6 = DB::select("select * from Courses where Course_id = 6 order by Course_id");
//        $Course7 = DB::select("select * from Courses where Course_id = 7 order by Course_id");
//        $Course8 = DB::select("select * from Courses where Course_id = 8 order by Course_id");
//        $Course9 = DB::select("select * from Courses where Course_id = 9 order by Course_id");
//        $Course10 = DB::select("select * from Courses where Course_id = 10 order by Course_id");

        //$ACourse1 = DB::select("select * from avaliable_courses where ACourse_id = 14013602 order by ACourse_id");
        //$ACourse2 = DB::select("select * from avaliable_courses where ACourse_id = 14014305 order by ACourse_id");
        //$ACourse3 = DB::select("select * from avaliable_courses where ACourse_id = 14013654 order by ACourse_id");
        //$ACourse4 = DB::select("select * from avaliable_courses where ACourse_id = 14013778 order by ACourse_id");
//        $ACourse5 = DB::select("select * from avaliable_courses where ACourse_id = 5 order by ACourse_id");
//        $ACourse6 = DB::select("select * from avaliable_courses where ACourse_id = 6 order by ACourse_id");
//        $ACourse7 = DB::select("select * from avaliable_courses where ACourse_id = 7 order by ACourse_id");
//        $ACourse8 = DB::select("select * from avaliable_courses where ACourse_id = 8 order by ACourse_id");
//        $ACourse9 = DB::select("select * from avaliable_courses where ACourse_id = 9 order by ACourse_id");
//        $ACourse10 = DB::select("select * from avaliable_courses where ACourse_id = 10 order by ACourse_id");

        //$stable = DB::select("select recorded_courses.course_id, recorded_courses.course_name,
        //recorded_courses.course_type, recorded_courses.Course_group from recorded_courses ");

        //$stDelT = DB::select("select * from st_del_course where st_id = 71");
        //$stWT = DB::select("select * from st_del_course where st_id = 71");

        return view('Student/StuReg')
            ->with('Students', $Students)
            ->with('Advisors', $Advisors);
           // ->with('Course1', $Course1)
            //->with('Course2', $Course2)
            //->with('Course3', $Course3)
            //->with('Course4', $Course4)
//            ->with('Course5', $Course5)
//            ->with('Course6', $Course6)
//            ->with('Course7', $Course7)
//            ->with('Course8', $Course8)
//            ->with('Course9', $Course9)
//            ->with('Course10', $Course10)

            //->with('ACourse1', $ACourse1)
            //->with('ACourse2', $ACourse2)
            //->with('ACourse3', $ACourse3)
            //->with('ACourse4', $ACourse4)
//            ->with('ACourse5', $ACourse5)
//            ->with('ACourse6', $ACourse6)
//            ->with('ACourse7', $ACourse7)
//            ->with('ACourse8', $ACourse8)
//            ->with('ACourse9', $ACourse9)
//            ->with('ACourse10', $ACourse10)

            //->with('stable', $stable)
            //->with('stDelT', $stDelT)
            //->with('stWT', $stWT);
    }
}
