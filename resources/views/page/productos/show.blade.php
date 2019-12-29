@extends('app')

@section('content')

@include('page.partials.header-secciones')

	<div  id="productos-row" style="padding-top: 2%">
		<div class="breadcrumb-productos">
			<a href="{{ action('SeccionProductoController@index') }}">Productos</a> | <a href="{{ action('SeccionProductoController@show', $familia->id) }}">{{$familia->nombre}}</a> 
		</div>

		<div class="row">
			
			@include('page.productos.partials.menu')

			<div class="col s12 m12 l9">
				@forelse($subfamilias_familia as $s)
					<div class="col s12 m12 l4">
						<div class="card z-depth-0" id="subfamilia">
							<div class="subfamilia-productos">
						        <div class="efecto  hide-on-med-and-down">
									<a href="{{ action('SeccionProductoController@showProductos', $s->id) }}"><img src="{{ asset('images/familias/hover-familias.png') }}" class="responsive-img" style="width: 100%; margin-left: 3%">	    </a>                
								</div>
								<a href="{{ action('SeccionProductoController@showProductos', $s->id) }}"><img src="{{ asset('images/subfamilias/'.$s->file_image) }}" style="width: 268px; height: 268px; "></a>
							</div>
							<div class="card-content" id="image-subfamilias-card-content" style="height: 50px;" >
								<span class="card-title center" id="image-subfamilias-card-content-title">{{ $s->nombre }}</span>
							</div>
						</div>
					</div>
				@empty

					@if($subfamilias_familia->count() == 0)
						@if($productos_sf_familia->count() > 0)
							@foreach($productos_sf_familia as $p)	
								<div class="col s12 m12 l4">
									<div class="card z-depth-0" id="subfamilia">
										<div class="subfamilia-productos">
									        <div class="efecto  hide-on-med-and-down">
												<a href="{{ action('SeccionProductoController@showProducto', $p->id) }}"><img src="{{ asset('images/familias/hover-familias.png') }}" class="responsive-img" style="width: 100%; margin-left: 3%">	    </a>                
											</div>
											<a href="{{ action('SeccionProductoController@showProducto', $p->id) }}"><img src="{{ asset('images/productos/'.$p->file_image) }}" style="width: 268px; height: 268px; "></a>
										</div>
										<div class="card-content" id="image-subfamilias-card-content" style="height: 50px;" >
											<span class="card-title center" id="image-subfamilias-card-content-title">{{ $p->nombre }}</span>
										</div>
									</div>
								</div>
							@endforeach
						@else
						<p>

							No conseguimos productos relacionados a esta categoría
						</p>
						@endif
					@endif
					
				@endforelse
			</div>
		</div>



	</div>

@include('layouts.script')
@endsection
</body>
</html>


