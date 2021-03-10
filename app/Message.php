<?php

namespace app;


use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['from', 'to', 'message','related_to' , 'is_read'];
}
