<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdvHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = DB::select("select Students.name,Students.id ,Students.Academic_Degree, Students.Academic_Status,Students.GPA,Students.Previous_Hours,Students.Left_Hours,Students.Recorded_Hours,Students.Advisor_Id , users.updated_at , users.id from Students , users where Students.Advisor_Id =" . Auth::id() . "
            AND users.id = Students.id group by Students.Name, Students.id, Students.Academic_Status, Students.Academic_Degree,Students.GPA, Students.Previous_Hours, Students.Left_Hours, Students.Recorded_Hours, Students.Advisor_Id , users.updated_at , users.id ");

        $Advisors = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors where Advisors.Id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");


        return view('Advisor/AdvHome')
            ->with('users', $users)
            ->with('Advisors', $Advisors);

    }
}
