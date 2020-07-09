<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repayment extends Model
{
    //
    protected $table = 'repayments';

    protected $fillable = ['request_id','amount','amount_paid','balance','num_repayments_left','last_payment_date'];

    public function request(){
    	return $this->belongsTo('App\Request');
    }
}
