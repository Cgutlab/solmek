@extends('app')

@section('content')


<body>



	@include('page.partials.header-secciones')
		
	<div class="container">
		<div class="row">
			<div class="col s12  m12 l6 " >
				<div class="slider">
				    <ul class="slides">
			            <li>
							<img src="{{ asset('images/producciones/'.$producciones->file_image) }}" class="responsive-img">
            			</li>

            			@if($producciones->galerias->count() > 0)
				            @foreach($producciones->galerias as $s)
				            <li>
                				<img src="{{ asset('images/galeria_produccion/'.$s->file_image) }}" alt="">
                			</li>
							@endforeach
						@endif
				    </ul>
				</div>	
			</div>
			<div class="col s12  m12 l6" id="descripcion-produccion">
				<span>{!! $producciones->descripcion !!}</span>
			</div>
		</div>

		@if($producciones->videos->count() > 0)
			<div class="row" style="background: #F3F3F3; min-height: 330px">
				<div class="col s12">
					<div class="col s12 center" style="margin-bottom: 2%">
						<p style="color: #F14715; font-size: 26px;">Conocé nuestro trabajo</p>
						<span style="color: #595959; font-size: 17px">Mirá los videos a continuación</span>
					</div>
					@if($videos->count() > 0)
						@foreach($producciones->videos as $v)
							@if($v->estado == 1)
								<div class="col s12 m4">
									<div class="video-container responsive-video">
							        	<iframe width="853" height="480" src="{{$v->video}}" frameborder="0" allowfullscreen></iframe>
							     	</div>
							     	<div class="row">
							     		<p style="color: #F14715; font-size: 20px; padding-left: 5%">{{ $v->titulo }}</p>
							     		<span  style="color: #595959; font-size: 14px; padding: 5%">{!! $v->descripcion !!}</span>
							     	</div>
								</div>
							@endif
						@endforeach
					@endif
				</div>
			</div>
		@endif
	</div>

	@endsection

	@include('layouts.script')
	<script>

		$(document).ready(function(){  
			$('.slider').slider({
				height: 400,
			});
		});


	</script>
</body>
</html>


