<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class User_info extends Model
{
    use Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'Student_id', 'phone_number', 'SocialStatus', 'Survey_File' , 'healthProblem' , 'ProblemInUniv' , 'familyProblem' , 'family_info' , 'health_info' , 'U_problem'
    ];
    protected $primaryKey='Student_id';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



}

