@include('adm.calidad.informacion.partials.header')

				</div>

				<h5>Información CALIDAD</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<tbody>
						@if($calidad)
							<tr>
								<td><b>Descripción</b></td>
								<td>{!! $calidad->descripcion !!}</td>
							</tr>
							<tr>
								<td><b>Imagen</b></td>
								<td><img src="{{ asset('images/calidad/'.$calidad->file_image) }}"></td>
							</tr>
							<tr>
								<td colspan="2">
									<a href=" {{ action('CalidadController@edit', $calidad->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
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