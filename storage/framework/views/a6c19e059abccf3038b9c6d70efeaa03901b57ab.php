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
                                <p><?php echo e($propiedad->PROPIEDADES_CONSTRUCCION); ?></p>
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
            <div class="paginando">
                <?php echo e($propiedades->links()); ?>

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
				<input type="text" class="form-control" name="correo" id="correo" >
			</div>
			<div class="modal-body">
				<label for="">Telefono</label>
				<input type="text" class="form-control validar" name="telefono" id="telefono" >
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
	  <?php /**PATH C:\xampp\htdocs\compra-venta\resources\views/lista_propiedades.blade.php ENDPATH**/ ?>