<?php

namespace App\Http\Controllers;

use App\Advisor;
use app\Department;
use App\PDFModel;
use App\Report;
use App\User_info;
use Carbon\Carbon;
use app\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   $Departments = DB::select("select name,id ,Department , college , Actual_Load , Official_Load , NSemester , Academic_Degree  from Departments where Id =" . Auth::id() . "
            group by name,id ,Department ,college , Actual_Load , Official_Load , NSemester , Academic_Degree");

        $Advisors = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors where Advisors.Id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");


        $Adv_list = DB::select("select Advisors.Name, Actual_Hours , Official_Hours , Advisors.Id ,COUNT(case when Advisors.Id=Students.Advisor_Id then 0 END ) as Number_Of_Student,users.updated_at from Students,Advisors ,users  where Advisors.Department_Id =" . Auth::id() . "
             AND users.id = Advisors.Id group by Advisors.Name, Actual_Hours ,Advisors.Id, Official_Hours , users.id, users.updated_at");

        return view('Department/DeptHome')
            ->with('Departments', $Departments)
            ->with('Advisors', $Advisors)
            ->with('Adv_list',$Adv_list);


    }
    public function DeptRequests(){
        $Departments = DB::select("select name,id ,Department , college , Actual_Load , Official_Load , NSemester , Academic_Degree  from Departments where Id =" . Auth::id() . "
            group by name,id ,Department ,college , Actual_Load , Official_Load , NSemester , Academic_Degree");

        $Advisors = DB::select("select Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at from Advisors where Advisors.Department_Id =" . Auth::id() . "
            group by Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at");


        return view('Department/DeptRequests')
            ->with('Departments', $Departments)
            ->with('Advisors', $Advisors);
    }
    public function DeptReports(){
        $Departments = DB::select("select name,id ,Department , college , Actual_Load , Official_Load , NSemester , Academic_Degree  from Departments where Id =" . Auth::id() . "
            group by name,id ,Department ,college , Actual_Load , Official_Load , NSemester , Academic_Degree");

        $Advisors = DB::select("select Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at from Advisors where Advisors.Department_Id =" . Auth::id() . "
            group by Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at");


        $Dept_report=DB::select("select DISTINCT reports.name,reports.related_to,reports.Report_Id ,reports.Report_Type ,reports.Receiver_id,reports.Sender_id,reports.created_at,reports.Report_body,reports.Report_Title,reports.Report_File
            from reports,Advisors,Departments
            where " . Auth::id()."= Advisors.Department_id and (reports.Sender_id = Advisors.Id or reports.Receiver_id = Advisors.Id or ".Auth::id()."=reports.Receiver_id or ".Auth::id()."=reports.Sender_id  )" );
        return view('Department/DeptReports')
            ->with('Departments', $Departments)
            ->with('Advisors', $Advisors)
            ->with('Dept_report',$Dept_report);
    }

    public function DeptCreateAdvReport(){
        $Departments = DB::select("select name,id ,Department , college , Actual_Load , Official_Load , NSemester , Academic_Degree  from Departments where Id =" . Auth::id() . "
            group by name,id ,Department ,college , Actual_Load , Official_Load , NSemester , Academic_Degree");

        $Advisors = DB::select("select Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at from Advisors where Advisors.Department_Id =" . Auth::id() . "
            group by Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at");

        $Students = DB::select("select advisors.id , advisors.department_id ,departments.id ,  Students.name,Students.id , Students.Advisor_Id from Students , advisors , departments where departments.id =" . Auth::id() . " AND advisors.Department_id = " . Auth::id() . " And
        advisors.id = students.Advisor_id
            group by advisors.id , advisors.department_id ,departments.id ,  Students.name,Students.id , Students.Advisor_Id");

        return view('Department/DeptCreateAdvReport')
            ->with('Departments', $Departments)
            ->with('Students', $Students)
            ->with('Advisors', $Advisors);

    }
    public function DeptChatInfo(Request $request){
        $Departments = DB::select("select name,id ,Department , college , Actual_Load , Official_Load , NSemester , Academic_Degree  from Departments where Id =" . Auth::id() . "
            group by name,id ,Department ,college , Actual_Load , Official_Load , NSemester , Academic_Degree");

        $Advisors = DB::select("select Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at from Advisors where Advisors.Department_Id =" . Auth::id() . "
            group by Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at");

        $Students = DB::select("select advisors.id , advisors.department_id ,departments.id ,  Students.name,Students.id , Students.Advisor_Id from Students , advisors , departments where departments.id =" . Auth::id() . " AND advisors.Department_id = " . Auth::id() . " And
        advisors.id = students.Advisor_id
            group by advisors.id , advisors.department_id ,departments.id ,  Students.name,Students.id , Students.Advisor_Id");


        $Sender = new PDFModel;
        $Receiver = new PDFModel;
        $Receiver->Receiver=$request->input('Receiver');
        $Sender->Sender=$request->input('Sender');

        return view('Department/DeptChatInfo')
            ->with('Departments', $Departments)
            ->with('Students', $Students)
            ->with('Advisors', $Advisors);

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
    public function DeptStuInfo()
    {

        $Students = DB::select("select DISTINCT advisors.id , advisors.department_id ,departments.id ,  Students.name,Students.id , Students.Advisor_Id from Students , advisors , departments where departments.id =" . Auth::id() . " AND advisors.Department_id = " . Auth::id() . " And
        advisors.id = students.Advisor_id
            group by advisors.id , advisors.department_id ,departments.id ,  Students.name,Students.id , Students.Advisor_Id");

        $Stu_Infos= DB::select("select user_infos.*,Students.Name from user_infos,Students where Students.id=user_infos.Student_id ");

        $Advisor = DB::select("select name,id ,Department , college , Actual_Load , Official_Load , NSemester , Academic_Degree  from Departments where id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Load , Official_Load , NSemester , Academic_Degree");


        return view('/Department/DeptStuInfo')
            ->with('Students', $Students)
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
    public function DeptCreateAdminReport(){
        $Departments = DB::select("select name,id ,Department , college , Actual_Load , Official_Load , NSemester , Academic_Degree  from Departments where Id =" . Auth::id() . "
            group by name,id ,Department ,college , Actual_Load , Official_Load , NSemester , Academic_Degree");

        $Admins = DB::select('select name, id from Admins
            group by name,id');

        $Students = DB::select("select advisors.id , advisors.department_id ,departments.id ,  Students.name,Students.id , Students.Advisor_Id from Students , advisors , departments where departments.id =" . Auth::id() . " AND advisors.Department_id = " . Auth::id() . " And
        advisors.id = students.Advisor_id
            group by advisors.id , advisors.department_id ,departments.id ,  Students.name,Students.id , Students.Advisor_Id");



        return view('Department/DeptCreateAdminReport')
            ->with('Departments', $Departments)
            ->with('Students', $Students)
            ->with('Admins', $Admins);
    }

    public function ReportStore(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'Receiver_id' => 'required|string',
            'body'=>'required',
            'related_to' => 'required|string',
            'Report_Type'=>'required',
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
        $report->Report_Title = $request->input('title');
        $report->Report_Type = $request->input('Report_Type');
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

        return redirect('Department/DeptReports')->with('success','Report Created');


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $Report_Id
     * @return \Illuminate\Http\Response
     */
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

}
