
@include('plantillas.header')
@include('plantillas.menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        {{-- @yield('title') --}}
        <div class="table-responsive">
          <div class="box-body">
            <table class="table table-bordered table-hover">
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
                        <a href="Eliminarusuario/<?=$item->ID_USER?>" class="btn btn-danger">Eliminar</a>
                        <form method="get" action="Editarusuario">
                            @csrf
                          <input type="hidden" name="usuario" value="<?=$item->ID_USER?>">
                          <input type="submit" value="Editar" class="btn btn-secondary">
                        </form>
                       </td>
                    </tr>
                    
                @endforeach
              </tbody>
            </table>

          </div>

        </div>
      </div><!-- /.container-fluid -->
    </div>
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