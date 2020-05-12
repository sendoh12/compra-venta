
<?php echo $__env->make('plantillas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('plantillas.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
          <div class="content-header row">
              <div class="content-header-left col-12 mb-2 mt-1">
                  <div class="row breadcrumbs-top">
                      <div class="col-12">
                          <h5 class="content-header-title float-left pr-1 mb-0">Listado de Administradores</h5>
                          <div class="breadcrumb-wrapper col-12">
                              <ol class="breadcrumb p-0 mb-0">
                                  
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="content-body">
              <div class="row">
                  
              </div>
              
              

              <!-- Complex headers table -->
              <section id="headers">
                  <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-header">
                                  <h4 class="card-title">Maneja los administradores en esta sección</h4>
                              </div>
                              <div class="card-content">
                                  <div class="card-body card-dashboard">
                                      
                                      <div class="table-responsive">
                                          <table class="table table-striped table-bordered complex-headers">
                                              <thead>
                                                  <tr>
                                                      <th rowspan="2" class="align-top">Nombre</th>
                                                      <th colspan="2">Datos</th>
                                                  </tr>
                                                  <tr>
                                                      <th>Correo electronico</th>
                                                      <th>Acciones.</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                  <td> <?php echo e($item->NOMBRE_USER); ?> </td>
                                                  <td> <?php echo e($item->EMAIL_USER); ?> </td>
                                                  <td>
                                                    <div class="col-md-12">
                            
                                                      <div class="col-md-3">
                                                        <a style="inline-block;" href="Eliminarusuario/<?=$item->ID_USER?>" class="btn btn-primary">Eliminar</a>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <form method="get" action="Editarusuario">
                                                            <?php echo csrf_field(); ?>
                                                          <input  type="hidden" name="usuario" value="<?=$item->ID_USER?>">
                                                          <input style="inline-block;" type="submit" value="Editar" class="btn btn-primary">
                                                        </form>
                                                      </div>
                                                    </div>
                                                   </td>
                                                </tr>
                                                
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 
                                                 
                                                 
                                              </tbody>
                                              
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!--/ Complex headers table -->

              

             
          </div>
      </div>
  </div>
  <!-- END: Content-->
  

<?php echo $__env->make('plantillas.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/layout.blade.php ENDPATH**/ ?>