<?php

namespace App\Http\Controllers;

use App\Metadato;
use Illuminate\Http\Request;
use App\Extensions\Helpers;

class MetadatoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index()
    {
        $metadatos = Metadato::all();
        return view('adm.metadatos.index',  compact('metadatos'));
    }

    function edit($id)
    {
        $metadato = Metadato::find($id);

        return view('adm.metadatos.edit', compact('metadato'));
    }

    public function update(Request $request,$id )
    {
        $datos    = $request->all();
        $metadato = Metadato::find($id);
        $file_save = Helpers::saveImage($request->file('file_image'), 'metadatos');
        $file_save ? $datos['file_image'] = $file_save : false;       
        $metadato->fill($datos);

        if($metadato->save())
            return redirect('adm/metadatos')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect('adm/metadatos')->with('errors', "Ocurrió un error al intentar actualizar el registro" );

    }
}
