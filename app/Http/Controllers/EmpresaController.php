<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Slider;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Redirect;



class EmpresaController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = Empresa::first();
        return view('adm.empresa.informacion.index', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);
        return view('adm.empresa.informacion.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empresa   = Empresa::find($id);
        $datos     = $request->all();
        $file_save = Helpers::saveImage($request->file('file_image'), 'empresa');
        $file_save ? $datos['file_image'] = $file_save : false;       
        $empresa->fill($datos);

        if($empresa->save())
            return redirect('adm/empresa/index/')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    public function indexSlider()
    {
        $sliders = Slider::where('seccion', 'empresa')->orderBy('orden', 'asc')->get();
        return view('adm.empresa.sliders.index', compact('sliders'));
    }

    public function createSlider()
    {
        $secciones = ['home' => 'Home', 'empresa' => 'Quienes Somos'];
        return view('adm.empresa.sliders.create', compact('sliders', 'metadatos'));
    }

    public function storeSlider(Request $request)
    {
        $datos     = $request->all();
        
        $file_save = Helpers::saveImage($request->file('file_image'), 'sliders');
        $file_save ? $datos['file_image'] = $file_save : false;

        $slider = new Slider;

        $datos['seccion'] = 'empresa';
        $slider->fill($datos);

        if($slider->save())
            return redirect('adm/empresa/sliders')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect('adm/empresa/sliders')->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    public function editSlider($id)
    {
        $secciones = ['home' => 'Home', 'empresa' => 'Quienes Somos', ];
        $slider    = Slider::find($id);
        return view('adm.empresa.sliders.edit', compact('secciones', 'slider', 'metadatos'));
    }

    public function updateSlider(Request $request, $id)
    { 
        $slider    = Slider::find($id);
        $datos     = $request->all();
        $file_save = Helpers::saveImage($request->file('file_image'), 'sliders');
        $file_save ? $datos['file_image'] = $file_save : false;       

        $datos['seccion'] = 'empresa';
        
        $slider->fill($datos);

        if($slider->save())
            return  redirect('adm/empresa/sliders')->with('alert', "Registro actualizado exitósamente" );
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
