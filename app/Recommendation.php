<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
	
	protected $table = 'recommendations';
	
	protected $fillable = ['user_id','statement'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
