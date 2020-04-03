
@include('plantillas.header')
@include('plantillas.menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br><br><br>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Listado de Contactos
        <small></small>
      </h1>
      
    </section>
      <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los contactos en esta seccion</h3>
            </div>
          <div class="box-body">
            <table class="table table-bordered ">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Telefono</th>
                  <th>Asunto</th>
                  <th>Mensaje</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($contactos as $item)
                    <tr>
                      <td> {{$item->ID_CONTACTO}} </td>
                      <td> {{$item->CONTACTO_NOMBRE}} </td>
                      <td> {{$item->CONTACTO_TELEFONO}} </td>
                      <td> {{$item->CONTACTO_ASUNTO}} </td>
                      <td> {{$item->CONTACTO_MENSAJE}} </td>
                      <td>
                        <div class="col-md-12">

                          <div class="col-md-3">
                            <a style="inline-block;" href="Eliminarcontacto/{{$item->ID_CONTACTO}}" class="btn btn-primary">Eliminar</a>
                          </div>
                          <div class="col-md-3">
                            
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