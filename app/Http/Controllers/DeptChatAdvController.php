<?php

namespace App\Http\Controllers;

use App\Mail\chatmail;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Pusher\Pusher;

class DeptChatAdvController extends Controller
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
        $users = DB::select("select Advisors.id, Advisors.name, Advisors.avatar, Advisors.email, count(is_read) as unread
        from Advisors LEFT  JOIN  messages ON Advisors.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
        where Department_Id = " . Auth::id() . "
        group by Advisors.id, Advisors.name, Advisors.avatar, Advisors.email");



        $Departments = DB::select("select name,id ,Department , college , Actual_Load , Official_Load , NSemester , Academic_Degree  from Departments where Id =" . Auth::id() . "
            group by name,id ,Department ,college , Actual_Load , Official_Load , NSemester , Academic_Degree");

        $Advisors = DB::select("select Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at from Advisors where Advisors.Department_Id =" . Auth::id() . "
            group by Name,Id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree , Number_Of_Student , updated_at");

        $Students = DB::select("select advisors.id , advisors.department_id ,departments.id ,  Students.name,Students.id , Students.Advisor_Id from Students , advisors , departments where departments.id =" . Auth::id() . " AND advisors.Department_id = " . Auth::id() . " And
        advisors.id = students.Advisor_id
            group by advisors.id , advisors.department_id ,departments.id ,  Students.name,Students.id , Students.Advisor_Id");


        return view('Department/DeptChatAdv', ['users' => $users])
            ->with('Departments', $Departments)
            ->with('Students', $Students)
            ->with('Advisors', $Advisors);;

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
