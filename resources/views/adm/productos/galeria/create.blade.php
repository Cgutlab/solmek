@include('adm.productos.galeria.partials.header')

					<a class="breadcrumb">Crear</a>
				</div>
				<form method="POST"  enctype="multipart/form-data" action="{{action('ProductoController@galeriaStore')}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
					{{ csrf_field() }}

					<div class="row">
						<h5>Crear Galeria del producto {!! $producto->nombre !!}</h5>					
						<div class="divider"></div>
						<div class="file-field input-field">
						<h6>Cargue las imágenes que conformarán la galería del producto</h6>
							<div class="btn">
								<span>Imágenes</span>
								<input type="file" multiple name="file_image[]">
								<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 400x400 </span>
							</div>
							<label for=""></label>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="Cargue una o varias imágenes">
							</div>
						</div>
						<input type="hidden" name="producto_id" value="{{$producto->id}}">
						<div class="right">
							<a href="{{action('ProductoController@galeriaView', ['producto' => $producto->id ])}}" class="waves-effect waves-light btn">Cancelar</a>
							<button class="btn waves-effect waves-light" type="submit" name="action">Submit
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</main>



@include('layouts.script')

<script>

	$(document).ready(function(){		

		M.AutoInit();
		$('.collapsible').collapsible();
		$('select').formSelect();  
	});

</script>


</body>

</html>