<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    public function theater()
    {
        return $this->hasOne('App\theater','theaterId');
    }

}
