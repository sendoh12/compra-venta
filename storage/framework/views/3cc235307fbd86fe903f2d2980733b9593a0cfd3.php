
<?php echo $__env->make('plantillas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('plantillas.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    

    <div class="content-wrapper">
      <br><br><br>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Imagenes de Inicio
            <small></small>
          </h1>
          
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
    
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                                <table id="registros" class="table table-bordered">
                                  <thead>
                                      <tr>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody id="sortable">
                                      <?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>
                                              <td> 
                                                  <div class="row ">
                                                      <div class="col-md-16">
                                                          <div class="card col-md-3" >
                                                              <img class="card-img-top " style="width:200px; height:100px;"  src="inicio/<?=$item->INICIO_NOMBRE?>" alt="">
                                                              <a href="EliminarImageninicio/<?= base64_encode($item->INICIO_ID)?>" class="btn btn-danger">Eliminar</a>
                                                              
                                                          </div>  
                                                          
                                                      </div>
                                                      
                                                  </div>
                                                    
                                              </td>
                                          </tr>
                  
                                          
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      
                                  </tbody>
                                
                                </table>
                  
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
      $( "#sortable" ).sortable();
      $( "#sortable" ).disableSelection();
    } );
    </script><?php /**PATH C:\xampp\htdocs\compra-venta\resources\views/administrador/lista_imginicio.blade.php ENDPATH**/ ?>