
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
                          <h5 class="content-header-title float-left pr-1 mb-0">Imagenes de Inicio</h5>
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
                                          <table class="table zero-configuration">
                                              <thead>
                                                  <tr>
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody id="sortable">
                                                <?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td> 
                                                        <div class="row ">
                                                            
                                                                <div class="col-md-2" >
                                                                    <img class="card-img-top " style="width:200px; height:150px;"  src="<?php echo e(asset(Storage::url($item->INICIO_NOMBRE))); ?>" alt="">
                                                                  </div>  
                                                                  <div class="col-md-6" >
                                                                    <a href="EliminarImageninicio/<?= base64_encode($item->INICIO_ID)?>" class="btn btn-primary">Eliminar</a>
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
              <!--/ Zero configuration table -->
          </div>
      </div>
  </div>
  <!-- END: Content-->

 

      

<?php echo $__env->make('plantillas.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<script>
    $( function() {
      $( "#sortable" ).sortable();
      $( "#sortable" ).disableSelection();
    } );
    </script><?php /**PATH C:\xampp\htdocs\compra-venta\resources\views/administrador/lista_imginicio.blade.php ENDPATH**/ ?>