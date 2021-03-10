<?php

namespace App\Http\Controllers;

use App\Mail\chatmail;
use App\Message;
use App\User;
use App\Advisor;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Pusher\Pusher;
use Illuminate\Support\Facades\Auth;

class AdvContactStController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // select all users except logged in user
       // $users = User::where('id', '!=', Auth::id())->get();

        // count how many message are unread from the selected user
        $users = DB::select("select Students.id,Students.avatar,Students.Advisor_Id,Students.name, Students.email,count(is_read) as unread
        from Students LEFT  JOIN  messages ON Students.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
        where " . Auth::id() ."= Students.Advisor_Id
        group by Students.id, Students.name,Students.Email ,Students.avatar, Students.Advisor_Id");

        $Departments = DB::select("select name,id ,Department , college , Actual_Load , Official_Load , NSemester , Academic_Degree  from Departments where Id =" . Auth::id() . "
            group by name,id ,Department ,college , Actual_Load , Official_Load , NSemester , Academic_Degree");

        $Advisors = DB::select("select Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at from Advisors where Advisors.Department_Id =" . Auth::id() . "
            group by Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at");

        $Advisors = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors where Advisors.Id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");

        $Reports = DB::select("select  users.id , users.name , reports.Report_Id , reports.Report_Title , reports.Report_body , reports.Report_File from reports , users where Receiver_id = " . Auth::id() ." AND Sender_id = users.id
        group by reports.Report_Id , reports.Report_Title , reports.Report_body , reports.Report_File , reports.Sender_id , users.id ,users.name ");


        return view('Advisor/AdvContactStu', ['users' => $users])
            ->with('Departments', $Departments)
            ->with('Reports', $Reports)
            ->with('Advisors', $Advisors);
    }

    public function getMessage($user_id)
    {
        $my_id = Auth::id();

        // Make read all unread message
        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        // Get all message from selected user
        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->oRwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->get();

        return view('messages.index', ['messages' => $messages]);
    }

    public function sendMessage(Request $request)
    {
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();

        // pusher
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);


        $to_email = "hussam.official97@gmail.com";

        Mail::to($to_email)->send(new chatmail());

        return 0;

    }
}
