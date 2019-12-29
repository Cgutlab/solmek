<div id="header-secciones-partials">
	@if($seccion)
		<div class="row header-div">
			<img src="{{ asset('images/metadatos/'.$metadato->file_image) }}"  style="mix-blend-mode: multiply; width: 100%" >
			<div >
				<h5 id="titulo-secciones" > {{ $seccion }}</h5>
			</div>
		</div>
	@endif
</div>
