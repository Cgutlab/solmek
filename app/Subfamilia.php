<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subfamilia extends Model
{
    protected $fillable = [
    	'nombre', 'orden', 'file_image'
    ];

    public function familia()
    {
    	return $this->belongsTo('App\Familia');
    } 

    public function productos()
    {
    	return $this->hasMany('App\Producto');
    } 
}
