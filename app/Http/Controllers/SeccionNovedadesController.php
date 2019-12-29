<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novedad;
use App\Metadato;
use App\Categoria;

class SeccionNovedadesController extends Controller
{
	public function index()
	{	
		$novedades        = Novedad::orderBy('categoria_id')->orderBy('orden')->get();
		$seccion          = 'Novedades';
		$metadato         = Metadato::where('seccion', $seccion)->first();
		$categorias       = Categoria::orderBy('orden')->get();

	    return view('page.novedades.index', compact('novedades', 'seccion', 'metadato', 'categorias'));
	}

	public function filter($id)
	{
		$novedades        = Novedad::where('categoria_id', $id)->orderBy('categoria_id')->orderBy('orden')->get();
		$seccion          = 'Novedades';
		$metadato         = Metadato::where('seccion', $seccion)->first();
		$categorias       = Categoria::orderBy('orden')->get();
		$categoria_activa = Categoria::find($id);

	    return view('page.novedades.filter', compact('novedades', 'seccion', 'metadato', 'categorias', 'categoria_activa'));
	}

	public function ver($id)
	{
		$novedad    = Novedad::find($id);
		$seccion    = 'Novedades';
		$metadato   = Metadato::where('seccion', $seccion)->first();
		$categorias = Categoria::orderBy('orden')->get();

	    return view('page.novedades.show', compact('novedad', 'seccion', 'metadato', 'categorias', 'categoria_activa'));

	}
}
