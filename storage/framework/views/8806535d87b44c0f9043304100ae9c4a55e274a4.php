
<?php echo $__env->make('plantillas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('plantillas.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
<?php echo $__env->make('plantillas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('plantillas.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <style>
      .dataTables_info {
          display:none;
      }
      .dataTables_paginate{
        display:none;
      }
      .dataTables_length{
        display:none;
      }
    </style>

   <!-- BEGIN: Content-->
   <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Listado de contactos</h5>
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
            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    
                                    <div class="table-responsive">
                                      <div class="users">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                  <th>Nombre</th>
                                                  <th>Telefono</th>
                                                  <th>Asunto</th>
                                                  <th>Mensaje</th>
                                                </tr>
                                            </thead>
                                            <tbody id="sortable">
                                              <?php $__currentLoopData = $contactos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <tr>
                                                    
                                                    <td> <?php echo e($item->CONTACTO_NOMBRE); ?> </td>
                                                    <td> <?php echo e($item->CONTACTO_TELEFONO); ?> </td>
                                                    <td> <?php echo e($item->CONTACTO_ASUNTO); ?> </td>
                                                    <td> <?php echo e($item->CONTACTO_MENSAJE); ?> </td>
                                                    <td>
                                                      <div class="col-md-12">

                                                        <div class="col-md-3">
                                                          <a style="inline-block;" href="Eliminarcontacto/<?php echo e($item->ID_CONTACTO); ?>" class="btn btn-primary">Eliminar</a>
                                                        </div>
                                                        <div class="col-md-3">
                                                          
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
                </div>
            </section>
            <!--/ Zero configuration table -->
        </div>
    </div>
</div>
<!-- END: Content-->


<?php echo $__env->make('plantillas.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  

  

<?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/administrador/ver_contactos.blade.php ENDPATH**/ ?>