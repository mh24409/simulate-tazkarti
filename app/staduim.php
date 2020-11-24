<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class staduim extends Model
{
    public function match()
    {
        return $this->belongsTo('App\match');
    }
}
