<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    protected $fillable = ['reply_id','name','reply',];
    protected $dates = ['created_at','updated_at'];
}
