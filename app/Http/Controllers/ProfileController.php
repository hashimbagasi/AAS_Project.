<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function StuProfile (){

        $StuProfile = DB::select('select Name,Email,College,Department from Students where id ='.Auth::id());
        return view('/Student/StuProfile')
            ->with('StuProfile',$StuProfile);
    }

}
