<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produccion;
use App\Metadato;
use App\Video;


class SeccionProduccionController extends Controller
{
    public function show($id)
    {
		$categoria    = ($id=='1')?'ingenieria':'matriceria';
		$producciones = Produccion::with('videos')->where('categoria', $categoria)->first();
		$metadato     = Metadato::where('seccion', 'I+D')->first();
		$seccion      = ($id=='1')?'Ingeniería':'Matricería';

		$videos = Video::where('estado', '1')->where('produccion_id', $producciones->id)->get();

    	return view('page.producciones.show', compact('producciones', 'seccion', 'metadato', 'categoria', 'videos'));
    }
}
