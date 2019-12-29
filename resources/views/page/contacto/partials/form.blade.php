<div class="container" id="container-fluid">

	<div class="row">
		<div class="col s12">			
			@if ($errors->any())
			<div class="card-panel alert-error">
				<ul><li>ALERTA:
					@foreach ($errors->all() as $error)
					 {{ $error }}
					@endforeach
					</li>
				</ul>
			</div>
			@endif

			@if (session('alert'))
			<div class="card-panel alert-success">
				<ul><li>ALERTA:
						{{ session('alert') }}				
					</li>
				</ul>
			</div>
			@endif
		</div>
		<div class="col s12 m3">
			<ul class="contacto-info" >
				<li class="contacto-text">
					<div class="row">
						<div class="col s1 contacto-icon">
							<i class="fas fa-map-marker-alt"></i>
						</div>
						<div class="col s10">
							<a target="_blank" href="https://goo.gl/maps/E6dPmpTJSFm">{{ $informacion->direccion }}</a>
						</div>
					</div>
				</li>
				<li class="contacto-text" >
					<div class="row">
						<div class="col s1 contacto-icon">
							<i class="fas fa-phone"></i>
						</div>
						<div class="col s10">
							<a href="tel:{{ $informacion->telefono }}">{{ $informacion->telefono }}</a>
						</div>
					</div>
				</li>
				<li class="contacto-text" style="margin-bottom: 10px">
					<div class="row">
						<div class="col s1 contacto-icon">
							<i class="fas fa-envelope"></i>
						</div>
						<div class="col s10">
							<a href="mailto:{{ $informacion->email }}">{{ $informacion->email }}</a> 
						</div>
					</div>
				</li>
			</ul>
		</div>
		<form method="POST"  enctype="multipart/form-data" action="{{action('SeccionContactoController@store')}}" class="col s12 l9 ">
			{{ csrf_field() }}

			<div class="row">
				<div class="input-field col s12 m6 l6">
					<input id="icon_prefix" type="text" class="validate" name="nombre"  value="{{ old('nombre') }}">
					<label class="label-form-contact" for="icon_prefix">Nombre</label>
				</div>
				<div class="input-field col s12 m6 l6">
					<input id="icon_prefix" type="text" class="validate" name="apellido"  value="{{ old('apellido') }}">
					<label class="label-form-contact" for="icon_prefix">Apellido</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l6">
					<input id="email" type="email"  name="email" class="validate"  value="{{ old('email') }}">
					<label class="label-form-contact" for="email">Email</label>
				</div>
				<div class="input-field col s12 m6 l6">
					<input  id="empresa" type="text" name="empresa" class="validate"  value="{{ old('empresa') }}">
					<label class="label-form-contact" for="empresa">Empresa</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l6">
					<input id="mensaje" type="text" name="mensaje" class="validate"  @if($mensaje!='') value="{{$mensaje}}" @else value="{{ old('mensaje') }}" @endif>
					<label class="label-form-contact" for="mensaje">Mensaje</label>
				</div>
				<div class="input-field col s12 m6 l6">
					<div class="g-recaptcha" data-sitekey = "{{env('GOOGLE_RECAPTCHA_SITE_KEY')}}"></div>
				</div> 
			</div>
			<div class="center">
				<button class="btn button-enviar-mas z-depth-0 center" type="submit" style="background-color: #FFC107; width: 132px; color: #595959;" name="action">Enviar</button>
			</div>
		</form>
	</div>
</div>

