<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calidad;
use App\Descarga;
use App\Metadato;

class SeccionCalidadController extends Controller
{
    public function index()
    {
		$calidad   = Calidad::first();
		$descargas = Descarga::orderBy('orden')->get();
		$seccion   = 'Calidad';
		$metadato  = Metadato::where('seccion', $seccion)->first();
    	return view('page.calidad.index', compact('calidad', 'descargas', 'seccion', 'metadato'));
    }
}
