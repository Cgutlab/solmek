@include('adm.productos.galeria.partials.header')
				</div>
				<div class="col s12">
					<div class="row">
						
						<h5>Galeria de Imágenes | Producto: {!! $producto->nombre !!}</h5>	

						<div class="right">
							<a href=" {{ action('ProductoController@galeriaCreate', $producto->id)}} " class="btn waves-effect waves-light orange"><i style="font-size: 15px" class="fas fa-plus-circle"></i>AGREGAR</a>
						</div>
					</div>

					<div class="divider"></div>

					<div class="col s12" style="margin-top: 5%">
						<table class="index-table responsive-table ">
							<thead>
								<tr>
									<th>Imagen</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								@forelse($producto->galerias as $g)

									<tr>
										<td style="width: 350px"><img src=" {{ asset('images/galeria_productos/'.$g->file_image)}} " alt=""></td>
										<td>								
											<a href=" {{ action('ProductoController@galeriaEdit', $g->id)}} " class="btn-floating btn waves-effect waves-light orange"><i style="font-size: 15px" class="fas fa-pencil-alt"></i></a>
											<a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href="{{ action('ProductoController@galeriaDelete', $g->id)}}" class="btn-floating btn waves-effect waves-light teal"><i class="material-icons">delete</i></a>
										</td>
									</tr>

								@empty

									<tr>
										<td colspan="3">No se consiguieron registros</td>
									</tr>
										
								@endforelse
							</tbody>
						</table>
					</div>
					<div class="row">					
						<div class="right" style="padding: 2%">
							<a href="{{ action('ProductoController@index')}}" class="waves-effect waves-light btn">Volver</a>
						</div>
					</div>
				</div>
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