
@include('plantillas.header')
@include('plantillas.menu')
<meta Name="csrf-token" content="{{csrf_token()}}">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
          <div class="content-header row">
              <div class="content-header-left col-12 mb-2 mt-1">
                  <div class="row breadcrumbs-top">
                      <div class="col-12">
                          <h5 class="content-header-title float-left pr-1 mb-0">Imagenes de la propiedad</h5>
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
                              </div>
                              <div class="card-content">
                                  <div class="card-body card-dashboard">
                                    <form action="guardaorden" method="post">
                                        @csrf
                                        <input class="btn btn-success" align="right" type="submit" value="Guardar">
                                        <br><br>
                                      <div class="table-responsive">
                                          <table class="table zero-configuration">
                                              <thead>
                                                  <tr>
                                                    <th>imagenes</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="sortable">
                                                @foreach ($imagenes as $item)
                                                <tr>
                                                    <td>
                                                        <div class="row ">
                                                                <div class="card col-md-2" >
                                                                    <img class="card-img-top " style="width:200px; height:120px;"  src="{{asset(Storage::url($item->IMAGENES_ARCHIVO))}}" alt="">
                                                                  </div>
                                                                  <div class="col-md-6" >
                                                                      
                                                                      <input type="hidden" id="id_imagen" value="{{$item->IMAGENES_ID}}">
                                                                      <input type="hidden" id="id_propiedad" value="{{$item->PROPIEDADES_ID}}">
                                                                      <input type="button" onclick="eliminar()" class="btn btn-primary" value="Eliminar">
                                                                  {{-- <a href="EliminarImagen/{{$item->IMAGENES_ID}}/{{$item->PROPIEDADES_ID}}" class="btn btn-primary">Eliminar</a> --}}
                                                                  </div>
                                                                    <input type="hidden" name="orden[]" value="<?=$item->IMAGENES_ID?>">
                                                                    
                                                                
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                                
                                               
                                              </tbody>
                                              
                                          </table>
                                      </div>
                                    </form>
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
    $( function() {
      $( "#sortable" ).sortable();
      $( "#sortable" ).disableSelection();
    } );
    </script>

<script>
    $.ajaxSetup({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  </script>

    <script>
        function eliminar() {
            var id_imagen = document.getElementById('id_imagen').value;
            var id_propiedad = document.getElementById('id_propiedad').value;
            // console.log(id_imagen);
            $.ajax({
                type: 'POST',
                url: "EliminarImagen",
                data: {id_imagen:id_imagen, id_propiedad:id_propiedad},
                dataType: 'json',
                    success: function (response) {
                        // console.log(response.bandera);
                        if(response.bandera==1) {
                                    swal(
                                        'Correcto',
                                        'Eliminando Imagen...!',
                                        'success'
                                    )
                            setTimeout(function(){ location.reload(true); }, 2000);
                        }else{
                                swal(
                                    'Error!',
                                    'Hubo un error',
                                    'error'
                                    )
                        }

                    },
                    beforeSend:function(){},
                    error:function(objXMLHttpRequest){}
                    
            });
        }
    </script>