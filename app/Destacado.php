<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destacado extends Model
{
    //

    public function novedad()
    {
        return $this->belongsTo('App\Novedad');
    } 
}
