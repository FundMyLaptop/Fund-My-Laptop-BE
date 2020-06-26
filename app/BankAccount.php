<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
	protected $table = 'bank_accounts';
	
	protected $fillable = ['user_id','bank_name','account_name','account_number'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
