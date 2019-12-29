@extends('app')

@section('content')

@include('page.partials.header-secciones')

	<div id="productos-row" style="padding-top: 2%">
		<div class="breadcrumb-productos">
			<a href="{{ action('SeccionProductoController@index') }}">Productos</a> | <a href="{{ action('SeccionProductoController@show', $familia->id) }}">{{$familia->nombre}}</a> | <a href="{{ action('SeccionProductoController@showProductos', $subfamilia->id) }}">{{$subfamilia->nombre}}</a> | <a href="{{ action('SeccionProductoController@showProducto', $producto->id) }}">{{$producto->nombre}}</a> 
		</div>

		<div class="row">
			
			@include('page.productos.partials.menu')

			<div class="col s12 m12 l9">

					<div class="row">
						
						<div class="col s12 m12 l6" style="border: 1px solid #EFF2F7; border-radius: 5px"> 
							<div class="slider"">
							    <ul class="slides">
						            <li>
		                				<img src="{{ asset('images/productos/'.$producto->file_image) }}" alt="">
		                			</li>

		                			@if($producto->galerias->count() > 0)
							            @foreach($producto->galerias as $s)
							            <li>
			                				<img src="{{ asset('images/galeria_productos/'.$s->file_image) }}" alt="">
			                			</li>
										@endforeach
									@endif
							    </ul>
							</div>					
						</div>
						<div class="col s12 m12 l6">
							<p id="productos-show-nombre">{{ $producto->nombre }}</p>
							<span id="productos-show-subfamilia">{{ ($producto->subfamilia->id == '1')?'':$producto->subfamilia->nombre }}</span>
							<p id="productos-show-descripcionBreve">{{ $producto->descripcion_breve }}</p>
							<div class="divider" style="height: 2px; background: #F44700"></div>

							<p id="productos-show-descripcion">{!! $producto->descripcion !!}</p>

							<div class="row col s12" id="codigo-productos">
								<p> CÓDIGO:</p>
								<span>{{$producto->codigo}}</span>
							</div>

							<div class="row">
								<div class="col s12 left" >
									<a style="width: 154px" href="{{ action('SeccionContactoController@show', ['producto'=>$producto->id]) }}"  class="waves-effect waves-light btn z-depth-0" id="estandar-btn">CONSULTAR</a>
								</div>
							</div>
						</div>
					</div>
					
					@if($producto->especificaciones != null)

					<div class="divider"></div>
				
						<div class="row">
							<div class="col s12" style="padding: 5%">	
								<p id="titulo-caracteristicas-productos">ESPECDIFICACIONES TÉCNICAS</p>
								<div class="divider" style="height: 2px; background: #FFC107"></div>
								<div id="caracteristicas-productos">
									<p >{!! $producto->especificaciones !!}</p>
								</div>
							</div>
						</div>
					@endif

			</div>
		</div>



	</div>

@endsection
@include('layouts.script')
<script>

	$(document).ready(function(){  
		$('.materialboxed').materialbox();
		$( ".miniatura-img" ).click(function() {
			var src = $(this).data("srcimage");
			$("#bg-imagen").attr("src", src);
		});
		$('.slider').slider({
			height: 400,
		});
	});


</script>

</body>
</html>


