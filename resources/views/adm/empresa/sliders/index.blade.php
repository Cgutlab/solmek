@include('adm.empresa.sliders.partials.header')


				</div>
				<h5>Sliders Empresa</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<thead>
						<tr>
							<th>Imagen</th>
							<th>Título</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@forelse($sliders as $s)

							<tr>
								<td style="width: 350px"><img src="{{ asset('images/sliders/'.$s->file_image) }}"></td>
								<td>{!! $s->titulo !!}</td>
								<td>
									<a href=" {{ action('EmpresaController@editSlider', $s->id)}} " class="btn-floating btn-large waves-effect waves-light orange"><i class="fas fa-pencil-alt"></i></a>
									<a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href=" {{ action('EmpresaController@eliminar', $s->id)}} " class="btn-floating btn-large waves-effect waves-light deep-orange"><i class="fas fa-trash-alt"></i></a>
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