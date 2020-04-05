@include('plantillas.header')
@include('plantillas.menu')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <br><br><br>
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
          @if(count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
          @endif
          <div class="box-body">
          <form id="CrearUsuario" method="post" action="Registros">
            @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input id="Nombre" class="form-control" type="text"name="Nombre" placeholder="Nombre de usuario" class="@error('Nombre', 'login') is-invalid @enderror" value="<?php if(isset($editar_usu)){
                      echo $editar_usu->NOMBRE_USER;
                    }?>">

                  </div>

                  <div class="form-group">
                    <label for="nombre">Correo:</label>
                    <input id="correo" class="form-control" type="email" name="correo" placeholder="Correo" class="@error('email', 'login') is-invalid @enderror" value="<?php if(isset($editar_usu)){
                      echo $editar_usu->EMAIL_USER;
                    }?>">
                  </div>

                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input id="password" class="form-control" type="password"name="password" placeholder="Contraseña" class="@error('password', 'login') is-invalid @enderror">
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
                <button type="button" onclick="validar()" class="btn btn-info ">Guardar</button>
                {{-- <button onclick="validar()" class="btn btn-primary" >Guardar</button> --}}
              </div>
            </form>
            @error('email', 'login')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('password', 'login')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('Nombre', 'login')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

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

  @include('plantillas.footer')

  <script>
    var myVar;
    $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
     function validar(){
      var Nombre = document.getElementById('Nombre').value;
      var correo = document.getElementById('correo').value;
      var password = document.getElementById('password').value;

      if(Nombre == null || Nombre == '') {
      alertify.success("te hace falta llenar el Nombre, por favor");
      }else if(correo == null || correo == '') {
        alertify.success("te hace falta llenar el correo, por favor");
      }else if(password == null || password == '') {
        alertify.success("te hace falta llenar la contraseña, por favor");
      }else if(Nombre != null && correo != null && password != null) {
                    swal(
                        'Correcto',
                        'Guardando administrador...!',
                        'success'
                      )
        setTimeout(function(){ document.getElementById('CrearUsuario').submit(); }, 2000);
      }else{
                    swal(
                        'Error!',
                        'Hubo un error',
                        'error'
                      )
      }
      
     
      

    }

    $('#CrearUsuario').on('button', function(e){
        e.preventDefault();

        var datos = $(this).serializeArray();
        console.log(datos);

        //crear el llamado a ajax
        // $.ajax({
        //     //metodo que esta en el fomulario
        //     type: $(this).attr('method'),
        //     url: $(this).attr('action'),
        //     data: datos,
        //     dataType: 'json',
        //     success: function (data) {
        //         console.log(data);
        //         var resultado = data;
        //         if(resultado.respuesta == 'exito'){
        //             swal(
        //                 'Correcto',
        //                 'Se guardo correctamente!',
        //                 'success'
        //               )
        //         }else{
        //             swal(
        //                 'Error!',
        //                 'Hubo un error',
        //                 'error'
        //               )
        //         }
        //     }
        // });
    });
    
  </script>
