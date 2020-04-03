
<?php echo $__env->make('plantillas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('plantillas.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br><br><br>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Listado de Administradores
        <small></small>
      </h1>
      
    </section>
      <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los administradores en esta sección</h3>
            </div>
          <div class="box-body">
            <table class="table table-bordered ">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Correo electronico</th>
                  <th>Rol</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td> <?php echo e($item->ID_USER); ?> </td>
                      <td> <?php echo e($item->NOMBRE_USER); ?> </td>
                      <td> <?php echo e($item->EMAIL_USER); ?> </td>
                      <td> <?php echo e($item->ROL_USERS); ?> </td>
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
    </div><!-- /.container-fluid -->
  </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          

      </div><!-- /.container-fluid -->
    </div>
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

  

<?php echo $__env->make('plantillas.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/layout.blade.php ENDPATH**/ ?>