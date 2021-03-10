<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user) {
        if ($user->User_Type == 'Admin') {
            $user->updated_at = Carbon::now()->toDateTimeString();
            $user->save();
            return redirect('/Administrator/AdminHome');
        } else if ($user->User_Type == 'Student') {
            $user->updated_at = Carbon::now()->toDateTimeString();
            $user->save();
            return redirect('/Student/StuHome');
        }
        else if ($user->User_Type == 'Department') {
            $user->updated_at = Carbon::now()->toDateTimeString();
            $user->save();
            return redirect('/Department/DeptHome');
        }
        else if ($user->User_Type == 'Advisor') {
            $user->updated_at = Carbon::now()->toDateTimeString();
            $user->save();
                return redirect('/Advisor/AdvHome');
        } else {
            return redirect('/welcome');
        }
    }
}
