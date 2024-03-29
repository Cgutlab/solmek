<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SeccionContactoRequest;
use Mail;
use App\Producto;
use App\Dato;

class SeccionContactoController extends Controller
{
    public function index(){
        $mensaje        = '';
        $seccion        = 'Contacto';
        $mensaje_previo = '¡Contáctanos!';
        $informacion = Dato::first();
    	return view('page.contacto.index', compact('mensaje', 'seccion', 'mensaje_previo', 'informacion'));
    }

    public function store(SeccionContactoRequest $request)
    {
        $data = array(['nombre'   => $request->get('nombre'),
                                            'apellido' => $request->get('apellido'),
                                            'empresa'  => $request->get('empresa'),
                                            'email'    => $request->get('email'),
                                            'mensaje'  => $request->get('mensaje')]);
        Mail::send('page.contacto.email.contacto', $data[0], function($message){
                $dato = Dato::first();
	    		$message->subject('Te han enviado un mensaje desde Solmek');
	    		$message->to($dato->email);
	    	}
	    );

    	return redirect()->back()->with('alert', '¡Gracias por contactarnos!');
    }

    public function show($id)
    {
        $producto       =  Producto::find($id);
        $mensaje        = 'Me intera el producto '.$producto->nombre.'. Por favor contáctenme.';
        $seccion        = 'Contacto';
        $mensaje_previo = '¡Contáctanos!';
        return view('page.contacto.index', compact('mensaje', 'seccion', 'mensaje_previo'));
    }
}
