<table class="table zero-configuration">
  <thead>
      <tr>
        <th>Propiedades</th>
      </tr>
  </thead>
  <tbody id="sortable">
    <?php $__currentLoopData = $propiedades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td> 
            <div class="row ">
                    <div class="col-md-3" >
                    <img class="card-img-top border" style="width:200px; height:150px;"  src="<?php echo e(asset(Storage::url($item->PROPIEDADES_IMAGEN))); ?>" alt="">
                    </div>
                    <div class="col-md-6">
                      <h4><p><?php echo e($item->PROPIEDADES_PRECIO.' MXN'); ?></p></h4>  
                      <h4><p><?php echo e($item->PROPIEDADES_TIPO.' en '.$item->PROPIEDADES_OPERACION); ?></p></h4>
                      <p><?php echo e($item->ESTADOS_NOMBRE.', '.$item->MUNICIPIOS_NOMBRE); ?></p>
                      <p><?php echo e($item->PROPIEDADES_COLONIA); ?></p>
                      <p><?php echo e($item->PROPIEDADES_ZONA); ?></p> 

                    </div>
                    <div class="row">
                        
                          <form action="Editar" method="get">
                            <input type="hidden" name="id_propiedad" value="<?=base64_encode($item->PROPIEDADES_ID)?>">
                            <button  type="submit" class="btn bg-default btn-flat nav-link" data-toggle="tooltip" data-placement="top" title="Editar" ><i class="fas fa-pencil-alt"> </i></button>

                          </form>
                        
                        
                    
                        
                          <form action="VerImagenes" method="get">
                          <input type="hidden" name="id_propiedade" value="<?=base64_encode($item->PROPIEDADES_ID)?>">
                          <button  type="submit" class="btn bg-default btn-flat nav-link" data-toggle="tooltip" data-placement="top" title="Ver imagenes" ><i class="fas fa-image"> </i></button>
                          </form>
                        

                        
                          <form>
                          <a href="AgregarImagenes/<?=base64_encode($item->PROPIEDADES_ID)?>" data-id="" data-toggle="tooltip" data-placement="top" title="Agregar imagenes" class="btn bg-default btn-flat  "> 
                            <i  class="fas fa-plus-circle"></i>
                          </a>
                        </form>
                        
                        
                          <form>
                              

                              <a href="Eliminar_propiedade/<?php echo e(base64_encode($item->PROPIEDADES_ID)); ?>"  data-toggle="tooltip" data-placement="top" title="Eliminar" class="nav-link btn bg-default btn-flat  " >
                                <i  class="fa fa-trash-o"></i>
                              </a>
                            </form>
                        
                      

                    </div>
                
            </div>
               
        </td>
    </tr>

    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
   
  </tbody>
  
</table>
<div align="center">
<?php echo e($propiedades->links()); ?>

</div><?php /**PATH C:\xampp\htdocs\compra-venta\resources\views/administrador/VerProp_pagin.blade.php ENDPATH**/ ?>