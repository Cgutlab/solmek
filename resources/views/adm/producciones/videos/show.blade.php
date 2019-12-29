@include('adm.producciones.videos.partials.header')
				</div>
				<div class="col s12">
					<div class="row">
						
						<h5>Videos |  {{ ucwords($produccion->categoria) }}</h5>	

					</div>

					<div class="divider"></div>

					<div class="col s12" style="margin-top: 5%">
						<table class="index-table responsive-table ">
							<thead>
								<tr>
									<th>Título</th>
									<th>Descripción</th>
									<th>Orden</th>
									<th>Estado</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								@forelse($videos as $v)

									<tr>
										<td >{{ $v->titulo }}</td>
										<td >{!! $v->descripcion !!}</td>
										<td >{{ $v->orden }}</td>
										<td >{{ ($v->estado == 1)?'Activo':'Inactivo' }}</td>
										<td>								
											<a href=" {{ action('VideoController@edit', $v->id)}} " class="btn-floating btn waves-effect waves-light orange"><i style="font-size: 15px" class="fas fa-pencil-alt"></i></a>
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
							<a href="{{ action('ProduccionController@index')}}" class="waves-effect waves-light btn">Volver</a>
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