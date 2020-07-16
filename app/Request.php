<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
	protected $table = 'requests';

	protected $fillable = ['user_id','title','description','photoURL','currency','amount','occupation', 'repaymentPeriod','isFunded','isSuspended','isActive', 'isFeatured'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function favorite() {
        return $this->belongsTo('App\Favorite');
    }

    public function accrual() {
        return $this->hasMany('App\Accrual');
    }

    public function transaction(){
        return $this->hasMany('App\Transaction');
    }

    public function repayment(){
        return $this->hasMany('App\Repayment');
    }

    public function getIsFundedAttribute($attribute){
        return[
            0 => 'Not Funded',
            1 => 'Funded'
        ][$attribute];
    }

    public function scopeIsNotFunded($query){
        return $query->where('isFunded', 0);
    }
}
