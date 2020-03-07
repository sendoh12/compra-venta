
@include('plantillas.header')
@include('plantillas.menu')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Listado de Propiedades
        <small></small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja las propiedades en esta sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Propiedades</th>
                  {{-- <th>Nombre</th>
                  <th>Acciones</th> --}}
                </tr>
                </thead>
                <tbody>
                    @foreach ($propiedades as $item)
                        <tr>
                            <td> 
                                <div class="row ">
                                    <div class="col-md-16">
                                        <div class="card col-md-3" >
                                            <img class="card-img-top " style="width:200px; height:100px;"  src="images/{{$item->PROPIEDADES_IMAGEN}}" alt="">
                                        </div>  
                                        <div class="col-md-6">
                                            {{$item->PROPIEDADES_NOMBRE}} <br>
                                            {{'Precio'.$item->PROPIEDADES_PRECIO}}
                                        </div>
                                        <div class="col-md-3">
                                            <a href="" class="btn bg-orange btn-flat margin">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <a href="#" data-id="" data-tipo="admin" class="btn bg-maroon btn-flat margin borrar_registro">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <a href="/mapas/<?=base64_encode($item->PROPIEDADES_ID)?>/<?=base64_encode($item->PROPIEDADES_LATITUD)?>/<?=base64_encode($item->PROPIEDADES_LONGITUD)?>" class ="btn bg-orange btn-flat margin">mapa </a>
                                        </div>
                                    </div>
                                    
                                </div>
                                   
                            </td>
                        </tr>

                        
                    @endforeach
                    
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
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

<script>

  $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
</script>


  