<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = 'transactions';

    protected $fillable = ['request_id','transaction_ref','amount','status','response_code'];

    protected $guarded = ['id'];

    public function request(){
        return $this->belongsTo('App\Request');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}