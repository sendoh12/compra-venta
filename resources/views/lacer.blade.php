@extends('PaginasInicio.inicio')

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
					<h1>GupoLacer</h1>
					<p></p>
				</section>
            </li>
            @endforeach
		</ul>
	
		<div class="left">
			<span class="fa fa-chevron-left"></span>
		</div>

		<div class="right">
			<span class="fa fa-chevron-right"></span>
		</div>

	</div>

		<div class="contenido">
			<div class="filtro">
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
        	@endif
				<form  action="contactos"  method="post" class="col-md-10 col-md-offset-1 colorform">
					@csrf
					<br>
					{{-- <div class="form-group"> --}}
						<label class="letra">Contactanos</label>
					{{-- </div> --}}
					<br><br>
					<div class="form-group">
						<input type="text" name="nombre" class="form-control tipoletra" id="" placeholder="Nombre de la persona y apellidos"  minlength="2" maxlength="80"  required>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control tipoletra" id="" placeholder="Email" minlength="2" maxlength="80"  required>
					</div>
					<div class="form-group">
						<input type="tel" name="tel" class="form-control tipoletra" id="" placeholder="Telefono" minlength="2" maxlength="10" required>
					</div>
					<div class="form-group">
						<input type="text" name="asunto" class="form-control tipoletra" id="" placeholder="Asunto" minlength="2" maxlength="120"  required>
					</div>
					<div class="form-group">
						<textarea class="form-control tipoletra" name="mesaje" id="" placeholder="Mensaje*" minlength="2" maxlength="1000"  required></textarea>
					</div>
						<button type="submit" class="btn-3d form-control">Enviar</button>
				</form>
			</div>


			<div class="quienesSomos">
				<form id="filtro" action="Flitar_busquedad" method="post" class="col-md-10 col-md-offset-1 colorform">
					@csrf
					<br>
					<button type="button" class="btn-3d" onclick="filtro()"> Filtro</button>
					<button type="button" class="btn-3d" onclick="clave()"> Clave</button>
					<br><br>
				<div>
					<div class="form-group">
						<label class="letra">Operacion</label>
						<select class="form-control" name="operacion" id="">
							<option value="Venta" selected="true">Venta</option>
                    		<option value="Renta">Renta</option>
						</select>
					</div>
					<div class="form-group">
						<label class="letra">Tipo de inmueble:</label>
						<select class="form-control" name="inmueble" id="">
							<option selected="true">Todos</option>
							@foreach ($tipos as $item)
								<option value="{{$item->TIPOS_ID}}">{{$item->TIPOS_NOMBRE}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label class="letra">Nombre</label>
						<input type="text" class="form-control tipoletra" name="nombre" placeholder="Nombre de la propiedad" minlength="2" maxlength="120"  required>
					</div>
					<button type="submit" class="btn-3d form-control">Buscar</button>
				</div>
				</form>
			<div id="clave" style="display:none;">
				<form action="Filtro_buscar_nombre" method="post" class="col-md-10 col-md-offset-1 colorform">
				@csrf
				<br>
					<button type="button" class="btn-3d" onclick="filtro()"> Filtro</button>
					<button type="button" class="btn-3d" onclick="clave()"> Clave</button>
					<br><br>
					<div class="form-group">
						<label class="letra">Buscar por clave</label>
						<input type="text" class="form-control tipoletra" name="nombre1" placeholder="Nombre de 1la propiedad" minlength="2" maxlength="120"  required>
					</div>
					<button type="submit" class="btn-3d" style="align:right;">Buscar</button>

				</form>
			</div>
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

