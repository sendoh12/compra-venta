
@include('plantillas.header')
{{-- @include('plantillas.menu') --}}

<body class="hold-transition login-page">


    <div class="login-box">
      <div class="login-logo">
        <a href="../index.php"><b>Grupo</b>Lacer</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Iniciar Sesion aquí</p>
    
        <form id="ingresar"  method="post" action="Session">
            @csrf
          <div class="form-group has-feedback">
            <input id="email" class="form-control" type="email" name="email" placeholder="Correo" class="@error('email', 'login') is-invalid @enderror">

            {{-- <input type="text" class="form-control" name="usuario" placeholder="Usuario"> --}}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input id="password" class="form-control" type="password"name="password" placeholder="Contraseña" class="@error('password', 'login') is-invalid @enderror">

            {{-- <input type="password" class="form-control" name="password" placeholder="Password"> --}}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            
            <!-- /.col -->
            <div class="col-xs-12 ">
              <input type="hidden" name="login-admin" value="1">
              <button type="button" onclick="validar()" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
              {{-- <button class="btn btn-primary btn-block btn-flat" type="button" onclick="Registrar()">Registrarse</button> --}}

            </div>
            <!-- /.col -->
          </div>
        </form>

        @error('email', 'login')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('password', 'login')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    
    
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    @include('plantillas.footer')

    <script>
      function validar(){
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        if(email == null || email == '') {
          alertify.success("Te hace falta llenar el Correo, por favor");
        }else if(password == null || password == '') {
          alertify.success("Te hace falta llenar la contraseña, por favor");
        }else if(email != null && password != null) {
                    swal(
                        'Correcto',
                        'Iniciando sesion...!',
                        'success'
                      )
          setTimeout(function(){ document.getElementById('ingresar').submit(); }, 2000);
        }else{
                      swal(
                          'Error!',
                          'Hubo un error',
                          'error'
                        )
        }
      }
    </script>
