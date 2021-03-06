
<?php echo $__env->make('plantillas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('plantillas.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    

    <div class="content-wrapper">
      <br><br><br>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Listado de Propiedades
            <small></small>
          </h1>
          
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
    
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Maneja las propiedades en esta sección</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <form action="guardaorden" method="post">
                          <?php echo csrf_field(); ?>
                          <input type="submit" value="Guardar">
                                <table id="registros" class="table table-bordered">
                                  <thead>
                                      <tr>
                                      <th>Propiedades</th>
                                      
                                      </tr>
                                  </thead>
                                  <tbody id="sortable">
                                      <?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>
                                              <a> 
                                                  <div class="row ">
                                                      <div class="col-md-16">
                                                          <div class="card col-md-3" >
                                                              <img class="card-img-top " style="width:200px; height:120px;"  src="<?php echo e(asset(Storage::url($item->IMAGENES_ARCHIVO))); ?>" alt="">
                                                              <a href="EliminarImagen/<?=$item->IMAGENES_ID?>" class="btn btn-danger">Eliminar</a>
                                                              <input type="hidden" name="orden[]" value="<?=$item->IMAGENES_ID?>">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </tbody>
                                </table>
                </form>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
    
      </div>
      <!-- /.content-wrapper -->
    
    
        
     
      
    
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
    $( function() {
        $( ".sortable" ).sortable({
            animation: 500,
            axis: 'y',
            containment: 'parent',
        }
    );
    $( ".sortable" ).disableSelection();
  } );
    </script><?php /**PATH /home/grupola7/resources/views/administrador/imagenes_propiedades.blade.php ENDPATH**/ ?>