<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informacion;
use App\Slider;
use App\Destacado;
use App\Metadato;
use App\Extensions\Helpers;
use Redirect;

class HomeController extends Controller
{


    public function index()
    {
        return view('/adm/home');
    }

    public function indexInformacion(){
        $informacion = Informacion::first();
        return view('adm.home.informacion.index', compact('informacion'));
    }

    public function editInformacion($id){
        $informacion = Informacion::find($id);
        return view('adm.home.informacion.edit', compact('informacion'));
    }

    public function updateInformacion(Request $request, $id){
        $informacion = Informacion::find($id);
        $datos       = $request->all();
        
        $file_save   = Helpers::saveImage($request->file('file_image'), 'home');
        $file_save ? $datos['file_image'] = $file_save : false;
        
        $informacion->fill($datos);

        if($informacion->save())
            return redirect('adm/home/informacion/ver')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    public function indexSlider()
    {
        $sliders = Slider::where('seccion', 'home')->orderBy('orden', 'asc')->get();
        return view('adm.home.sliders.index', compact('sliders'));
    }

    public function createSlider()
    {
        $secciones = ['home' => 'Home', 'empresa' => 'Quienes Somos'];
        $metadatos = Metadato::all();
        return view('adm.home.sliders.create', compact('sliders', 'metadatos'));
    }

    public function storeSlider(Request $request)
    {
        $datos     = $request->all();
        
        $file_save = Helpers::saveImage($request->file('file_image'), 'sliders');
        $file_save ? $datos['file_image'] = $file_save : false;

        $slider = new Slider;

        $datos['seccion'] = 'home';
        $slider->fill($datos);

        if($slider->save())
            return redirect('adm/home/sliders')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect('adm/home/sliders')->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    public function editSlider($id)
    {
        $secciones = ['home' => 'Home', 'empresa' => 'Quienes Somos', ];
        $slider    = Slider::find($id);
        $metadatos = Metadato::all();
        return view('adm.home.sliders.edit', compact('secciones', 'slider', 'metadatos'));
    }

    public function updateSlider(Request $request, $id)
    { 
        $slider    = Slider::find($id);
        $datos     = $request->all();
        $file_save = Helpers::saveImage($request->file('file_image'), 'sliders');
        $file_save ? $datos['file_image'] = $file_save : false;       

        $datos['seccion'] = 'home';
        
        $slider->fill($datos);

        if($slider->save())
            return  redirect('adm/home/sliders')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $slider = Slider::find($id);

        if($slider->delete())
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
    }
}
