
<nav id="header" class=" z-depth-0">
	<div class="nav-wrapper z-depth-0 hide-on-med-and-down" id="header-top">
		<div class="container">
	        <ul id="nav-mobile header-top" class="right hide-on-med-and-down  header-top-ul" style=" margin-right: -21%;height: 35px; display: flex; justify-content: center; align-items: center;">         
	            <li><i class="material-icons">local_phone</i></li>
	            <li><a  style=" margin-left: -15px !important;" href="tel:{{ $informacion->telefono }}">{{ $informacion->telefono }}</a></li>
	            <li><span>|</span></li>
	            <li><i class="material-icons" >search</i></li>
	            <li>
		            <form method="GET" action="{{ action('SeccionHomeController@buscador') }}" >
		            	@csrf
		                <div class="row no-margin  hide-on-med-and-down">
		                    <div class="input-field col l10" >
		                        <input autocomplete="off" id="buscador" name="nombre" placeholder="Buscar Producto..."  style="margin-left: -15px; background-color: white" type="text"/>
		                    </div>
		                </div>
		            </form>
		       	</li>
	        </ul>
		</div>
	</div>
	<div class="nav-content">
		<a href="{{ route('home') }}" class="brand-logo">
			<img id="logo" src="{{ asset("images/logos/".$logos->file_image) }}" alt="" class="responsive-img">
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons" style="color: #3E3F41">menu</i></a>
		</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down header-secciones" >
			<li><a href=" {{ route('home') }} " {{ (\Request::is('/'))?"id=seccion-active":"" }}>INICIO</a></li>
			<li><a href=" {{ url('/empresa')}} " {{ (\Request::is('empresa*'))?"id=seccion-active":"" }}>EMPRESA</a></li>
			<li><a href=" {{ url('/productos')}} " {{ (\Request::is('productos*'))?"id=seccion-active":"" }}>PRODUCTOS</a></li>
			<li><a href=" {{ url('/novedades')}} " {{ (\Request::is('novedades*'))?"id=seccion-active":"" }}>NOVEDADES</a></li>
			<li>  
				<a class='dropdown-trigger' id="dropdown-navbar" href='#' data-target='dropdown1' >I+D</a>

				<ul id='dropdown1' class='dropdown-content' style="top: 5% !important">
					<li><a href="{{ action('SeccionProduccionController@show', '1') }}">INGENIERÍA</a></li>
					<li><a href="{{ action('SeccionProduccionController@show', '2') }}">MATRICERÍA</a></li>
				</ul>
			</li>     
			<li><a href=" {{ url('/calidad')}} " {{ (\Request::is('calidad*'))?"id=seccion-active":"" }}>CALIDAD</a></li>      
			<li><a href=" {{ url('/contacto')}} " {{ (\Request::is('contacto*'))?"id=seccion-active":"" }}>CONTACTO</a></li>      
		</ul>
	</div>
</nav>


<ul class="sidenav" id="mobile-demo">
	<li><a href=" {{ route('home') }} " {{ (\Request::is('/'))?"id=seccion-active":"" }}>INICIO</a></li>
	<li><a href=" {{ url('/empresa')}} " {{ (\Request::is('empresa*'))?"id=seccion-active":"" }}>EMPRESA</a></li>
	<li><a href=" {{ url('/productos')}} " {{ (\Request::is('venta*'))?"id=seccion-active":"" }}>PRODUCTOS</a></li>
	<li><a href=" {{ url('/novedades')}} " {{ (\Request::is('novedades*'))?"id=seccion-active":"" }}>NOVEDADES</a></li>
	<ul class="collapsible">
		<li>
			<div class="collapsible-header" style="font-size: 14px; color: #595959; font-family: 'Titillium Light'; margin-left: 5%">I+D</div>
				<div class="collapsible-body" style="padding-left: 5%"><a href="{{ action('SeccionProduccionController@show', '1') }}">INGENIERÍA</a></div>
				<div class="collapsible-body" style="padding-left: 5%"><a href="{{ action('SeccionProduccionController@show', '2') }}">MATRICERÍA</a></div>
		</li>
	</ul>

	<li><a href=" {{ url('/calidad')}} " {{ (\Request::is('calidad*'))?"id=seccion-active":"" }}>CALIDAD</a></li>      
	<li><a href=" {{ url('/contacto')}} " {{ (\Request::is('contacto*'))?"id=seccion-active":"" }}>CONTACTO</a></li>     
</ul>

