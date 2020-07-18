<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['comment_id','name','comment',];
    protected $dates = ['created_at','updated_at'];
}
