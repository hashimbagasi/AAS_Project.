<?php

namespace App\Http\Controllers;

use app\Department;
use App\Report;
use Carbon\Carbon;
use app\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\Exception\CannotWriteFileException;
use Symfony\Component\HttpFoundation\File\Exception\ExtensionFileException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use Symfony\Component\HttpFoundation\File\Exception\FormSizeFileException;
use Symfony\Component\HttpFoundation\File\Exception\IniSizeFileException;
use Symfony\Component\HttpFoundation\File\Exception\NoFileException;
use Symfony\Component\HttpFoundation\File\Exception\NoTmpDirFileException;
use Symfony\Component\HttpFoundation\File\Exception\PartialFileException;
use Symfony\Component\Mime\MimeTypes;
class StuCreateReportsController extends Controller
{
    public function index()
    {
        $Advisors = DB::select("select Advisors.Name,Advisors.Id , Students.Advisor_Id from  Students , Advisors where Students.id =" . Auth::id() . " AND Advisors.Id = Students.Advisor_Id
            group by Advisors.Name,Advisors.Id , Students.Advisor_Id");

        $Students = DB::select("select id ,Advisor_Id,name, email,Department,College ,Recorded_Hours,Level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA
        from Students where " . Auth::id() . "= Students.id
        group by id ,Advisor_Id,name, email,department,College ,Recorded_Hours,level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA");


        return view('Student/StuCreateReport')
            ->with('Advisors', $Advisors)
            ->with('Students', $Students);


    }

    public function ReportStore(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'Report_Type'=>'required',
            'Receiver_id' => 'required|string',
            'body'=>'required',
            'file'=>'mimes:pdf,png,jpg,docx|file|max:2000000000'
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
        $report->related_to = Auth::id();
        $report->Report_body = $request->input('body');
        if ($request->file!==null){
            $upload=$request->file('file');
            $path=$upload->store('public/storage');
            $report->Report_File = $upload->getClientOriginalName();
            $report->File_path=$path;
        }
        $report->Receiver_id = $request->input('Receiver_id');


        $report->save();
        return redirect('Student/StuCreateReport')->with('success','Report Created');

    }

}
