<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = 'transctions';

    protected $fillable = ['request_id','transaction_ref','amount','status','response_code'];

    public function request(){

    	return $this->belongsTo('App\Request');
    }
}
