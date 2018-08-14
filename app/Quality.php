<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quality extends Model
{
    //

    public $timestamps = false;

    public function crushes()
    {
        
        return $this->belongsTo('App\Crush', 'crush_id');
    }
}
