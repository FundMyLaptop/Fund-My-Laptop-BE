<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Transaction extends Model
{
    use Notifiable;
    
    protected $table = 'transactions';

    protected $fillable = ['request_id', 'user_id','transaction_ref','amount','status','response_code'];


    protected $guarded = ['id'];

    public function request(){
        return $this->belongsTo('App\Request');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}