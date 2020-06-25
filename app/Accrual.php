<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accrual extends Model
{
    public function request() {
        return $this->hasOne('App\Request');
    }
}
