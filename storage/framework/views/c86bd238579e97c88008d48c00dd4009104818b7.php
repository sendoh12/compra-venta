
<?php echo $__env->make('plantillas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<body class="vertical-layout vertical-menu-modern 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
  <!-- BEGIN: Content-->
  <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
          <div class="content-header row">
          </div>
          <div class="content-body">
              <!-- login page start -->
              <section id="auth-login" class="row flexbox-container">
                  <div class="col-xl-8 col-11">
                      <div class="card bg-authentication mb-0">
                          <div class="row m-0">
                              <!-- left section-login -->
                              <div class="col-md-6 col-12 px-0">
                                  <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                      <div class="card-header pb-1">
                                          <div class="card-title">
                                              <h4 class="text-center mb-2">GrupoLacer</h4>
                                          </div>
                                      </div>
                                      <div class="card-content">
                                          <div class="card-body">
                                              <div class="d-flex flex-md-row flex-column justify-content-around">
                                                  <a href="#" class="btn btn-social btn-google btn-block font-small-3 mr-md-1 mb-md-0 mb-1">
                                                      <i class="bx bxl-google font-medium-3"></i><span class="pl-50 d-block text-center">Google</span></a>
                                                  <a href="#" class="btn btn-social btn-block mt-0 btn-facebook font-small-3">
                                                      <i class="bx bxl-facebook-square font-medium-3"></i><span class="pl-50 d-block text-center">Facebook</span></a>
                                              </div>
                                              <div class="divider">
                                                  <div class="divider-text text-uppercase text-muted"><small>or login with
                                                          email</small>
                                                  </div>
                                              </div>
                                              <form id="ingresar"  method="post" action="Session" enctype="multipart/form-data">
                                                <div class="form-group mb-50">
                                                      <label class="text-bold-600" for="exampleInputEmail1">Correo electronico</label>
                                                      <input id="email" class="form-control" type="email" name="email" placeholder="Correo" class="<?php $__errorArgs = ['email', 'login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                                    </div>
                                                  <div class="form-group">
                                                      <label class="text-bold-600" for="exampleInputPassword1">Contraseña</label>
                                                      <input id="password" class="form-control" type="password"name="password" placeholder="Contraseña" class="<?php $__errorArgs = ['password', 'login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                    </div>
                                                  <div class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                                                      <div class="text-left">
                                                          <div class="checkbox checkbox-sm">
                                                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                              <label class="checkboxsmall" for="exampleCheck1"><small>Keep me logged
                                                                      in</small></label>
                                                          </div>
                                                      </div>
                                                      <div class="text-right"><a href="auth-forgot-password.html" class="card-link"><small>Forgot Password?</small></a></div>
                                                  </div>
                                                  <input type="hidden" name="login-admin" value="1">
                                                  
                                                  <button type="button" onclick="validar()" class="btn btn-primary glow w-100 position-relative">Login<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
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
                                              <hr>
                                              <div class="text-center"><small class="mr-25">Don't have an account?</small><a href="auth-register.html"><small>Sign up</small></a></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- right section image -->
                              <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                  <div class="card-content">
                                      <img class="img-fluid" src="<?php echo e(asset('frest-full/images/pages/register.png')); ?> " alt="branding logo">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- login page ends -->

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

      function validar(){
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var bandera=0;
        console.log(email);

        if(email == null || email == '') {
            swal(
                      'Campo vacio',
                      'Por favor ingresa tu correo electronico!',
                      'warning'
                   )
        }else if(password == null || password == '') {
            swal(
                      'Campo vacio',
                      'Por favor ingrese su contraseña!',
                      'warning'
                   )
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
                              'Usuario o contraseña incorrectos',
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
<?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/Login/login.blade.php ENDPATH**/ ?>