<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accrual extends Model
{
    protected $table = 'accruals';
    
    
	
	protected $fillable = ['request_id','rate','amount'];

    public function request() {
        return $this->hasOne('App\Request');
    }
}
