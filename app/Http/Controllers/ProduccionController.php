<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produccion;
use App\Extensions\Helpers;

class ProduccionController extends Controller
{
    public function index()
    {
    	$producciones = Produccion::all();

    	return view('adm.producciones.informacion.index', compact('producciones'));
    }


    public function edit($id)
    {
    	$produccion = Produccion::find($id);
    	return view('adm.producciones.informacion.edit', compact('produccion'));
    }


    public function update(Request $request, $id)
    {
		$produccion = Produccion::find($id);
		$datos      = $request->all();
		$file_save  = Helpers::saveImage($request->file('file_image'), 'producciones');
        $file_save ? $datos['file_image'] = $file_save : false;       
        $produccion->fill($datos);

        if($produccion->save())
            return redirect('adm/producciones')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }
}
