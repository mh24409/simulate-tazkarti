<?php

namespace App;
use DB ;
use Illuminate\Database\Eloquent\Model;

class match extends Model
{
    public function staduim()
    {
        return $this->hasOne('App\staduim');
    }
    public function ticket()
    {
        return $this->hasMany('App\ticket');
    }
}
