<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
    	'nombre', 'orden', 'file_image', 'descripcion', 'codigo', 'especificaciones', 'galeria'
    ];

    public function familia()
    {
    	return $this->belongsTo('App\Familia');
    }   

    public function subfamilia()
    {
    	return $this->belongsTo('App\Subfamilia');
    }   
    
    public function galerias()
    {
        return $this->hasMany('App\Galeria');
    }

}
