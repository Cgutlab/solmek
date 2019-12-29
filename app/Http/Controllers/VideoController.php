<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produccion;
use App\Video;

class VideoController extends Controller
{
    public function show($id)
    {
        $produccion = Produccion::find($id);
        $videos     = Video::where('produccion_id', $id)->orderBy('orden')->get();

    	return view('adm.producciones.videos.show', compact('produccion', 'videos'));
    }

    public function edit($id)
    {
		$video      = Video::find($id);    	
		$produccion = Produccion::find($video->produccion_id);


    	return view('adm.producciones.videos.edit', compact('produccion', 'video'));
    }

    public function update(Request $request, $id)
    {
        $video_produccion =  Video::find($id);
        
        $datos            = $request->all();
        
        $v     = $request->video;
        $video = str_replace("watch?v=", "embed/", $v);
        $video_produccion->fill($datos);
        
        $video_produccion->estado  = ($request->estado!=null)?1:0;

        $video_produccion->video = $video;

        if($video_produccion->save())
            return redirect()->back()->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }
}
