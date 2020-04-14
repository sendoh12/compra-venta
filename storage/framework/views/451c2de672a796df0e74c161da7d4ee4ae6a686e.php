<section class="invitados contenedor2 seccion">
           <h2>Propiedades</h2>
           <ul class="lista-invitados clearfix">
               <?php if(isset($propiedades)): ?>
               <?php $__currentLoopData = $propiedades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propiedad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li>
                   <div class="invitado">
                       <div class="etiqueta"><?php echo e($propiedad->PROPIEDADES_OPERACION); ?></div>
                       
       
                       <form action="CasaVenta" method="get">
                           
                               <input type="hidden" name="id" value="<?php echo e(base64_encode($propiedad->PROPIEDADES_ID)); ?>">
                           
                           <button type="submit">
                               <img style="width: 400px;height: 250px;" src="<?php echo e(asset(Storage::url($propiedad->PROPIEDADES_IMAGEN))); ?>" alt="imagen invitado">
                           </button>
                         </form>
       
                           <p><?php echo e($propiedad->PROPIEDADES_PRECIO); ?></p>
                       </div>
                       <div class="texto" style="width: 400px;height: 250px;">
                           <h4><p><?php echo e($propiedad->PROPIEDADES_TIPO.' en '.$propiedad->PROPIEDADES_OPERACION); ?></p></h4>
                           <p><?php echo e($propiedad->PROPIEDADES_CLAVE); ?></p>
                           
                           <p><?php echo e($propiedad->ESTADOS_NOMBRE.', '.$propiedad->MUNICIPIOS_NOMBRE); ?></p>
                           <p><?php echo e($propiedad->PROPIEDADES_COLONIA); ?></p>
                           <p><?php echo e($propiedad->PROPIEDADES_ZONA); ?></p> 
       
                           <nav class="iconos">
                               <?php echo e('Habs '.$propiedad->PROPIEDADES_HABITACIONES); ?>

                               <a ><i class="fas fa-person-booth"></i></a>
                               <?php echo e('Baño(s) '.$propiedad->PROPIEDADES_BAÑOS); ?>

                               <a ><i class="fas fa-toilet"></i></a>
                               <?php echo e($propiedad->PROPIEDADES_CONSTRUCCION); ?>

                               <a><i class="fas fa-home"></i></a>
                           </nav>
                       
                           <div class="botones">
                               
                               <form action="pdfjava" method="post">
                                   <?php echo csrf_field(); ?>
                                   <input type="hidden" name="ide" value="<?php echo e($propiedad->PROPIEDADES_ID); ?>">
                                   <input type="submit" value="Descargar">
                               </form>
                               
                               
                               
                               
       
                           </div>
                   </div>
               </li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?>
       
               
           </ul>
           
         </section>
         <div class="paginando">
           <?php echo e($propiedades->links()); ?>

         </div><?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/lista_propiedades.blade.php ENDPATH**/ ?>