<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crush extends Model
{
    //

    public function qualities()
    {
        return $this->hasMany('App\Quality', 'crush_id');
    }
}
