<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UploadFileController extends Controller {
    public function index() {
        $Departments = DB::select("select name,id ,Department , college , Actual_Load , Official_Load , NSemester , Academic_Degree  from Departments where Id =" . Auth::id() . "
            group by name,id ,Department ,college , Actual_Load , Official_Load , NSemester , Academic_Degree");

        $Advisors = DB::select("select Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at from Advisors where Advisors.Department_Id =" . Auth::id() . "
            group by Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at");

        return view('Department/DeptCreateReport')
            ->with('Departments', $Departments)
            ->with('Advisors', $Advisors);;
    }
    public function showUploadFile(Request $request) {
        $file = $request->file('image');


        //Display File Name
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';

        //Display File Extension
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';

        //Display File Real Path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

        //Display File Size
        echo 'File Size: '.$file->getSize();
        echo '<br>';

        //Display File Mime Type
        echo 'File Mime Type: '.$file->getMimeType();

        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
    }
}
