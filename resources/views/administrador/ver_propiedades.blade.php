
@include('plantillas.header')
@include('plantillas.menu')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <style>
      .dataTables_info {
          display:none;
      }
      .dataTables_paginate{
        display:none;
      }
      .dataTables_length{
        display:none;
      }
    </style>

   <!-- BEGIN: Content-->
   <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Listado de Propiedades</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
             
            </div>
            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              <form action="buscar" method="get" onsubmit="return showLoad()">
                                <div class="panel-body">
                                    <label class="label-control">Nombre de Propiedad</label>
                                    <input type="text" name="busqueda" class="form-control" placeholder="Ingresar nombre de la Propiedad" required="required">
                                </div>
                                <div class="panel-footer">
                                  <br>
                                    <button type="submit" class="btn btn-info">buscar</button>
                                </div>
                                </form>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    
                                    <div class="table-responsive">
                                      <div class="users">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                  <th>Propiedades</th>
                                                </tr>
                                            </thead>
                                            <tbody id="sortable">
                                              @foreach ($propiedades as $item)
                                              <tr>
                                                  <td> 
                                                      <div class="row ">
                                                              <div class="col-md-3" >
                                                                
                                                              <img class="card-img-top border" style="width:200px; height:150px;"  src="{{asset(Storage::url($item->PROPIEDADES_IMAGEN))}}" alt="">
                                                              </div>
                                                              <div class="col-md-6">
                                                                <h4><p>{{$item->PROPIEDADES_PRECIO.' MXN'}}</p></h4>  
                                                                <h4><p>{{$item->PROPIEDADES_TIPO.' en '.$item->PROPIEDADES_OPERACION}}</p></h4>
                                                                <p>{{$item->ESTADOS_NOMBRE.', '.$item->MUNICIPIOS_NOMBRE}}</p>
                                                                <p>{{$item->PROPIEDADES_COLONIA}}</p>
                                                                <p>{{$item->PROPIEDADES_ZONA}}</p> 
                      
                                                              </div>
                                                              <div class="row">
                                                                  {{-- <div class=" col-md-3"> --}}
                                                                    <form action="Editar" method="get">
                                                                      <input type="hidden" name="id_propiedad" value="<?=base64_encode($item->PROPIEDADES_ID)?>">
                                                                      <button  type="submit" class="btn bg-default btn-flat nav-link" data-toggle="tooltip" data-placement="top" title="Editar" ><i class="fas fa-pencil-alt"> </i></button>

                                                                    </form>
                                                                  {{-- </div> --}}
                                                                  
                                                              
                                                                  {{-- <div class=" col-md-3"> --}}
                                                                    <form action="VerImagenes" method="get">
                                                                    <input type="hidden" name="id_propiedade" value="<?=base64_encode($item->PROPIEDADES_ID)?>">
                                                                    <button  type="submit" class="btn bg-default btn-flat nav-link" data-toggle="tooltip" data-placement="top" title="Ver imagenes" ><i class="fas fa-image"> </i></button>
                                                                    </form>
                                                                  {{-- </div> --}}
                      
                                                                  {{-- <div class=" col-md-3"> --}}
                                                                    <form>
                                                                    <a href="AgregarImagenes/<?=base64_encode($item->PROPIEDADES_ID)?>" data-id="" data-toggle="tooltip" data-placement="top" title="Agregar imagenes" class="btn bg-default btn-flat  "> 
                                                                      <i  class="fas fa-plus-circle"></i>
                                                                    </a>
                                                                  </form>
                                                                  {{-- </div> --}}
                                                                  {{-- <div class=" col-md-3"> --}}
                                                                    <form>
                                                                        {{-- <a class="nav-link" href="Eliminar_propiedade/{{base64_encode($item->PROPIEDADES_ID)}}" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="ficon bx bx-edit"></i></a> --}}

                                                                        <a href="Eliminar_propiedade/{{base64_encode($item->PROPIEDADES_ID)}}"  data-toggle="tooltip" data-placement="top" title="Eliminar" class="nav-link btn bg-default btn-flat  " >
                                                                          <i  class="fa fa-trash-o"></i>
                                                                        </a>
                                                                      </form>
                                                                  {{-- </div> --}}
                                                                
                      
                                                              </div>
                                                          
                                                      </div>
                                                         
                                                  </td>
                                              </tr>
                      
                                              
                                          @endforeach
                                              
                                             
                                            </tbody>
                                            
                                        </table>
                                        <div align="center">
                                          {{$propiedades->links()}}
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Zero configuration table -->
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
  </script>
  <script>
    $(document).on("click", ".pagination a", function(e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        
        $.ajax({
          type: 'GET',
          url: "VerPropiedades",
          data: {page:page},
          dataType: 'json',
            success: function (response) {
              $('.users').html(response);
            }
        });


    });
    
  </script>