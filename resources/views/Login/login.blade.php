
@include('plantillas.header')
{{-- @include('plantillas.menu') --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

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
                                                      <input id="email" class="form-control" type="email" name="email" placeholder="Correo" class="@error('email', 'login') is-invalid @enderror">

                                                    </div>
                                                  <div class="form-group">
                                                      <label class="text-bold-600" for="exampleInputPassword1">Contraseña</label>
                                                      <input id="password" class="form-control" type="password"name="password" placeholder="Contraseña" class="@error('password', 'login') is-invalid @enderror">
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
                                                  {{-- <button type="button" onclick="validar()" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button> --}}
                                                  <button type="button" onclick="validar()" class="btn btn-primary glow w-100 position-relative">Login<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                              </form>
                                              @error('email', 'login')
                                              <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                              @error('password', 'login')
                                              <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                              <hr>
                                              <div class="text-center"><small class="mr-25">Don't have an account?</small><a href="auth-register.html"><small>Sign up</small></a></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- right section image -->
                              <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                  <div class="card-content">
                                      <img class="img-fluid" src="{{asset('frest-full/images/pages/register.png')}} " alt="branding logo">
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



@include('plantillas.footer')

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
                      setTimeout(function(){window.location.href='{{route("home")}}'; }, 2000);
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
