<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PDFModel extends Model
{
  protected $fillable =[
      'from' , 'to' , 'message' , 'created_at'
  ];

}
