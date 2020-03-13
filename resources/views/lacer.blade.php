@extends('Paginasinicio.inicio')

@section('title', 'Home')


<link rel="stylesheet" type="text/css" href=" {{asset('sider/css/estilos.css')}} ">
<link rel="stylesheet" type="text/css" href=" {{asset('sider/css/font-awesome.css')}} ">
@section('content')


    <div class="captura ">
        
       <div class="slideshow">
		<ul class="slider">
            @foreach ($imagenes as $item)
			<li>
				<img style="width: 100%; height: 400px;"  src="inicio/<?=$item->INICIO_NOMBRE?>" alt="">
				<section class="caption">
					<h1></h1>
					<p></p>
				</section>
            </li>
            @endforeach
		</ul>

		{{-- <ol class="pagination">
			
		</ol> --}}
	
		<div class="left">
			<span class="fa fa-chevron-left"></span>
		</div>

		<div class="right">
			<span class="fa fa-chevron-right"></span>
		</div>

	</div>

		<div class="contenido">


			<div class="filtro">
				<form class="col-md-10 col-md-offset-1 colorform">
					@csrf
					
					<br>
					{{-- <div class="form-group"> --}}
						<label class="letra">Contactanos</label>
					{{-- </div> --}}
					<br><br>
					<div class="form-group">
						<input type="email" class="form-control tipoletra" id="" placeholder="Nombre de la persona y apellidos">
					</div>
					<div class="form-group">
						<input type="email" class="form-control tipoletra" id="" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="text" class="form-control tipoletra" id="" placeholder="Telefono">
					</div>
					<div class="form-group">
						<input type="text" class="form-control tipoletra" id="" placeholder="Asunto">
					</div>
					<div class="form-group">
						<textarea class="form-control tipoletra" name="" id="" placeholder="Mensaje*"></textarea>
					</div>
						<button type="submit" class="btn-3d form-control">Buscar</button>
				</form>					
			</div>


			<div class="quienesSomos">
				<form class="col-md-10 col-md-offset-1 colorform">
					@csrf
					<br> 
					<button type="button" class="btn-3d" onclick="filtro()"> Filtro</button>
					<button type="button" class="btn-3d" onclick="clave()"> Clave</button>
					<br><br>
				<div id="filtro">
					<div class="form-group">
						<label class="letra">Operacion</label>
						<select class="form-control" name="" id=""></select>
					</div>
					<div class="form-group">
						<label class="letra">Tipo de inmueble:</label>
						<select class="form-control" name="" id="">
							<option selected="true">(Todos)</option>
						</select>
					</div>
					<div class="form-group">
						<label class="letra">Nombre</label>
						<input type="text" class="form-control tipoletra" id="" placeholder="Nombre de la propiedad">
					</div>
					<button type="submit" class="btn-3d form-control">Buscar</button>
				</div>

				<div id="clave" style="display:none;">
					<div class="form-group">
						<label class="letra">Buscar por clave</label>
						<input type="text" class="form-control tipoletra" id="" placeholder="Nombre de la propiedad">
					</div>
					<button type="submit" class="btn-3d" style="align:right;">Buscar</button>


				</div>
					
				</form>
			</div>

		</div>

@include('plantillas.menu_footer')

	</div>
	
	<script>
		function filtro() {
			document.getElementById('clave').style.display = 'none';
			document.getElementById('filtro').style.display = 'block';
		}
		
		function clave() {
			document.getElementById('clave').style.display = 'block';
			document.getElementById('filtro').style.display = 'none';
		}
	</script>
@endsection

