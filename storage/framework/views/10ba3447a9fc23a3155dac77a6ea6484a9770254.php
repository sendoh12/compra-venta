
<?php echo $__env->make('plantillas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<body class="hold-transition login-page">


    <div class="login-box">
      <div class="login-logo">
        <a href="../index.php"><b>Grupo</b>Lacer</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Iniciar Sesion aquí</p>
    
        <form id="ingresar"  method="post" action="Session" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
          <div class="form-group has-feedback">
            <input id="email" class="form-control" type="email" name="email" placeholder="Correo" class="<?php $__errorArgs = ['email', 'login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

            
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input id="password" class="form-control" type="password"name="password" placeholder="Contraseña" class="<?php $__errorArgs = ['password', 'login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

            
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            
            <!-- /.col -->
            <div class="col-xs-12 ">
              <input type="hidden" name="login-admin" value="1">
              <button type="button" onclick="validar()" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
              

            </div>
            <!-- /.col -->
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
    
    
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <?php echo $__env->make('plantillas.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
      $.ajaxSetup({
          headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      function validar(){
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var bandera=0;
        console.log(email);

        if(email == null || email == '') {
          alertify.success("Te hace falta llenar el Correo, por favor");
        }else if(password == null || password == '') {
          alertify.success("Te hace falta llenar la contraseña, por favor");
        }else {

              $.ajax({
                //async:true,
                cache:false,
                dataType:"json",
                type: 'POST',
                url:'Session',
                data: {correo:email, password:password},
                success: function(response){
                  // var arreglo = JSON.parse(response.mensaje);
                  console.log(response.arreglo);

                  if(response.arreglo==1) {
                        swal(
                            'Correcto',
                            'Iniciando sesion...!',
                            'success'
                          )
                      setTimeout(function(){window.location.href='<?php echo e(route("home")); ?>'; }, 2000);
                  }else{
                        swal(
                              'Error!',
                              'Usuario o contraseña no registrados',
                              'error'
                            )
                  }
                
                },
                beforeSend:function(){},
                error:function(objXMLHttpRequest){}
            });

        }

        

        // if(email == null || email == '') {
        //   alertify.success("Te hace falta llenar el Correo, por favor");
        // }else if(password == null || password == '') {
        //   alertify.success("Te hace falta llenar la contraseña, por favor");
        // }else if(email != null && password != null) {
        //             swal(
        //                 'Correcto',
        //                 'Iniciando sesion...!',
        //                 'success'
        //               )
        //   setTimeout(function(){ document.getElementById('ingresar').submit(); }, 2000);
        // }else{
        //               swal(
        //                   'Error!',
        //                   'Hubo un error',
        //                   'error'
        //                 )
        // }
      }
    </script>
<?php /**PATH /home/grupola7/resources/views/Login/login.blade.php ENDPATH**/ ?>