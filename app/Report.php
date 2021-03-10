<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'Report_Id','name','related_to','File_path','Receiver_id','Sender_id', 'Report_body','Report_File', 'Report_Title', 'Report_Type','created_at','upadte_at'
    ];
    protected $primaryKey='Report_Id';
}
