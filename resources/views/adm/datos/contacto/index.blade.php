@include('adm.datos.contacto.partials.header')
					<a class="breadcrumb">Editar</a>
				</div>

				<h5>Información de Contacto</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<tbody>
						@if($datos)
							<tr>
								<td><b>Dirección</b></td>
								<td>{{ $datos->direccion }}</td>
							</tr>
							<tr>
								<td><b>Email</b></td>
								<td>{{ $datos->email }}</td>
							</tr>
							<tr>
								<td><b>Nª de Teléfono</b></td>
								<td>{{ $datos->telefono }}</td>
							</tr>
							<tr>
								<td colspan="2">
									<a href=" {{ action('DatoController@editContacto', $datos->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
								</td>
							</tr>
						@else
							<tr>
								<td colspan="2">No existen registros</td>
							</tr>
						@endif
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