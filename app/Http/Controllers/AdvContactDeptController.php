<?php

namespace App\Http\Controllers;

use App\Mail\chatmail;
use App\Message;
use App\User;
use App\Advisor;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Pusher\Pusher;
use Illuminate\Support\Facades\Auth;

class AdvContactDeptController extends Controller
{
    /**
     * Create a new controller instance.
     *
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
        $users = DB::select("select Departments.id,Advisors.Id, Departments.avatar, Departments.name, Advisors.Department_Id,Departments.email,count(is_read) as unread
        from Advisors , Departments LEFT  JOIN  messages ON Departments.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
        where Advisors.id =" . Auth::id() . " AND Departments.id = Advisors.Department_Id
        group by Departments.id,Advisors.Id,Departments.name,Departments.avatar, Departments.email , Advisors.Department_Id");

        $Advisors = DB::select("select name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree  from Advisors where Advisors.Id =" . Auth::id() . "
            group by name,id ,Department , college , Actual_Hours , Official_Hours , Current_Semester , Academic_Degree");

        $Students = DB::select("select Students.name,Students.id ,Students.Academic_Degree, Students.Academic_Status,Students.GPA,Students.Previous_Hours,Students.Left_Hours,Students.Recorded_Hours,Students.Advisor_Id from Students where Students.Advisor_Id =" . Auth::id() . "
            group by Students.Name, Students.id, Students.Academic_Status, Students.Academic_Degree,Students.GPA, Students.Previous_Hours, Students.Left_Hours, Students.Recorded_Hours, Students.Advisor_Id");

        return view('Advisor/AdvContactDept')
        ->with('users', $users)
        ->with('Advisors', $Advisors)
        ->with('Students', $Students);
    }

    public function getRelatedToID(Request $request)
    {
        $related_to = "0";

        $related_to->related_to =$request->input('related_to');
    }

    public function getMessage($user_id)
    {

        $my_id = Auth::id();
        $related_to = new Message();

        $related_to->related_to=$related_to->input('related_to');

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
