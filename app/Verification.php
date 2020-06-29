<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    protected $table = 'verifications';

	protected $fillable = ['user_id','photoURL','videoURL','status'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
