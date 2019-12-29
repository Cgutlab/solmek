<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dato;

class DatoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function contacto()
    {
        $datos = Dato::first();
        return view('adm.datos.contacto.index', compact('datos'));
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function editContacto($id)
    {
        $datos = Dato::find($id);
        return view('adm.datos.contacto.edit', compact('datos'));
    }


    public function update(Request $request, $id){
        $datos = Dato::find($id);
        $datos->fill($request->all());

        if($request->action=='contacto')
            $path = 'adm/datos/contacto';
        elseif($request->action=='redes')
            $path = 'adm/datos/redes';

        if($datos->save())
            return redirect($path)->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }
}
