<?php echo $__env->make('plantillas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('plantillas.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br><br><br>
    <section class="content-header col-md-offset-2">
      <h1>
        Capturar Imagenes
      </h1>
      
    </section>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <!-- Main content -->
        <section class="content">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Capture las imagenes para la pagina de inicio</h3>

         
          </div>
          <div class="box-body">
            <form id="" class="form-horizontal" action="<?php echo e(route('InsertarInicio')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="box-footer">

                  

                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Seleccionar Imagenes</label>
                    <div class="col-sm-6">
                      <input type="file" class="" name="imagen[]" id="imagen" required placeholder="" multiple>
                    </div>
                  </div>


                  
                    
                    
                    <div class="box-footer" align="right">
                      <button  type="submit" class="btn btn-info ">Guardar Cambios</button>

                    </div>
                </div>
              </form>
            

        </div>
        <!-- /.box-body -->

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

    </div>
  </div>
  </div>
  <!-- /.content-wrapper -->

  <?php echo $__env->make('plantillas.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupola7/resources/views/administrador/captura_imagenes.blade.php ENDPATH**/ ?>