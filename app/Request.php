<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function favorite() {
        return $this->belongsTo('App\Favorite');
    }

    public function accrual() {
        return $this->belongsTo('App\Accrual');
    }
}
