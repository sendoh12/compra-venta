
@include('plantillas.header')
@include('plantillas.menu')



    <meta name="csrf-token" content="{{ csrf_token() }}" />

    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br><br><br>
    <section class="content-header">
      <h1>
        Imagenes
        <small></small>
      </h1>
      
    </section>
      <div class="container-fluid">

        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-16">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Agregar imagenes a la propiedad</h3>
            </div>
        
            <form id="guardarimagenes" class="form-horizontal" action="{{route('InsertarImagenes',$id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-footer">

                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Nombre de la imagen</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Seleccionar Imagen</label>
                    <div class="col-sm-6">
                      <input type="file" class="" name="imagen" id="imagen" placeholder="" multiple>
                    </div>
                  </div>


                  <div class="box-footer" align="center">
                    {{-- <button type="submit" class="btn btn-default">Cancel</button> --}}
                    <input type="button" class="btn btn-info " onclick="Mostrarimagenes()" value="Guardar Cambios">
                    {{-- <button onchange="Mostrarimagenes()" type="submit" class="btn btn-info pull-right">Guardar Cambios</button> --}}
                  </div>
                </div>
              </form>

             
              
            </div>
        </div>
        </section>
      </div>
        
        
        

      
  
        </div>  
    </div>

    


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

  function Mostrarimagenes() {
    console.log('hol');

    document.getElementById('guardarimagenes').submit();
  }

</script>