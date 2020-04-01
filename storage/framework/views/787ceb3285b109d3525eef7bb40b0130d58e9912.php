<?php echo $__env->make('plantillas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('plantillas.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header col-md-offset-2">
      <h1>
        Crear Administrador
        <small>Llena el formulario para crear un administrador</small>
      </h1>
      
    </section>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <!-- Main content -->
        <section class="content">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Crear Administrador</h3>
          </div>
          <?php if(count($errors) > 0): ?>
          <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            </div>
          <?php endif; ?>
          <div class="box-body">
          <form method="post" action="Registros">
            <?php echo csrf_field(); ?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input id="Nombre" class="form-control" type="text"name="Nombre" placeholder="Nombre de usuario" class="<?php $__errorArgs = ['Nombre', 'login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php if(isset($editar_usu)){
                      echo $editar_usu->NOMBRE_USER;
                    }?>">

                  </div>

                  <div class="form-group">
                    <label for="nombre">Correo:</label>
                    <input id="correo" class="form-control" type="email" name="correo" placeholder="Correo" class="<?php $__errorArgs = ['email', 'login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php if(isset($editar_usu)){
                      echo $editar_usu->EMAIL_USER;
                    }?>">
                  </div>

                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input id="password" class="form-control" type="password"name="password" placeholder="Contraseña" class="<?php $__errorArgs = ['password', 'login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <input type="hidden"name="id_usuario" value="<?php if(isset($id_usuario)){
                      echo $id_usuario;
                    } ?>" >
                  </div>
                    
                  <div class="form-group">
                    <label for="password">Tipo de usuario:</label>
                        <select class="form-control" name="Rol" id="Rol">
                            <option value="4">Administrador</option>
                            <option value="1">visitantes</option>
                        </select>
                  </div>
                  
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="registro" value="nuevo">
                <button class="btn btn-primary" >Guardar</button>
              </div>
            </form>
            <?php $__errorArgs = ['email', 'login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <?php $__errorArgs = ['password', 'login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <?php $__errorArgs = ['Nombre', 'login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

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

  <?php echo $__env->make('plantillas.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Compra-ventaActualizado\resources\views/Login/Registro.blade.php ENDPATH**/ ?>