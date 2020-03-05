@include('plantillas.header')
@include('plantillas.menu')




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
          <div class="box-body">
          <form method="post" action="Registros">
            @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    {{-- <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario"> --}}
                    <input id="Nombre" class="form-control" type="text"name="Nombre" placeholder="Nombre de usuario" class="@error('Nombre', 'login') is-invalid @enderror">

                  </div>

                  <div class="form-group">
                    <label for="nombre">Correo:</label>
                    {{-- <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Nombre Completo"> --}}
                    <input id="correo" class="form-control" type="email" name="correo" placeholder="Correo" class="@error('email', 'login') is-invalid @enderror">


                  </div>

                  <div class="form-group">
                    <label for="password">Password:</label>
                    {{-- <input type="password" class="form-control" id="password" name="password" placeholder="Password Para Iniciar Sesion"> --}}
                    <input id="password" class="form-control" type="password"name="password" placeholder="Contraseña" class="@error('password', 'login') is-invalid @enderror">

                    
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
                <button class="btn btn-primary" >Añadir</button>
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
