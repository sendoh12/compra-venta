 

<?php $__env->startSection('title', 'Inicio'); ?>



<?php $__env->startSection('content'); ?>

 			


<br>
		<section class="contenedor">
			<h1 class="fw-300 centrar-texto">¿Quiénes somos?</h1>
			<br>
			<div class="contenido-nosotros">
				<div class="imagen">
					<img src="<?php echo e(asset('dist/img/nosotros.jpg')); ?>" alt="imagen sobre nosotros">
				</div>
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
		</section>
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

                            
                                <input type="submit" value="Contacto">

                            
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
                

			<div class="ver-todas">
				<!-- Accent-colored raised button with ripple -->  
			<a href="<?php echo e(route('propiedades')); ?>" class="boton boton-verde ">Ver Todas</a>
			</div>
		</main>

		<br>
		<section class="imagen-contacto">
			<div class="contenedor contenido-contacto ">
				<h2>Encuentra la casa de tus sueños</h2>
				<p>
					Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad
				</p>
				<a href="<?php echo e(route('contacto')); ?>" class="boton boton-verde">Contactanos</a>
			</div>
		</section>

		<br>
		<div class="seccion-inferior contenedor seccion">
			<section class="blog">
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
	
			</section>
	
			
			<section class="testimoniales">
				<h3 class="centrar-texto fw-300">Testimoniales</h3>
				<br>
				<div class="testimonial">
					<blockquote>
						El personal se comporto de una excelente forma, muy buena atencion
						y la casa que me ofrecieron cumple con toas las expectativas
					</blockquote>
					<p>- Eduardo Cervantes</p>
				</div>
			</section>
		</div>




<?php echo $__env->make('plantillas.menu_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	
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
<?php $__env->stopSection(); ?> 
 

<?php echo $__env->make('PaginasInicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/lacer.blade.php ENDPATH**/ ?>