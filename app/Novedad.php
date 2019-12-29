<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    protected $fillable = [
        'titulo', 'texto', 'file_image', 'caracteristicas', 'galeria', 'orden'
    ];

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria');
    }   
    
    public function imagenes()
    {
        return $this->hasMany('App\Imagen');
    }

    public function destacado()
    {
        return $this->hasOne('App\Destacado');
    }
}   

