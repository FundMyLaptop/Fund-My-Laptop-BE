<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class socialAccount extends Model
{
    //

    protected $fillable = ['provide_id','provider','user_id'];

    public function User(){
        return $this->belongsTo('App\User');
    }
}
