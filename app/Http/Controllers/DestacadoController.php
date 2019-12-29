<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destacado;
use App\Novedad;
use App\Categoria;


class DestacadoController extends Controller
{
    public function index()
    {
    	$novedades = Destacado::orderBy('orden')->get();
    	return view('adm.home.destacados.index', compact('novedades'));
    }

    public function edit($id)
    {
		$novedad    = Destacado::find($id);
		$novedades  = Novedad::orderBy('orden')->get();
		$destacados = Destacado::all();


    	return view('adm.home.destacados.edit', compact('novedades', 'novedad', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $destacado             = Destacado::find($id);
        $destacado->novedad_id = $request->novedad_id;
        $destacado->orden      = $request->orden;

    	if($destacado->save())
            return redirect('adm/home/destacados')->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }
}
