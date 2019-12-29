@extends('app')

@section('content')


<body>

	@include('page.partials.slider')

	<div class="container">
		<div class="row">
			<div class="col s12 center" >
				<p id="titulo-novedades-home">Novedades</p>
				<div class="divider" id="divider-destacados-home"></div>
			</div>
		</div>

		<div class="row">
			@forelse($novedades as $n)
				<div class="col s12 m12 l4">
					<div class="card z-depth-0">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="{{ asset('images/novedades/'.$n->novedad->file_image) }}" style="height: 185px; width: 100%; overflow: hidden;">
						</div>
						<div class="card-content" style="background: #F14816; opacity: 0.9;">
							<span class="card-title activator" id="titulo-card-novedades-home">{{ $n->novedad->titulo }}</span>
						</div>
						<div class="card-reveal"  style="background: #F14816; opacity: 0.9; overflow: hidden">
							<span class="card-title" id="titulo-card-novedades-home-active">{{ $n->novedad->titulo }}<i class="material-icons right">close</i></span>
							<p>{!! substr($n->novedad->texto, 0, 50) !!} ...</p><a href="{{ route('ver', $n->novedad->id) }}">Ver más</a>
						</div>
					</div>

				</div>
			@empty
			@endforelse
		</div>
	</div>


	@if($informacion)
		<div class="row informacion-div" style="margin-bottom: 0px;position: relative; background-image:url({{url('images/home/'.$informacion->file_image) }}) ">
				<img src="{{ asset('images/home/capa_informacions.png') }} " style="position: absolute;">
			<div class="col s12" style="position: absolute;">
				<div class="col s12 m4 offset-m2 " >
					<div id="informacion-titulo-caption">{!! $informacion->titulo !!} </div>
				</div>
				<div class="col s12 m5" style="padding-top: 2%">
					<div id="informacion-descripcion-caption">{!! $informacion->descripcion !!}</div>
				</div>
			</div>
		</div>
	@endif


	
	@endsection

	@include('layouts.script')

	<script>
		$(document).ready(function(){  
			$('#slider-home').slider({
				height: 479,
			})
		});

	</script>
</body>
</html>


