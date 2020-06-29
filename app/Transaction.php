<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $guarded = ['id'];

    public function request(){
        return $this->belongsTo('App\Request');
    }
}
