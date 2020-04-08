
<?php echo $__env->make('plantillas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('plantillas.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <script>
      .linea {
    display: inline-block;
    width: 100px;
}
    </script>

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
            <form action="buscar" method="get" onsubmit="return showLoad()">
            <div class="panel-body">
                <label class="label-control">Nombre de Propiedad</label>
                <input type="text" name="busqueda" class="form-control" placeholder="Ingresar nombre de la Propiedad" required="required">
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-info">buscar</button>
            </div>
            </form>

              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Propiedades</th>
                  
                </tr>
                </thead>
                <?php
                // var_dump($url);
                // foreach ($url as $key => $value) {
                //   var_dump($value->pathPrefix);
                // }
                // die;
                ?>
                <tbody>
                    <?php $__currentLoopData = $propiedades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> 
                                <div class="row ">
                                    <div class="col-md-16">
                                        <div class="card col-md-3" >
                                            <img class="card-img-top " style="width:200px; height:100px;"  src="<?php echo e(Storage::url($item->PROPIEDADES_IMAGEN)); ?>" alt=""> 
                                        </div>
                                        <div class="col-md-6">
                                            <?php echo e($item->PROPIEDADES_NOMBRE); ?> <br>
                                            <?php echo e('Precio'.$item->PROPIEDADES_PRECIO); ?>

                                        </div>
                                        <div class="col-md-3">

                                            
                                            <div class="linea col-md-3">
                                              <form action="Editar" method="get">
                                                <input type="hidden" name="id_propiedad" value="<?=base64_encode($item->PROPIEDADES_ID)?>">
                                                <button type="submit" class="btn bg-primary btn-flat linea" ><i class="fas fa-pencil-alt"> </i></button>
                                              </form>
                                            </div>
                                            

                                          
                                            <div class="linea col-md-3">
                                              <form action="VerImagenes" method="get">
                                              <input type="hidden" name="id_propiedade" value="<?=base64_encode($item->PROPIEDADES_ID)?>">
                                              <button type="submit" class="btn bg-primary btn-flat  linea"><i class="fas fa-image"> </i></button>
                                              </form>
                                            </div>

                                            <div class="linea col-md-3">
                                              <a href="AgregarImagenes/<?=base64_encode($item->PROPIEDADES_ID)?>" data-id="" data-tipo="admin" class="btn bg-primary btn-flat  linea"> 
                                                <i class="fas fa-plus-circle"></i>
                                              </a>
                                            </div>
                                            <div class="linea col-md-3">
                                                  <a href="Eliminar_propiedade/<?=base64_encode($item->PROPIEDADES_ID)?>" class="btn bg-primary btn-flat  linea" >
                                                    <i class="fa fa-trash-o"></i>
                                                  </a>
                                            </div>
                                            

                                        </div>
                                    </div>
                                    
                                </div>
                                   
                            </td>
                        </tr>

                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>
               
              </table>
              <?php echo e($propiedades->links()); ?>

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
<?php /**PATH C:\xampp\htdocs\compra-venta\resources\views/administrador/ver_propiedades.blade.php ENDPATH**/ ?>