<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
<<<<<<< HEAD
    protected $table = 'transctions';

    protected $fillable = ['request_id','transaction_ref','amount','status','response_code'];

    public function request(){

    	return $this->belongsTo('App\Request');
=======
    protected $guarded = ['id'];

    public function request(){
        return $this->belongsTo('App\Request');
    }

    public function user(){
        return $this->belongsTo('App\User');
>>>>>>> 7007b3db7c5548e9a22383e27045ffcfe0ae8781
    }
}
