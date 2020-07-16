<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class socialAccount extends Model
{
    //

    protected $fillable = ['user_id','provide_name','provider','user_id'];
    protected $guarded = ['id'];
    public function User(){
        return $this->belongsTo('App\User');
    }
}
