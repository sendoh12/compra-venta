
@include('plantillas.header')
@include('plantillas.menu')

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
                @foreach ($usuarios as $item)
                    <tr>
                      <td> {{$item->ID_USER}} </td>
                      <td> {{$item->NOMBRE_USER}} </td>
                      <td> {{$item->EMAIL_USER}} </td>
                      <td> {{$item->ROL_USERS}} </td>
                      <td>
                        <div class="col-md-12">

                          <div class="col-md-3">
                            <a style="inline-block;" href="Eliminarusuario/<?=$item->ID_USER?>" class="btn btn-primary">Eliminar</a>
                          </div>
                          <div class="col-md-3">
                            <form method="get" action="Editarusuario">
                                @csrf
                              <input  type="hidden" name="usuario" value="<?=$item->ID_USER?>">
                              <input style="inline-block;" type="submit" value="Editar" class="btn btn-primary">
                            </form>
                          </div>
                        </div>
                       </td>
                    </tr>
                    
                @endforeach
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
          {{-- @yield('content') --}}

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

  

@include('plantillas.footer')