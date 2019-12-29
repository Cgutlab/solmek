<?php

namespace App\Http\Controllers;use Illuminate\Http\Request;

use App\Produccion;
use App\Galeriaproduccion;
use App\Extensions\Helpers;
use Illuminate\Support\Facades\Input;

class GaleriaproduccionController extends Controller
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

	public function index($id)
    {
        $produccion = Produccion::where('id', $id)->with('galerias')->first();
        return view('adm.producciones.informacion.galeria.show', ['produccion' => $produccion]);
    }

	public function create($id)
    {
        $produccion = Produccion::find($id);
        return view('adm.producciones.informacion.galeria.create', ['produccion' => $produccion]);
    }

    public function store(Request $request)
    {
		$produccion_id = $request->produccion_id;
		$datos         = $request->all();
		$status        = 0;

        foreach($request->file('file_image') as $img){
            $file_save = Helpers::saveImage($img, 'galeria_produccion');
            $file_save ? $datos['file_image'] = $file_save : false;

			$galeria                = new Galeriaproduccion;
			$galeria->produccion_id = $produccion_id;
			$galeria->file_image    = $file_save;
			$galeria->orden         = $request->orden;

            if($galeria->save())
                $status = 1;
            else
                return redirect()->back()->with('errors', "Ocurrió un error al intentar almacenar el registro" );
        }
        
        if($status==1)
            return redirect()->back()->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar almacenar el registro" );
    }


    public function edit($id)
    {
        $galeria    = Galeriaproduccion::find($id);
        $produccion = Produccion::find($galeria->produccion_id);

        return view('adm.producciones.informacion.galeria.edit', compact('galeria', 'produccion'));
    }

    public function update(Request $request, $id)
    {
        $galeria   = Galeriaproduccion::find($id);
        
        $datos     = $request->all();
        $file_save = Helpers::saveImage($request->file('file_image'), 'galeria_produccion');
        $file_save ? $datos['file_image'] = $file_save : false;  

        $galeria->fill($datos);

        if($galeria->save())
            return  redirect()->back()->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    public function delete($id)
    {
		$galeria    = Galeriaproduccion::find($id);
		$produccion = Produccion::find($galeria->produccion->id);
		$path       = $galeria->file_image;

        \File::exists(public_path('images/galeria_produccion/'.$galeria->file_image));

        if($galeria->delete()){
            \File::delete(public_path('images/galeria_produccion/'.$path));
            $galeria = Galeriaproduccion::where('produccion_id', $produccion->id)->get();
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        }else{
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
        }
    }
}
