<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Slider;

class SeccionEmpresaController extends Controller
{
    public function index()
    {
		$sliders = Slider::where('seccion', 'empresa')->orderBy('orden', 'asc')->get();
		$empresa = Empresa::first();
    	return view('page.empresas.index', compact('empresa','sliders'));
    }
}
