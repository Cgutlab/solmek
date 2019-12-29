@include('adm.datos.contacto.partials.header')

				</div>

				<h5>Información de Contacto</h5>					
				<div class="divider" style="margin-bottom: 10px"></div>
				<form method="POST"  enctype="multipart/form-data" action="{{action('DatoController@update', $datos->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
					{{ csrf_field() }}    
					{{ method_field('PUT')}}  

					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">keyboard_arrow_right</i>
							<input id="icon_prefix" type="text" class="validate" name="email" value="{{$datos->email}}" >
							<label for="icon_prefix">Email</label>
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">keyboard_arrow_right</i>
							<input id="icon_prefix" type="text" class="validate" name="direccion" value="{{$datos->direccion}}" >
							<label for="icon_prefix">Dirección</label>
						</div>
						
						<div class="input-field col s12">
							<i class="material-icons prefix">keyboard_arrow_right</i>
						<input id="icon_prefix" type="text" class="validate" name="telefono" value="{{$datos->telefono}}" >
							<label for="icon_prefix">Nª de Teléfono</label>
						</div>
						<div class="right">
							<a href="{{ action('DatoController@contacto') }}" class="waves-effect waves-light btn">Cancelar</a>
							<button class="btn waves-effect waves-light" type="submit" name="action" value="contacto">Submit
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