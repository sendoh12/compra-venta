@extends('Paginasinicio.inicio')

@section('title', 'Portfolio')


@section('content')
<br>
    <div class="contacto">
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
						<input type="tel" name="tel" class="form-control tipoletra" id="" placeholder="Telefono" minlength="2" maxlength="10" pattern="[0-9]{10}" required>
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
        {{-- </div> --}}
    </div>

    

@include('plantillas.menu_footer')
@endsection