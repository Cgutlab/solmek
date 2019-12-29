@include('adm.producciones.informacion.partials.header')

				</div>

				<h5>I+D</h5>					
				<div class="divider"></div>
				<table class="index-table-logos responsive-table ">
					<thead>
						<tr>
							<th>Imagen</th>
							<th>Descripción</th>
							<th>Categoría</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@forelse($producciones as $p)
							<tr>
								<td style="width: 200px"> <img src="{{ asset('images/producciones/'.$p->file_image) }}"> </td>
								<td style="width: 300px"> {!! substr($p->descripcion, 0, 150) !!} ... </td>
								<td> {{ ucwords($p->categoria) }} </td>
								<td>
									<a href=" {{ action('ProduccionController@edit', $p->id)}} " class="btn-floating btn-large waves-effect waves-light orange"><i class="fas fa-pencil-alt"></i></a>
									<a href=" {{ action('VideoController@show', $p->id)}} " class="btn-floating btn-large waves-effect waves-light red"><i class="fab fa-youtube"></i></a>
									<a href=" {{ action('GaleriaproduccionController@index', $p->id)}}" class="btn-floating btn-large waves-effect waves-light teal"><i title="Ver galeria de imágenes" class="material-icons">photo_library</i></a>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="4">No existen registros</td>
							</tr>
						@endforelse
					</tbody>
				</table>

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