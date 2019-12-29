@include('adm.producciones.videos.partials.header')
<a class="breadcrumb">Editar</a>
</div>

<h5>Videos</h5>					
<div class="divider"></div>
<div class="col s12">

	<form method="POST"  enctype="multipart/form-data" action="{{action('VideoController@update', $video->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
		{{ csrf_field() }}    
		{{ method_field('PUT')}}  

		<div class="row">
			<h5>Editar</h5>					
			<div class="divider"></div>


			<div class="input-field col s12">
				<i class="material-icons prefix">keyboard_arrow_right</i>
				<input id="icon_prefix" type="text" class="validate" name="titulo" value="{{$video->titulo}}" >
				<label for="icon_prefix">Título</label>
			</div>


			<div class="input-field col s10">
				<i class="material-icons prefix">keyboard_arrow_right</i>
				<input id="icon_prefix" type="text" class="validate" name="video" value="{{$video->video}}" >
				<label for="icon_prefix">Link dek Video</label>
			</div>

			<div class="input-field col s2">
				<div class="switch">
					<label>
						
						<input type="checkbox" name="estado"  @if($video->estado==1) checked="checked" @endif>
						<span class="lever"></span>
						Activo
					</label>
				</div>
			</div>

			<div class="col s12">
				<h6 for="textarea1">Descripción</h6>
			</div>
			<div class="input-field col s12">

				<textarea id="descripcion" name="descripcion"> {!! $video->descripcion !!} </textarea>
			</div>
			<div class="input-field col s6">
				<i class="material-icons prefix">keyboard_arrow_right</i>
				<input id="icon_prefix" type="text" class="validate" name="orden"  value="{{$video->orden}}" >
				<label for="icon_prefix">Orden</label>
			</div>

		</div>
		<div class="row">

			<div class="right">
				<a href="{{ action('VideoController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>
				<button class="btn waves-effect waves-light btn-color" type="submit" name="action">Submit
					<i class="material-icons right">send</i>
				</button>
			</div>
		</div>
	</form>

</div>
</div>
</div>
</div>
</main>

@include('layouts.script')

<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>

	CKEDITOR.replace('descripcion');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';

	$(document).ready(function(){		
		M.AutoInit();
		$('.collapsible').collapsible();
		$('select').formSelect();  
	});
</script>


</body>

</html>