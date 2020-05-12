

<?php $__env->startSection('title', 'Contacto'); ?>


<?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

<div class="panel panel-default contenedor">
	<div class="panel-body">
		<h1 class="fw-300 centrar-texto">Contacto</h1>
	
		<main class="contenedor seccion contenido-centrado">
			<h2 class="fw-300 centrar-texto">Llena el formulario de contacto</h2>

			<form method="POST" class="contacto" action="contactos" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				<fieldset>
					<legend>Información Personal</legend>
					<label class="estilos-label" for="nombre">Nombre:</label>
					<input class="boton-contacto" class="nombre" type="text" id="nombre" name="nombre" placeholder="Nombre" minlength="2" maxlength="80" required>

					<label class="estilos-label" for="email">E-mail</label>
					<input class="boton-contacto" type="email" id="email" name="email" placeholder="Correo Electronico" minlength="2" maxlength="120" required>

					<label class="estilos-label" for="telefono">Teléfono</label>
					<input class="boton-contacto" type="tel" id="telefono" name="telefono" placeholder="Telefono"minlength="2" maxlength="10" required>

					<label class="estilos-label" for="mensaje">Mensaje</label>
					<textarea name="mensaje" id="mensaje" minlength="2" maxlength="1000" required></textarea>
				</fieldset>

				<fieldset>
					<legend>Informacion sobre Propiedad (Opcional)</legend>
					<label class="estilos-label" for="opciones">Vende o Compra</label>
					<select name="opciones" id="opciones">
						<option value="Compra">Compra</option>
						<option value="Venta">Venta</option>
						<option value="" disabled selected>--Seleccione--</option>
					</select>

					<label class="estilos-label" for="cantidad"> Cantidad:</label>
					<input class="boton-contacto" type="number" id="cantidad" name="cantidad" placeholder="Cantidad" max="100000000" min="0" minlength="1" maxlength="10">

				</fieldset>

				<fieldset>
					<legend>Contacto (Opcional)</legend>
					<p>Como desea ser contactado</p>
					<div class="forma-contacto">
						<label class="estilos-label" for="phone">Teléfono</label>
						<input type="radio" name="comunicarse" value="telefono" id="phone">
	
						<label class="estilos-label" for="correo">E-mail</label>
						<input type="radio" name="comunicarse" value="correo" id="correo">

					</div>

					<p>Si eligió Telefono, elija la fecha y la hora</p>
					<label class="estilos-label" for="fecha">Fecha</label>
					<input class="boton-contacto" type="date" name="fecha" id="fecha">

					<label class="estilos-label" for="hora">Hora</label>
				<input class="boton-contacto" type="time" name="hora" id="hora" min="9:00" max="18:00" value="">
				</fieldset>

				<input type="button" onclick="Contactar()"  class=" boton-enviar boton-azul" value="Enviar">
				
			</form>

		</main>
	</div>
</div>

    

<?php echo $__env->make('plantillas.menu_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php echo e(asset('frest/js/sweetalert2.all.min.js')); ?>"></script>

		<script>
			$.ajaxSetup({
				headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			function Contactar() {
				var nombre = document.getElementById('nombre').value;
				var email = document.getElementById('email').value;
				var telefono = document.getElementById('telefono').value;
				var mensaje = document.getElementById('mensaje').value;
				var opciones = document.getElementById('opciones').value;
				var cantidad = document.getElementById('cantidad').value;
				var contact = document.getElementsByName('comunicarse');
				var fecha = document.getElementById('fecha').value;
				var hora = document.getElementById('hora').value;
				var comunicarse;
				for(i=0; i<contact.length; i++) {
					if(contact[i].checked) {
						comunicarse = contact[i].value; 
					}
				}

				if(nombre == null || nombre == '') {
                  swal(
                      'Campo vacio',
                      'No has llenado el campo Nombre!',
                      'warning'
                   )

				}else if(email == null || email == '') {
				swal(
                      'Campo vacio',
                      'No has llenado el campo de Correo Electronico!',
                      'warning'
                   )
				}else if(telefono == null || telefono == '') {
				swal(
                      'Campo vacio',
                      'No has llenado el campo de Telefono!',
                      'warning'
                   )
				}else if(mensaje == null || mensaje == '') {
				swal(
                      'Campo vacio',
                      'No has llenado el campo de Mensaje!',
                      'warning'
                   )
				}
				else{
						$.ajax({
						cache:false,
						dataType:"json",
						type: 'POST',
						url:'contactos',
						data: {
							nombre:nombre, 
							email:email,
							telefono:telefono,
							mensaje:mensaje,
							opciones:opciones,
							cantidad:cantidad,
							comunicarse:comunicarse,
							fecha:fecha,
							hora:hora
							},
							success: function(response){
								if(response.bandera == 1) {
									swal(
										'Correcto',
										'Tus datos han sido enviados...!',
										'success'
									)
								}
							
							},

							beforeSend:function(){},
							error:function(objXMLHttpRequest){
								console.log(objXMLHttpRequest);
								swal(
										'Error',
										'Por favor ingrese un usuario valido, un correo valido, un numero de 10 digitos, un mensaje minimo de 10 caracteres',

										'warning'
									)
							}
					});
				}
			}
		</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('PaginasInicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/portfolio.blade.php ENDPATH**/ ?>