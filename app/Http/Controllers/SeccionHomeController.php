<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Destacado;
use App\Informacion;
use App\Producto;
use App\Metadato;

class SeccionHomeController extends Controller
{
	public function index()
	{
		$sliders     = Slider::where('seccion', 'home')->orderBy('orden', 'asc')->get();
		$novedades   = Destacado::orderBy('orden')->get();
		$informacion = Informacion::first();

		return view('page.home.index', compact('sliders', 'novedades', 'informacion'));
	}

    public function buscador(Request $request)
    {
		$busqueda  = $request->nombre;
		$resultado = Producto::where('nombre', 'like', '%'.$busqueda.'%')->get();
		$seccion   = 'Búsqueda';
		$metadato  = Metadato::where('seccion', 'productos')->first();

        return view('page.home.busqueda', ['resultado' => $resultado, 'seccion' => $seccion, 'metadato' => $metadato]);
    }
}
