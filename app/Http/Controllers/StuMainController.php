<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StuMainController extends Controller
{
    function index(){
        return view('login');
    }
}
