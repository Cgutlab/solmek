<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{
    protected $fillable = [
    	'titulo', 'descripcion', 'file_image' 
    ];
}
