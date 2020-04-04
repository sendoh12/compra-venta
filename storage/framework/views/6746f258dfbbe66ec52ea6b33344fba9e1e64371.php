
<?php echo $__env->make('plantillas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('plantillas.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br><br><br>
    <section class="content-header">
      <h1>
        Imagenes
        <small></small>
      </h1>
      
    </section>
      <div class="container-fluid">

        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-16">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Agregar imagenes a la propiedad</h3>
            </div>
        
            <form id="guardarimagenes" class="form-horizontal" action="<?php echo e(route('InsertarImagenes',$id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="box-footer">

                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Nombre de la imagen</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Seleccionar Imagen</label>
                    <div class="col-sm-6">
                      <input type="file" class="" name="imagen[]" id="imagen" placeholder="" multiple>
                    </div>
                  </div>


                  <div class="box-footer" align="center">
                    
                    <input type="button" class="btn btn-info " onclick="Mostrarimagenes()" value="Guardar Cambios">
                    
                  </div>
                </div>
              </form>

             
              
            </div>
        </div>
        </section>
      </div>
        
        
        

      
  
        </div>  
    </div>

    


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

 

  

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