@include('plantillas.header')
@include('plantillas.menu')


 <!-- BEGIN: Content-->
 <div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
      <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
              <div class="row breadcrumbs-top">
                  <div class="col-12">
                      <h5 class="content-header-title float-left pr-1 mb-0">Crear Administrador</h5>
                      <div class="breadcrumb-wrapper col-12">
                          <ol class="breadcrumb p-0 mb-0">
                             
                          </ol>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="content-body">
          

        

          <!-- vertical Wizard start-->
          <section id="vertical-wizard">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Llena el formulario para crear un administrador</h4>
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
                  <div class="card-content">
                      <div class="card-body">
                          <form id="CrearUsuario" method="post" action="Registros" class="wizard-vertical">
                            @csrf
                            
                              
                              <!-- step 1 content -->
                              <fieldset class="pt-0">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <div class="form-group">
                                              <label for="firstName12">Nombre de Usuario</label>
                                              <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre de usuario" class="@error('Nombre', 'login') is-invalid @enderror" value="<?php if(isset($editar_usu)){
                                                echo $editar_usu->NOMBRE_USER;
                                              }?>">
                                              <small class="text-muted form-text">Por favor ingresa el nombre de usuario.</small>
                                          </div>
                                      </div>
                                      <div class="col-sm-12">
                                          <div class="form-group">
                                              <label for="lastName1">Ingresa Correo Electronico</label>
                                              <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo electronico"class="@error('email', 'login') is-invalid @enderror" value="<?php if(isset($editar_usu)){
                                                echo $editar_usu->EMAIL_USER;
                                              }?>">
                                              <small class="text-muted form-text">Por favor ingresa un correo electronico.</small>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <div class="form-group">
                                              <label for="emailAddress12">Contraseña</label>
                                              <input type="password" class="form-control" name="password" id="password" placeholder="Ingresar contraseña"class="@error('password', 'login') is-invalid @enderror">
                                              <input type="hidden"name="id_usuario" value="<?php if(isset($id_usuario)){
                                                echo $id_usuario;
                                              } ?>" >
                                              <small class="text-muted form-text">Por favor ingrese su contraseña.</small>
                                          </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label for="password">Tipo de usuario:</label>
                                              <select class="form-control" name="Rol" id="Rol">
                                                  <option value="4">Administrador</option>
                                                  <option value="1">visitantes</option>
                                              </select>
                                        </div>
                                      </div>
                                      <div align="right" class="box-footer">
                                        <input type="hidden" name="registro" value="nuevo">
                                        <button  type="button" onclick="validar()" class="btn btn-info ">Guardar</button>
                                        {{-- <button onclick="validar()" class="btn btn-primary" >Guardar</button> --}}
                                      </div>
                                  </div>
                              </fieldset>
                              <!-- step 1 content end-->
                              
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
                  </div>
              </div>
          </section>
          <!-- vertical Wizard end-->

      </div>
  </div>
</div>
<!-- END: Content-->



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
