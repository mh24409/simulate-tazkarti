<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    public function user()
    {
        return $this->hasOne('App\User');
    }
    public function match()
    {
        return $this->belongsTo('App\match');
    }
}
