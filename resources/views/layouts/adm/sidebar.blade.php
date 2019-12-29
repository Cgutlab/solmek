
	<ul id="slide-out" class="sidenav sidenav-fixed">
		<div class="logo-admin">
			<img src='{{ asset("images/logos/".$logos->file_image) }}' alt="">
		</div>

		<div class="divider"></div>

			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/home/*'))?"seccion-activa":"" }}" tabindex="0"  ><i class="material-icons">home</i>Home</a>
						<div class="collapsible-body" {{ (\Request::is('adm/home/*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('HomeController@indexInformacion') }}"><i class="material-icons">navigate_next</i>Información de Empresa</a></li>
								<li><a href="{{ action('HomeController@createSlider') }}"><i class="material-icons">navigate_next</i>Crear Sliders</a></li>
								<li><a href="{{ action('HomeController@indexSlider') }}"><i class="material-icons">navigate_next</i>Ver Sliders</a></li>
								<li><a href="{{ action('DestacadoController@index') }}"><i class="material-icons">navigate_next</i>Ver Destacados</a></li>
							</ul>							
						</div>
					</li>
				</ul>
			 	<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/productos*'))?"seccion-activa":"" }}" tabindex="0" ><i class="material-icons">shopping_cart</i>Productos</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/productos*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('ProductoController@create') }}" ><i class="material-icons">navigate_next</i>Crear Producto</a></li>
								<li><a href="{{ action('ProductoController@index') }}" ><i class="material-icons">navigate_next</i>Ver productos</a></li>
								<li><a href="{{ action('SubfamiliaController@create') }}" ><i class="material-icons">navigate_next</i>Crear Subfamilia</a></li>
								<li><a href="{{ action('SubfamiliaController@index') }}" ><i class="material-icons">navigate_next</i>Ver Subfamilias</a></li>
								<li><a href="{{ action('FamiliaController@create') }}" ><i class="material-icons">navigate_next</i>Crear Familia</a></li>
								<li><a href="{{ action('FamiliaController@index') }}" ><i class="material-icons">navigate_next</i>Ver Familias</a></li>
							</ul>
						</div>
					</li>
				</ul>
			 	<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/novedades*'))?"seccion-activa":"" }}" tabindex="0" ><i class="material-icons">new_releases</i>Novedades</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/novedades*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('NovedadController@create') }}"><i class="material-icons">navigate_next</i>Crear Novedad</a></li>
								<li><a href="{{ action('NovedadController@index') }}" ><i class="material-icons">navigate_next</i>Ver Novedades</a></li>
								<li><a href="{{ action('CategoriaController@create') }}" ><i class="material-icons">navigate_next</i>Crear Categoría</a></li>
								<li><a href="{{ action('CategoriaController@index') }}" ><i class="material-icons">navigate_next</i>Ver Categorías</a></li>
							</ul>
						</div>
					</li>
				</ul>
			 	<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/produccion*'))?"seccion-activa":"" }}" tabindex="0" ><i class="material-icons">business_center</i>I+D</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/produccion*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('ProduccionController@index') }}" ><i class="material-icons">navigate_next</i>Ver Información</a></li>
							</ul>
						</div>
					</li>
				</ul>
			 	<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/calidad*'))?"seccion-activa":"" }}" tabindex="0" ><i class="material-icons">star</i>Calidad</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/calidad*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('CalidadController@index') }}" ><i class="material-icons">navigate_next</i>Ver Información</a></li>
								<li><a href="{{ action('DescargaController@create') }}" ><i class="material-icons">navigate_next</i>Crear Descarga</a></li>
								<li><a href="{{ action('DescargaController@index') }}"><i class="material-icons">navigate_next</i>Ver Descargas</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/empresa*'))?"seccion-activa":"" }}" tabindex="0"  ><i class="material-icons">business</i>Quiénes Somos</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/empresa*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('EmpresaController@index') }}"><i class="material-icons">navigate_next</i>Datos de la Empresa</a></li>
								<li><a href="{{ action('EmpresaController@createSlider') }}"><i class="material-icons">navigate_next</i>Crear Sliders</a></li>
								<li><a href="{{ action('EmpresaController@indexSlider') }}"><i class="material-icons">navigate_next</i>Ver Sliders</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/datos*'))?"seccion-activa":"" }}" tabindex="0"  ><i class="material-icons">phone</i>Contacto</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/datos*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('DatoController@contacto') }}"><i class="material-icons">navigate_next</i>Datos de Contacto</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/logos*'))?"seccion-activa":"" }}" tabindex="0"  ><i class="fab fa-delicious"></i>Logos</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/logos*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('LogoController@index') }}"><i class="material-icons">navigate_next</i>Ver Logos</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/metadatos*'))?"seccion-activa":"" }}" tabindex="0"  ><i class="material-icons">data_usage</i>Metadatos</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/metadatos*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('MetadatoController@index') }}"><i class="material-icons">navigate_next</i>Editar</a></li>
							</ul>
						</div>
					</li>
				</ul>
				@if(Auth::user()->tipo_usuario == 'admin')
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/usuarios/*'))?"seccion-activa":"" }}" tabindex="0"  ><i class="material-icons">people</i>Usuarios</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/usuarios/*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('UserController@create') }}"><i class="material-icons">navigate_next</i>Crear Usuarios</a></li>
								<li><a href="{{ action('UserController@index') }}"><i class="material-icons">navigate_next</i>Editar Usuarios</a></li>
							</ul>
						</div>
					</li>
				</ul>
				@endif
			</li>
		</div>
	</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
