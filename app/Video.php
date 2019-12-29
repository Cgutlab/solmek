<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
    	'orden', 'video', 'titulo', 'descripcion', 'estado'
    ];


	public function produccion()
	{
		return $this->belongsTo('App\Produccion');
	}
}
