
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
                      <h5 class="content-header-title float-left pr-1 mb-0">Capturar Imagenes</h5>
                      <div class="breadcrumb-wrapper col-12">
                          <ol class="breadcrumb p-0 mb-0">
                              
                          </ol>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="content-body">
          <!-- Basic Inputs start -->
          <section id="basic-input">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Capture las imagenes para la propiedad</h4>
                          </div>
                          <form id="guardarimagenes" class="form-horizontal" action="<?php echo e(route('InsertarImagenes',$id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                          <div class="card-content">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <fieldset class="form-group">
                                              <label for="basicInput">Nombre de la imagen</label>
                                              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="">
                                            </fieldset>

                                            <fieldset class="form-group">
                                              <label for="basicInput">Seleccionar Imagen</label>
                                              <input type="file" class="form-control" name="imagen[]" id="imagen" required placeholder="" multiple>
                                            </fieldset>

                                          <div class="box-footer" align="right">
                                            <input type="button" class="btn btn-info " onclick="Mostrarimagenes()" value="Guardar Cambios">
                      
                                          </div>

                                  
                                      </div>
                                      
                                  </div>
                              </div>
                          </div>
                        </form>
                      </div>
                  </div>
              </div>
          </section>
          <!-- Basic Inputs end -->

          
      </div>
  </div>
</div>
<!-- END: Content-->

  

<?php echo $__env->make('plantillas.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<script>
  $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  function Mostrarimagenes() {
    console.log('hol');

    document.getElementById('guardarimagenes').submit();
  }

</script><?php /**PATH C:\xampp\htdocs\compra-venta\resources\views/administrador/agregar_imagenes.blade.php ENDPATH**/ ?>