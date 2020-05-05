@extends('PaginasInicio.inicio')

@section('title', 'Contacto')


@section('content')

		<h1 class="fw-300 centrar-texto">Contacto</h1>
	{{-- <img src="{{asset('dist/img/anuncio6.jpg')}}" alt=""> --}}
		<main class="contenedor seccion contenido-centrado">
			<h2 class="fw-300 centrar-texto">Llena el formulario de contacto</h2>

			<form class="contacto" action="">
				<fieldset>
					<legend>Información Personal</legend>
					<label for="nombre">Nombre:</label>
					<input class="nombre" type="text" id="nombre" placeholder="Nombre">

					<label for="email">E-mail</label>
					<input type="email" id="email" placeholder="Correo Electronico">

					<label for="telefono">Teléfono</label>
					<input type="tel" id="telefono" placeholder="Telefono">

					<label for="mensaje">Mensaje</label>
					<textarea name="mensaje" id="mensaje"></textarea>
				</fieldset>

				<fieldset>
					<legend>Informacion sobre Propiedad</legend>
					<label for="opciones">Vende o Compra</label>
					<select name="opciones" id="opciones">
						<option value="">Compra</option>
						<option value="">Venta</option>
						<option value="" disabled selected>--Seleccione--</option>
					</select>

					<label for="cantidad"> Cantidad:</label>
					<input type="text" id="cantidad" placeholder="Cantidad">

				</fieldset>

				<fieldset>
					<legend>Contacto</legend>
					<p>Como desea ser contactado</p>
					<div class="forma-contacto">
						<label for="phone">Teléfono</label>
						<input type="radio" name="contacto" value="telefono" id="phone">
	
						<label for="correo">E-mail</label>
						<input type="radio" name="contacto" value="correo" id="correo">

					</div>

					<p>Si eligió Telefono, elija la fecha y la hora</p>
					<label for="fecha">Fecha</label>
					<input type="date" name="fecha" id="fecha">

					<label for="hora">Hora</label>
					<input type="time" name="hora" id="hora" min="9:00" max="18:00">
				</fieldset>

				<input type="submit" name="" id="" class="boton boton-azul" value="Enviar">
				
			</form>

		</main>

    

@include('plantillas.menu_footer')
@endsection