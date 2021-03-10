<?php

namespace App\Http\Controllers\Auth;
use App\Advisor;
use App\Student;
use App\Department;
use App\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'User_Type' => ['required', 'string', 'max:255'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     * @return \App\Student
     * @return \App\Advisor
     * @return \App\Admin
     * @return \App\Department
     */
    protected function create(array $data)
    {
         $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'User_Type' => $data['User_Type'],


         ]);
        if ($user->User_Type == 'Admin') {
            Admin::create([
                'Name' => $data['name'],
                'Email' => $data['email'],
                'Id' =>$user->id,
            ]);
        }
        else if ($user->User_Type == 'Student') {
            Student::create([
                'Name' => $data['name'],
                'Email' => $data['email'],
                'Id' =>$user->id,
            ]);
        }
        else if ($user->User_Type == 'Department') {
            Department::create([
                'Name' => $data['name'],
                'Email' => $data['email'],
                'Id' =>$user->id,
            ]);
        }
        else if ($user->User_Type == 'Advisor') {
            Advisor::create([
                'Name' => $data['name'],
                'Email' => $data['email'],
                'Id' =>$user->id,
            ]);
        }
        else {
            return 0;
        }
        return $user;
    }


}
