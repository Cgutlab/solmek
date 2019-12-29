@extends('app')

@section('content')


<body>



	@include('page.partials.header-secciones')
		
	<div class="container">
		<div class="row">
			<div class="col s12  m12 l6" id="descripcion-calidad">
				<span>{!! $calidad->descripcion !!}</span>
				@forelse($descargas as $d)
					<div class="descargas-calidad">
						<div class="col s10">
							<span class="d-mobile">{{ $d->nombre }}</span>
							<div>
								<a href="{{route('calidad-down', $d->file)}}" target="_blank" ><span class="d-mobile" style="color: #999999 !important">Descargar</span></a>
							</div>
						</div>
						<div class="col s2">
							<a href="{{route('calidad-down', $d->file)}}" target="_blank" style="color: #595959"><i class="material-icons">file_download</i></a>
						</div>
					</div>
				@empty
				@endforelse
			</div>
			<div class="col s12 m12 l6 " >
				<img src="{{ asset('images/calidad/'.$calidad->file_image) }}"   >
			</div>
		</div>
	</div>




	
	@endsection

	@include('layouts.script')
</body>
</html>


