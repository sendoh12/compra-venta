 

<?php $__env->startSection('title', 'Inicio'); ?>



<?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

<div class="contenedor-slider">
	<div class="row imagen-principal">
		<div class="col-md-12">
		
			<!-- aqui insertaremos el slider -->
			<div id="carousel1" class="carousel slide" data-ride="carousel">
				<!-- Indicatodores -->
				<ol class="carousel-indicators">
					<?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($key == 0): ?>
							<li data-target="#carousel1" data-slide-to="<?php echo e($key); ?>" class="active"></li>
						<?php else: ?>
							<li data-target="#carousel1" data-slide-to="<?php echo e($key); ?>"></li>
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ol>
			
				<!-- Contenedor de las imagenes -->
				<div class="ajustar-slider">
					<div class="carousel-inner" role="listbox">
						
						<?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($key == 0): ?>
								<div class="item active">
									<img style="width: 100%; height: 500px;" src="<?php echo e(asset(Storage::url($item->INICIO_NOMBRE))); ?>" alt="Imagen 1">
									<div class="carousel-caption"></div>
								</div>
							<?php else: ?>
								<div class="item">
									<img style="width: 100%; height: 500px;" src="<?php echo e(asset(Storage::url($item->INICIO_NOMBRE))); ?>" alt="Imagen 2">
									<div class="carousel-caption"></div>
								</div>
							<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			
			</div>
			
		
		</div>
	</div>
</div>



<div class="panel panel-default contenedor">
    <div class="panel-body">
		<h1 class="fw-300 centrar-texto">¿Quiénes somos?</h1>
					<br>
			<div class="contenedor quienes-somos">
				
				<div class="row">
					<div class="col-md-6">
						<div class="imagen-somos">
							<img src="<?php echo e(asset('dist/img/nosotros.jpg')); ?>" alt="imagen sobre nosotros">
						</div>
					</div>
					<div class="col-md-6">
						<div class="texto-nosotros">
							<blockquote>Experiencia</blockquote>
							<p>
								Somos un grupo de profesionistas enfocados en apoyar 
								en la compra, venta o renta de su bien inmueble, con 
								el objetivo de satisfacer las necesidades inmobiliarias 
								de nuestros clientes. <br>

								
							</p>
						</div>
					</div>
				</div>
			</div>
		


<br>


		<main class="seccion contenedor">
			<h2 class="fw-300 centrar-texto">Casas y Terrenos en Venta</h2>
			<br>
			<div class="contenedor">
        <div class="container">
            <div class="row">
                <?php if(isset($propiedades)): ?>
                <?php $__currentLoopData = $propiedades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propiedad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 propied">
                    
                    

                    <form action="CasaVenta" method="get">
                            <input type="hidden" name="id" value="<?php echo e(base64_encode($propiedad->PROPIEDADES_ID)); ?>">
                        <div class="centrar-imagen">
                            <button style="width:94% ;height: 250px;" class="centrar-imagen" type="submit">
                                <img style="width:100% ;height: 250px;" src="<?php echo e(asset(Storage::url($propiedad->PROPIEDADES_IMAGEN))); ?>" >
                            
                                <div class="texto-encima">
                                    <p class="etiqueta"><?php echo e($propiedad->PROPIEDADES_OPERACION); ?></p>
                                </div>
                            </button>
                            </div>
                    </form>

                    <div class="centrar-propiedad">
                        <div class="datos-propiedad">
                            <p><?php echo e($propiedad->PROPIEDADES_PRECIO); ?></p>
                            <h4><p><?php echo e($propiedad->PROPIEDADES_TIPO.' en '.$propiedad->PROPIEDADES_OPERACION); ?></p></h4>
                            <p><?php echo e($propiedad->PROPIEDADES_CLAVE); ?></p>
                            
                            <p><?php echo e($propiedad->ESTADOS_NOMBRE.', '.$propiedad->MUNICIPIOS_NOMBRE); ?></p>
                            <p><?php echo e($propiedad->PROPIEDADES_COLONIA); ?></p>
                            <p><?php echo e($propiedad->PROPIEDADES_ZONA); ?></p> 
                            <ul class="iconos-caracteristicas">
                                <li>
                                    <img src="<?php echo e(asset('dist/img/icono_wc.svg')); ?>" alt="icono wc">
                                    <p><?php echo e($propiedad->PROPIEDADES_BAÑOS); ?></p>
                                </li>
                                <li>
                                    <img src="<?php echo e(asset('dist/img/icono_estacionamiento.svg')); ?>" alt="icono wc">
                                    <p><?php echo e($propiedad->PROPIEDADES_ESTACIONAMIENTO); ?></p>
                                </li>
                                <li>
                                    <img src="<?php echo e(asset('dist/img/icono_dormitorio.svg')); ?>" alt="icono wc">
                                    <p><?php echo e($propiedad->PROPIEDADES_HABITACIONES); ?></p>
                                </li>
                            </ul> 
                        </div>                        
                    </div>
                    <div class="centrar-funciones">

                        <div class="funciones">
                            
                            <form action="CasaVenta" method="get">
                                <input type="hidden" name="id" value="<?php echo e(base64_encode($propiedad->PROPIEDADES_ID)); ?>">
                                <input type="submit" value="Ver propiedad">
                            </form>   

							
							<input type="button" onclick="PasarClave(<?php echo e($propiedad->PROPIEDADES_ID); ?>)" data-toggle="modal" data-target="#exampleModalCenter" value="Contacto">

                            
                            <form action="pdfjava" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="ide" value="<?php echo e($propiedad->PROPIEDADES_ID); ?>">
                                <input type="submit" value="Descargar">
                            </form>
                            
                        </div>
                    </div>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>    
            </div>
        </div>
	</div>
	
	
	 <!-- Modal -->
	 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<label for="">Propiedad de interes</label>
				<input type="text" class="form-control" name="ClavePropiedad" id="ClavePropiedad" disabled>
			</div>
			<div class="modal-body">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre" id="nombre" >
			</div>
			<div class="modal-body">
				<label for="">E-mail</label>
				<input type="email" class="form-control" name="email" id="email" >
			</div>
			<div class="modal-body">
				<label for="">Telefono</label>
				<input type="tel" class="form-control validar" name="telefono" id="telefono" >
			</div>
			<div class="modal-body">
				<label for="">Mensaje</label>
				<textarea name="mensaje" id="mensaje" class="form-control" cols="30" rows="10"></textarea>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			  <button type="button" onclick="EnviarContacto()" class="btn btn-primary">Enviar</button>
			</div>
		  </div>
		</div>
	  </div>
	  
                

			<div class="ver-todas">
				<!-- Accent-colored raised button with ripple -->  
			<a href="<?php echo e(route('propiedades')); ?>" class="boton boton-verde contenedor">Ver Todas</a>
			</div>
		</main>
	</div>
