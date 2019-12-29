<footer class="page-footer" id="footer" style="position: relative;">
		<div class="row" style="margin:0;">
			<div class="col s12 m12 l3" style="padding: 5%">
				<a href="{{ route('home') }}" class="brand-logo">
					<img id="logo-footer" class="img-responsive" src="{{ asset("images/logos/".$logos->file_image) }}" alt="">
				</a>
			</div>
			<div class="col s12 m12 l9" style="padding-top: 3%">
				<div class="col s12 m12 l2 footer-title center">
					<div class="row">
						<a href=" {{ url('/')}} " >INICIO</a>
					</div>
					<div class="row">
						<a href=" {{ url('/productos')}} " >PRODUCTOS</a>
					</div>
				</div>
				<div class="col s12 m12 l2 footer-title center">
					<div class="row">
						<a href=" {{ url('/empresa')}} " >EMPRESA</a>
					</div>
					<div class="row">
						<a href=" {{ url('/novedades')}} " >NOVEDADES</a>
					</div>
				</div>
				<div class="col s12 m12 l2 footer-title center">
					<div class="row">
						<a href=" {{ url('/calidad')}} " >CALIDAD</a>
					</div>
					<div class="row">
						<a href=" {{ url('/contacto')}} " >CONTACTO</a>
					</div>
				</div>
				<div class="col s12 m12 l5 offset-l1 footer-title">
					<span id="nombre-footer">SOLMEK S.R.L</span>
					<ul style="margin-top: 2%; ">
						<li class="footer-text">
							<div class="row">
								<div class="col s1 footer-icon">
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<div class="col s10">
									<a target="_blank" href="https://goo.gl/maps/E6dPmpTJSFm">{{ $informacion->direccion }}</a>
								</div>
							</div>
						</li>
						<li class="footer-text" >
							<div class="row">
								<div class="col s1 footer-icon">
									<i class="fas fa-phone"></i>
								</div>
								<div class="col s10">
									<a href="tel:{{ $informacion->telefono }}">{{ $informacion->telefono }}</a>
								</div>
							</div>
						</li>
						<li class="footer-text" style="margin-bottom: 10px">
							<div class="row">
								<div class="col s1 footer-icon">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="col s10">
									<a href="mailto:{{ $informacion->email }}">{{ $informacion->email }}</a> 
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="divider" style="width: 90%; margin-top: 3%; margin-left: 6%; background: #7D7D7D; height: 2px;"></div>
		<div class="row" style="margin:0;">
			<div class="col s12" id="osole-span" >
				<span class="right ">BY OSOLE</span>
			</div>
		</div>
</footer>
