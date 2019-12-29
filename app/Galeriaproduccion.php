<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeriaproduccion extends Model
{
    protected $fillable = [
    	'orden', 'file_image'
    ];

	public function produccion()
	{
		return $this->belongsTo('App\Produccion');
	}
}
