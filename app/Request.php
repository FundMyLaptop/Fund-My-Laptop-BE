<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
	protected $table = 'requests';

	protected $fillable = ['user_id','title','description','photoURL','currency','amount','location','occupation','isFunded','isSuspended','isActive'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function favorite() {
        return $this->belongsTo('App\Favorite');
    }

    public function accrual() {
        return $this->belongsTo('App\Accrual');
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

    public function getIsActiveAttribute($attribute){
        return[
            0 => 'Inactive',
            1 => 'Active'
        ][$attribute];
    }

    public function scopeIsNotFunded($query){
        return $query->where('isFunded', 0);
    }
}
