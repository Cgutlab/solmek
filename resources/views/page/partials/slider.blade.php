
<div class="slider hide-on-med-and-down" id="slider-home">
	<ul class="slides">
		@forelse($sliders as $s)
		<li>
			<img src="{{ asset('images/sliders/'.$s->file_image) }}" class="img-responsive" style="position: absolute;"> 
			<img src="{{ asset('images/sliders/capa.png') }}" style="position: absolute; mix-blend-mode: multiply;">        
			<div class="caption center-align" style="padding-top: 7%">
				<div id="titulo-caption">
					<p  id="titulo-caption">{!! $s->titulo !!}</p>
				</div>
				<div id="descripcion-caption">
					<p id="descripcion-caption">{!! $s->descripcion !!}</p>					
					
				</div>
			</div>
		</li>
		@empty
		@endforelse
	</ul>
</div>


 