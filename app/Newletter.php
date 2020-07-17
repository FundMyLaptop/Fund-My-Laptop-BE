<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newletter extends Model
{
    //
    public $table = 'newsletters';

    public $fillable = ['email'];
}
