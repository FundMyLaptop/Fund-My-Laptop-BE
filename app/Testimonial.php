<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';
	
	protected $fillable = ['user_id','testimonial'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