</div>

		

		
		<section class="imagen-contacto">
			<div class="contenedor contenido-contacto ">
				<h2>Encuentra la casa de tus sueños</h2>
				<p>
					Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad
				</p>
				<a href="<?php echo e(route('contacto')); ?>" class="boton boton-verde">Contactanos</a>
			</div>
		</section>

		

		<div class="panel panel-default contenedor">
			<div class="panel-body">
				<div class="contenedor">
					<div class="row">
						<div class="col-md-8">
							<h3 class="centrar-texto fw-300" >Nuestros Proyectos</h3>
							<br>
							<article class="entrada-blog">
								<div class="imagen">
									<img src="<?php echo e(asset('dist/img/blog1.jpg')); ?>" alt="icono seguridad" />
								</div>
								<div class="texto-entrada">
									<a href="#">
										<h4>Terraza en el techo de tu casa</h4>
									</a>
									
								<p>Escrito el: <span>20/10/2019</span> por: <span>Admin</span> </p>
								<p>
									Consejos para construir una terraza en el
									techo de tu casa con los mejores materiaes y ahorro de dinero
								</p>
								</div>
								
							</article>

							<article class="entrada-blog">
								<div class="imagen">
									<img src="<?php echo e(asset('dist/img/blog2.jpg')); ?>" alt="icono seguridad" />
								</div>
								<div class="texto-entrada">
									<a href="#">
										<h4>Guia para la decoracion de tu hogar</h4>
									</a>
									
									<p>Escrito el: <span>20/10/2019</span> por: <span>Admin</span></p>
									<p>
										Consejos para construir una terraza en el
										techo de tu casa con los mejores materiaes y ahorro de dinero
									</p>
								</div>
								
							</article>
						</div>

						<div class="col-md-4">
							<h3 class="centrar-texto fw-300">Testimoniales</h3>
							<br>
							<div class="testimonial">
								<blockquote>
									El personal se comporto de una excelente forma, muy buena atencion
									y la casa que me ofrecieron cumple con toas las expectativas
								</blockquote>
								<p>- Eduardo Cervantes</p>
							</div>
						</div>
					</div>
				</div>
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
	
		function PasarClave(clave) {

			$.ajax({
				type: 'POST',
				url: "PropiedadClave",
				data: {clave:clave},
				dataType: 'json',
					success: function (response) {
						// console.log(response.arreglo[0].PROPIEDADES_CLAVE);
						$("#ClavePropiedad").val(response.arreglo[0].PROPIEDADES_CLAVE);
					}
				});
		}
		function EnviarContacto() {
			var ClavePropiedad = document.getElementById('ClavePropiedad').value;
			var nombre = document.getElementById('nombre').value;
			var email = document.getElementById('email').value;
			var telefono = document.getElementById('telefono').value;
			var mensaje = document.getElementById('mensaje').value;
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
				}else if(telefono.length < 10  || telefono.length > 10) {
				swal(
                      'Error',
                      'El telefono debe ser de 10 digitos!',
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
							ClavePropiedad:ClavePropiedad,
							nombre:nombre, 
							email:email,
							telefono:telefono,
							mensaje:mensaje,
						},
							success: function(response){
								if(response.bandera == 1) {
									swal(
										'Correcto',
										'Tus datos han sido enviados...!',
										'success'
									)
									setTimeout(function(){location.reload(); }, 2000);
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

		// validar los campos de numeros
		function validarNumeros(evt){

			var iKeyCode = (evt.which) ? evt.which : evt.keyCode;
			if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57) && (iKeyCode < 96 || iKeyCode > 105))
			{
				evt.preventDefault();
				evt.stopPropagation();
				//  return false;
			}else{
				return true;
			}
		}
			$(document).ready(function () {

				$(".validar").on("keydown", function(evt){
					// console.log(evt);
					let iKeyCode = (evt.which) ? evt.which : evt.keyCode;
					// console.log(iKeyCode);
					if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57) && (iKeyCode < 96 || iKeyCode > 105))
					{
						// console.log('no es numero');
						return false;
					}
					return true;
				});  
			});
	</script>

	
<?php $__env->stopSection(); ?> 
 

<?php echo $__env->make('PaginasInicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\compra-venta\resources\views/lacer.blade.php ENDPATH**/ ?>