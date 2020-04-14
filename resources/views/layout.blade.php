
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
                          <h5 class="content-header-title float-left pr-1 mb-0">Listado de Administradores</h5>
                          <div class="breadcrumb-wrapper col-12">
                              <ol class="breadcrumb p-0 mb-0">
                                  {{-- <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                  </li>
                                  <li class="breadcrumb-item active">Datatable
                                  </li> --}}
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="content-body">
              <div class="row">
                  {{-- <div class="col-12">
                      <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
                  </div> --}}
              </div>
              
              

              <!-- Complex headers table -->
              <section id="headers">
                  <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-header">
                                  <h4 class="card-title">Maneja los administradores en esta sección</h4>
                              </div>
                              <div class="card-content">
                                  <div class="card-body card-dashboard">
                                      
                                      <div class="table-responsive">
                                          <table class="table table-striped table-bordered complex-headers">
                                              <thead>
                                                  <tr>
                                                      <th rowspan="2" class="align-top">Nombre</th>
                                                      <th colspan="2">Datos</th>
                                                  </tr>
                                                  <tr>
                                                      <th>Correo electronico</th>
                                                      <th>Acciones.</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                @foreach ($usuarios as $item)
                                                <tr>
                                                  <td> {{$item->NOMBRE_USER}} </td>
                                                  <td> {{$item->EMAIL_USER}} </td>
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
                          </div>
                      </div>
                  </div>
              </section>
              <!--/ Complex headers table -->

              

             
          </div>
      </div>
  </div>
  <!-- END: Content-->
  

@include('plantillas.footer')