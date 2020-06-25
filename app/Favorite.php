<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function user() {
        return $this->belongsTo('App\Favorite');
    }

    public function request() {
        return $this->hasOne('App\Request');
    }
}
