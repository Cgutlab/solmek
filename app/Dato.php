<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    protected $fillable = [
    	'direccion', 'telefono', 'email'  , 'horario'  
    ];
}
