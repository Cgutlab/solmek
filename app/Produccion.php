<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    protected $fillable = [
    	'file_image', 'descripcion', 'categoria'  
    ];
    
    public function videos()
    {
        return $this->hasMany('App\Video');
    } 
    
    public function galerias()
    {
        return $this->hasMany('App\Galeriaproduccion');
    }
}
