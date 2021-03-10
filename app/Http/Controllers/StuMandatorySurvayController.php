<?php

namespace App\Http\Controllers;

use App\User;
use App\User_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StuMandatorySurvayController extends Controller
{
    public function index()
    {
        return view('Student/StuMandatorySurvay');
    }
    public function ReportStore(Request $request)
    {
        $this->validate($request, [
            'phone_number' => 'required',
            'STemail' => 'required',
            'SocialStatus' => 'required',
            'familyProblem' => 'required',
            'healthProblem' => 'required',
            'problemInUniv' => 'required',
            //'Receiver_id' => 'required|string',
            'file' => 'mimes:pdf,png,jpg,docx,'
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
        $Students = new User;
        $user_info = new user_info;
        $user_info->Student_id = Auth::id();
        $user_info->name =Auth::user()->name;
        $user_info->phone_number = $request->input('phone_number');
        $user_info->STemail = $request->input('STemail');
        $user_info->SocialStatus = $request->input('SocialStatus');
        if ($request->file!==null){
            $upload=$request->file('file');
            $path=$upload->store('public/storage');
            $user_info->Survey_File = $upload->getClientOriginalName();
            $user_info->File_path=$path;
        }


        $user_info->healthProblem = $request->input('healthProblem');
        $user_info->problemInUniv = $request->input('problemInUniv');
        $user_info->familyProblem = $request->input('familyProblem');
        $user_info->family_info = $request->input('family_info');
        $user_info->health_info = $request->input('health_info');
        $user_info->U_problem = $request->input('U_problem');
        $Students= DB::select("update Students set Info_Status =1 where id =".Auth::id()." ");
        $user_info->save();

        return redirect('Student/StuHome')->with('success','Form Created');

    }




}
