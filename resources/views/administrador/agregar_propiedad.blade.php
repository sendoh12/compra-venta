
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        @yield('title')
        

         <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10 col-md-offset-1">
         

          {{-- aca se agregan los datos de la propiedad --}}

          <!-- Horizontal Form -->
          <div class="box box-succes" style="">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Propiedad</h3>
            </div> 

            <hr style="border-top: 1px solid #3c8dbc;">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Pais*</label>

                  <div class="col-sm-10">
                    {{-- <input type="text" class="form-control" name="" id="Pais" placeholder=""> --}}
                    <select name="pais" id="" class="form-control">
                      <option value="" selected>Mexico</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="Estado" class="col-sm-2 control-label">Estado*</label>

                  <div class="col-sm-10">
                    <select name="estado" id="estados" class="form-control" onchange="MostrarMunicipios()">
                      @foreach ($estados as $item)
                        <option value=" {{$item->ESTADOS_ID}} "> {{$item->ESTADOS_NOMBRE}} </option>
                      @endforeach
                    </select>
                    
                    {{-- <input type="text" class="form-control" name="Estado" id="Estado" placeholder=""> --}}
                  </div>
                </div>


                {{-- <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="file"  id="inputPassword3" placeholder="Password">
                  </div>
                </div> --}}

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Municipio/Delegación*</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="Municipio" id="Municipio">
                      <option value="" id="Municipio" ></option>
                    </select>
                    {{-- <input type="text" id="Municipio" name="Municipio" /> --}}
                    {{-- <input type="text" class="form-control" name="Municipio" id="Municipio" placeholder=""> --}}
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Colonia*</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Colonia" id="Colonia" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Zona</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Zona" id="Zona" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Código postal*</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="CodigoPostal" id="CodigoPostal" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Calle*</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Calle" id="Calle" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Número exterior</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="NumeroExterior" id="NumeroExterior" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Número interior</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="NumeroInterior" id="NumeroInterior" placeholder="">
                  </div>
                </div><br><br><br>
                {{-- fin de agregar propiedad --}}



                {{-- aca empieza la de los datos generales de la propiedad --}}
                <div class="box-header with-border">
                  <h3 class="box-title">Generales</h3>
                </div> 

               <hr style="border-top: 1px solid #3c8dbc;">


               <div class="form-group">
                <label for="" class="col-sm-2 control-label">Tipo*</label>

                <div class="col-sm-10">
                  <select class="form-control" name="tipo" id="tipo" onchange="Opciones()">
                    @foreach ($tipos as $item)
                      <option value="{{$item->TIPOS_NOMBRE}}"> {{$item->TIPOS_NOMBRE}} </option>
                    @endforeach
                    
                  </select>
                </div>
              </div>


              {{-- casas --}}
        <div id="casass" >
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Subtipo*</label>
                <div class="col-sm-10">
                  <select name="subtipo" id="subtipo" class="form-control">
                    <option value="Sola">Sola</option>
                    <option value="Condominio">Condominio</option>
                    <option value="Financiamiento">Financiamiento</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Operación*</label>
                <div class="col-sm-10">
                  <select name="operacion" id="operacion" class="form-control">
                    <option value="Venta">Venta</option>
                    <option value="Renta">Renta</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Precio*</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Precio" id="Precio" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Habitaciones*</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Habitaciones" id="Habitaciones" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Baños*</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Baños" id="Baños" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Terreno*</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Terreno" id="Terreno" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Construcción*</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Construcción" id="Construcción" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Condición construcción</label>
                <div class="col-sm-10">
                  <select name="Condición" id="Condición" class="form-control">
                    <option value="Buena">Buena</option>
                    <option value="Media">Media</option>
                    <option value="Mala">Mala</option>
                  </select>
                  {{-- <input type="text" class="form-control" name="Condición" id="Condición" placeholder=""> --}}
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Año de construcción</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Año" id="Año" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Niveles</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Niveles" id="Niveles" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Estacionamientos</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Estacionamientos" id="Estacionamientos" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Cuota de mantenimiento</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="cuota" id="cuota" placeholder="">
                </div>
              </div>
          </div>
          {{-- fin de casas --}}


          {{-- departamentos --}}
          <div id="departament" style="display:none">
            
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Operación*</label>
              <div class="col-sm-10">
                <select name="operacion" id="operacion" class="form-control">
                  <option value="Venta">Venta</option>
                  <option value="Renta">Renta</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Precio*</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Precio" id="Precio" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Habitaciones*</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Habitaciones" id="Habitaciones" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Baños*</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Baños" id="Baños" placeholder="">
              </div>
            </div>

            

            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Construcción*</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Construcción" id="Construcción" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Condición construcción</label>
              <div class="col-sm-10">
                <select name="Condición" id="Condición" class="form-control">
                  <option value="Buena">Buena</option>
                  <option value="Media">Media</option>
                  <option value="Mala">Mala</option>
                </select>
                {{-- <input type="text" class="form-control" name="Condición" id="Condición" placeholder=""> --}}
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Año de construcción</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Año" id="Año" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Niveles</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Niveles" id="Niveles" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Estacionamientos</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Estacionamientos" id="Estacionamientos" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Cuota de mantenimiento</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="cuota" id="cuota" placeholder="">
              </div>
            </div>
        </div>
        {{-- fin de departamentos --}}
              <br><br><br>
              {{-- aca terminan los datos generales de la propiedad --}}





              {{-- descripcion de la propiedad --}}
              <div class="box-header with-border">
                <h3 class="box-title">Descripcion</h3>
              </div> 

             <hr style="border-top: 1px solid #3c8dbc;">

             <div class="form-group">
                <label for="" class="col-sm-2 control-label">Descripción</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Descripción" id="Descripción" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Clave interna</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Clave" id="Clave" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Video</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Video" id="Video" placeholder="">
                </div>
              </div>
              <div id="mapid" style="width:600px; height:400px; position:relative; outline:none;" class="leaflet-container leaflet-fade-anim leaflet-grab leaflet-touch-drag" tabindex="0">
                  <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(173px, 104px, 0px);">
                    <div class="leaflet-pane leaflet-tile-pane">
                    <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                    <div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);">
                      <img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2046/1361?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(-200px, -347px, 0px); opacity: 1;">
                      <img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2047/1361?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(312px, -347px, 0px); opacity: 1;">
                      <img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2046/1362?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(-200px, 165px, 0px); opacity: 1;">
                      <img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2047/1362?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(312px, 165px, 0px); opacity: 1;">
                      </div>
                      </div>
                      </div>
                      <div class="leaflet-pane leaflet-shadow-pane">
                      </div>
                      <div class="leaflet-pane leaflet-overlay-pane">
                      </div><div class="leaflet-pane leaflet-marker-pane">
                      </div><div class="leaflet-pane leaflet-tooltip-pane">
                      </div><div class="leaflet-pane leaflet-popup-pane"></div>
                      <div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(1.04788e+06px, 697275px, 0px) scale(4096);">
                      </div>
                      </div>
              </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
                        </div>
          <!-- /.box -->

     
    </div>
  </section>
    <!-- /.content-header -->
  
