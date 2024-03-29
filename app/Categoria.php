<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
    	'nombre', 'orden'
    ];

    public function novedades()
    {
    	return $this->hasMany('App\Novedad');
    }
}