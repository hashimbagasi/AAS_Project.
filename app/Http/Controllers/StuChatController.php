<?php

namespace App\Http\Controllers;

use App\Mail\chatmail;
use App\Message;
use Illuminate\Http\Request;
use App\User;
use App\Advisor;
use App\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Pusher\Pusher;

class StuChatController extends Controller
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
        //$users = DB::select("select users.id, users.name, users.avatar, users.email, count(is_read) as unread
        //from users LEFT  JOIN  messages ON users.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
        //where users.id != " . Auth::id() . "
        //group by users.id, users.name, users.avatar, users.email");
        $users = DB::select("select Advisors.Id,Advisors.avatar,Advisors.name, Advisors.email ,Students.id,Students.Advisor_Id,count(is_read) as unread
        from Students , advisors LEFT  JOIN  messages ON Advisors.Id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
        where Students.id =" . Auth::id() . " AND Advisors.Id = Students.Advisor_Id
        group by Advisors.Id,Advisors.avatar,Advisors.Name, Advisors.Email , Students.Advisor_Id , Students.id");

        $Advisors = DB::select("select Advisors.Name,Advisors.Id , Students.Advisor_Id from  Students , Advisors where Students.id =" . Auth::id() . " AND Advisors.Id = Students.Advisor_Id
            group by Advisors.Name,Advisors.Id , Students.Advisor_Id");

        $Students = DB::select("select id ,Advisor_Id,name, email,Department,College ,Recorded_Hours,Level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA
        from Students where " . Auth::id() . "= Students.id
        group by id ,Advisor_Id,name, email,department,College ,Recorded_Hours,level ,Study_Type,General_Status ,Current_Semester , Academic_Status ,Academic_Degree,GPA");

        return view('Student/StuChatAdvisor', ['users' => $users])
            ->with('Students', $Students)
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
