<?php

namespace App\Http\Controllers;
use App;
use App\Advisor;
use App\Http\Controllers\Controller;
use App\Report;
use App\User;
use App\PDFModel;
use App\User_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Mpdf\Mpdf;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $Admins = DB::select("select name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree  from  Admins
            where id =" . Auth::id() . "
          group by name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree");

        $users = DB::select("select Students.name,Students.id , Students.Academic_Status,Students.GPA,Students.Previous_Hours,Students.Left_Hours,Students.Recorded_Hours,Students.Advisor_Id from Students where Students.Advisor_Id =" . Auth::id() . "
            group by Students.Name, Students.id, Students.Academic_Status, Students.GPA, Students.Previous_Hours, Students.Left_Hours, Students.Recorded_Hours, Students.Advisor_Id");

        $Advisors = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors where Advisors.Id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");


        return view('Administrator/AdminHome',['Admins' => $Admins])
            ->with('Admins',$Admins)
            ->with('users', $users)
            ->with('Advisors', $Advisors);

    }
    public function Colleges()
    {
        $Admins = DB::select("select name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree  from  Admins
            where id =" . Auth::id() . "
          group by name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree");
        $users = DB::select("select Students.name,Students.id , Students.Academic_Status,Students.GPA,Students.Previous_Hours,Students.Left_Hours,Students.Recorded_Hours,Students.Advisor_Id from Students where Students.Advisor_Id =" . Auth::id() . "
            group by Students.Name, Students.id, Students.Academic_Status, Students.GPA, Students.Previous_Hours, Students.Left_Hours, Students.Recorded_Hours, Students.Advisor_Id");

        $Advisors = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors where Advisors.Id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");
       return view('Administrator/AdminColleges')->with('Admins',$Admins);
    }
    public function Registration()
    {
        $Admins = DB::select("select name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree  from  Admins
            where id =" . Auth::id() . "
          group by name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree");
        $users = DB::select("select Students.name,Students.id , Students.Academic_Status,Students.GPA,Students.Previous_Hours,Students.Left_Hours,Students.Recorded_Hours,Students.Advisor_Id from Students where Students.Advisor_Id =" . Auth::id() . "
            group by Students.Name, Students.id, Students.Academic_Status, Students.GPA, Students.Previous_Hours, Students.Left_Hours, Students.Recorded_Hours, Students.Advisor_Id");

        $Advisors = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors where Advisors.Id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");
        return view('Administrator/AdminRegistration')->with('Admins',$Admins);
    }
    public function Reports()
    {
        $Admins = DB::select("select name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree  from  Admins
            where id =" . Auth::id() . "
          group by name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree");

        $Reports = DB::select("select  users.id , users.name , reports.Report_Id ,reports.Report_Type,reports.Report_Title , reports.Report_body , reports.Report_File , reports.created_at from reports , users where Receiver_id = " . Auth::id() ." AND Sender_id = users.id
        group by reports.Report_Id , reports.Report_Title ,reports.Report_Type ,  reports.Report_body , reports.Report_File , reports.Sender_id ,reports.created_at , users.id ,users.name ");

        $Advisors = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors
            where Advisors.Id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");

        $users = DB::select("select Students.name,Students.id , Students.Academic_Status,Students.GPA,Students.Previous_Hours,Students.Left_Hours,Students.Recorded_Hours,Students.Advisor_Id from Students where Students.Advisor_Id =" . Auth::id() . "
            group by Students.Name, Students.id, Students.Academic_Status, Students.GPA, Students.Previous_Hours, Students.Left_Hours, Students.Recorded_Hours, Students.Advisor_Id");

        $Admin_reports = DB::select("select * from reports");
        return view('Administrator/AdminReports')
            ->with('Reports',$Reports)
            ->with('Admins',$Admins)
            ->with('users', $users)
            ->with('Advisors', $Advisors)
            ->with('Admin_reports',$Admin_reports);
    }
    public function CreateReport()
    {
        $Admins = DB::select("select name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree  from  Admins
            where id =" . Auth::id() . "
          group by name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree");
        $Students = DB::select("select Students.name,Students.id from Students
            group by Students.Name, Students.id");

        $Advisors = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors where Advisors.Id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");

        $Departments = DB::select("select id ,name from Departments
            group by id,name");

        return view('Administrator/AdminCreateReport')
            ->with('Admins',$Admins)
            ->with('Advisors', $Advisors)
            ->with('Students', $Students)
            ->with('Departments',$Departments);

    }




    public function Statistics()
    {
        $Admins = DB::select("select name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree  from  Admins
            where id =" . Auth::id() . "
          group by name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree");

        $users = DB::select("select  Students.College ,Students.name,Students.id , Students.Academic_Status,Students.GPA,Students.Previous_Hours,Students.Left_Hours,Students.Recorded_Hours,Students.Advisor_Id from Students");

        $Advisors = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors where Advisors.Id =" . Auth::id() . "
                    group by name,id ,Department , College , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");

        $Students = DB::select("select id ,Advisor_Id,name, email,Department,College ,Recorded_Hours,Level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA
        from Students where " . Auth::id() ."= Students.id
        group by id ,Advisor_Id,name, email,department,College ,Recorded_Hours,level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA");

        $Students_num= DB::select("select College as Colleges ,
        COUNT(id) as  Students_Number,
        COUNT(case when Academic_Status='متوقع تخرجه' THEN 1 END ) as Expected_graduation,
        COUNT(case when Academic_Status='متعثر ' THEN 1 END ) as Sturgle,
        COUNT(case when Academic_Status='منتظم ' THEN 1 END ) as Active
        from Students where College =College group by College");

        return view('Administrator/AdminStatistics')
            ->with('users', $users)
            ->with('Advisors', $Advisors)
            ->with('Admins',$Admins)
            ->with('Students_nums',$Students_num);
    }
    public function AdminStuInfo()
    {

        $Students = DB::select("select DISTINCT Students.Name, Students.id from Students");
        $Stu_Infos= DB::select("select * from user_infos ");

        $Admins = DB::select("select name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree  from  Admins
            where id =" . Auth::id() . "
          group by name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree");


        return view('/Administrator/AdminStuInfo')
            ->with('Students', $Students)
            ->with('Admins', $Admins)
            ->with('Stu_Infos',$Stu_Infos);
    }
    public function AdminChatInfo(Request $request)
    {

        $users = DB::select("select name , id from users ");

        $Admins = DB::select("select name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree  from  Admins
            where id =" . Auth::id() . "
          group by name, id ,Actual_Load , Official_Load , NSemester, department, College ,Academic_Degree");


        $Sender = new PDFModel;
        $Receiver = new PDFModel;
        $Receiver->Receiver=$request->input('Receiver');
        $Sender->Sender=$request->input('Sender');

        return view('/Administrator/AdminChatInfo')
            ->with('Admins', $Admins)
            ->with('users',$users);
    }

    public function ShowChat(Request $request)
    {
        $this->validate($request,[
            'Receiver' => 'required|string',
            'Sender' => 'required|string',
        ]);


        $Receiver=$request->input('Receiver');
        $Sender=$request->input('Sender');

        $messages = DB::select("select messages.to , messages.from , messages.message,messages.created_at from messages where " . $Sender . "=  messages.from AND " . $Receiver . "= messages.to
          Or " . $Sender . " = messages.to AND " . $Receiver . " = messages.from order by date(messages.created_at) asc; ");

        $ChatFile = 'ChatPDF';
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->autoLangToFont = true;
        $mpdf->autoScriptToLang = true;
        $mpdf->baseScript = 1;
        $mpdf->autoVietnamese = true;
        $mpdf->autoArabic = true;
        $html = \View::make('ChatPDF/ChatPDF')
          ->with('messages' , $messages)
          ->with('Sender' , $Sender)
          ->with('Receiver' , $Receiver);

        $mpdf->WriteHTML($html);
        $mpdf->Output($ChatFile , 'I');

    }
    public function Show(Request $request)
    {
        $Advisors = DB::select("select DISTINCT Students.Name, Students.id from Students,Advisors where " . Auth::id() . "=Students.Advisor_id");

        $adv = new Advisor;
        $adv->User_Infos = $request->Input('Stu_Info');

        $value = $request->Stu_Info;



        return redirect('/Administrator/AdminStuInfo')
            ->with('Advisors', $Advisors)
            ->with('values', $value);

    }
        public function ReportShow($Report_Id){
        $dl = Report::find($Report_Id);
        return Storage::download($dl->File_path,$dl->Report_File);

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

        return redirect('Administrator/AdminCreateReport')->with('success','Report Created');


    }


}