</div>  
</div>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          @yield('content')

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
<script>
    

	var mymap = L.map('mapid').setView([51.505, -0.09], 13);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);


</script>
<script>

  $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  function MostrarMunicipios() {
    var valor = document.getElementById('estados').value;
    document.getElementById("Municipio").length=0;
    var Municipio = document.getElementById("Municipio");
    var element = [];
    var aTag = [];
    // console.log(valor);
        $.ajax({
            //async:true,
            cache:false,
            dataType:"json",
            type: 'POST',
            url:'AgregarMunicipio',
            data: {valor:valor},
            success:  function(response){
              // var arreglo = JSON.parse(response.mensaje);
              console.log(response.mensaje.length);
              j=0;
              for (let i = 0; i < response.mensaje.length; i++) {
                // var option = document.createElement("option");
                // option.innerHTML = response.mensaje[i].MUNICIPIOS_NOMBRE;
                // Municipio.appendChild(option);
                document.getElementById("Municipio").innerHTML += "<option value='"+response.mensaje[i].MUNICIPIOS_ID+"'>"
                                                                +response.mensaje[i].MUNICIPIOS_NOMBRE+"</option>";

              }
            
            },
            beforeSend:function(){},
            error:function(objXMLHttpRequest){}
        });

  }

  function Opciones() {
    var valor = document.getElementById('tipo').value;
    
    switch (valor) {
      case 'Casa':
          document.getElementById('casass').style.display = 'block';
          document.getElementById('departament').style.display = 'none';
      break;

      case 'Departamento':
      document.getElementById('departament').style.display = 'block';
        document.getElementById('casass').style.display = 'none';
      break;

      case 'Bodega':
        document.getElementById('casass').style.display = 'none';
        document.getElementById('departament').style.display = 'none';
      break;

      case 'Oficina':
        document.getElementById('casass').style.display = 'none';
        document.getElementById('departament').style.display = 'none';
      break;

      case 'Local':
        document.getElementById('casass').style.display = 'none';
        document.getElementById('departament').style.display = 'none';
      break;

      case 'Terreno':
        document.getElementById('casass').style.display = 'none';
        document.getElementById('departament').style.display = 'none';
      break;
    
      default:
        break;
    }

    

    

  }
</script>