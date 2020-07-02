<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
	protected $table = 'favorites';
	
	protected $fillable = ['user_id','request_id'];

    public function user() {
        return $this->belongsTo('App\Favorite');
    }

    public function request() {
        return $this->belongsTo('App\Request');
    }
}
