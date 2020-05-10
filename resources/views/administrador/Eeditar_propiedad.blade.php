@include('plantillas.header')
@include('plantillas.menu')
<meta Name="csrf-token" content="{{csrf_token()}}">

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
    <br><br><br>
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
              <h3 class="box-title">Editar Propiedad</h3>
            
            </div> 
                
            <hr style="border-top: 1px solid #3c8dbc;">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="GuardarPropiedades" enctype="multipart/form-data">
              @csrf
              <div class="box-body">

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Nombre de propiedad*</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="propiedad" id="propiedad" value="<?php if (isset($editar)) {echo $editar->PROPIEDADES_NOMBRE;}?>" >
                  </div>
                </div>


                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Pais*</label>

                  <div class="col-sm-6">
                    {{-- <input type="text" class="form-control" name="" id="Pais" placeholder=""> --}}
                    <select name="pais" id="pais" class="form-control">
                      <option value="" selected>Mexico</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="Estado" class="col-sm-3 control-label">Estado*</label>

                  <div class="col-sm-6">
                    <select name="estado" id="estados" class="form-control" onchange="mostra()">
                      @foreach ($estados as $item)
                            <option value=" {{$item->ESTADOS_ID}} "> {{$item->ESTADOS_NOMBRE}} </option>
                      @endforeach
                    </select>
                    
                   
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Municipio/Delegación*</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="Municipio" id="Municipio">
                      <option value="" id="" ></option>
                    </select>
                    {{-- <input type="text" id="Municipio" name="Municipio" /> --}}
                    {{-- <input type="text" class="form-control" name="Municipio" id="Municipio" placeholder=""> --}}
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Colonia*</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="Colonia" id="Colonia" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Zona</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="Zona" id="Zona" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Código postal*</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="CodigoPostal" id="CodigoPostal" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Calle*</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="Calle" id="Calle" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Número exterior</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="NumeroExterior" id="NumeroExterior" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Número interior</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="NumeroInterior" id="NumeroInterior" placeholder="">
                  </div>
                </div>
                  <br><br><br>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Seleccionar Imagen</label>
                    <div class="col-sm-6">
                      <input type="file" class="" name="imagen" id="imagen" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                      <center><h1>Las coordenadas GPS</h1></center>
                    <div class="col-sm-4">
                      <label for="" class="col-sm-3 control-label">Latitud</label>
                      <input type="text" class="" name="Latitud" id="Latitud" placeholder="">
                    </div>
                    <div class="col-sm-4">
                      <label for="" class="control-label">Longitud</label>
                      <input type="text" class="" name="longitud" id="longitud" placeholder="">
                    </div>
                    <div class="col-sm-4">
                      <button type="button" class="btn btn-secondary btn-lg" onclick="buscar();">Buscar</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                      <div id="mapid" style="width:830px; height:400px; position:relative; outline:none;" class="leaflet-container leaflet-fade-anim leaflet-grab leaflet-touch-drag" tabindex="0">
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
                              <div class="leaflet-pane leaflet-shadow-pane"></div>
                              <div class="leaflet-pane leaflet-overlay-pane"></div>
                              <div class="leaflet-pane leaflet-marker-pane"></div>
                              <div class="leaflet-pane leaflet-tooltip-pane"></div>
                              <div class="leaflet-pane leaflet-popup-pane"></div>
                                <div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(1.04788e+06px, 697275px, 0px) scale(4096);"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                <br><br><br>
                {{-- fin de agregar propiedad --}}



                {{-- aca empieza la de los datos generales de la propiedad --}}
                <div class="box-header with-border">
                  <h3 class="box-title">Generales</h3>
                </div> 

               <hr style="border-top: 1px solid #3c8dbc;">


               <div class="form-group">
                <label for="" class="col-sm-3 control-label">Tipo*</label>

                <div class="col-sm-6">
                  <select class="form-control" name="tipo" id="tipo" onchange="Opciones()">
                    @foreach ($tipos as $item)
                      <option value="{{$item->TIPOS_NOMBRE}}"> {{$item->TIPOS_NOMBRE}} </option>
                    @endforeach
                    
                  </select>
                </div>
              </div>


              {{-- casas --}}
              <div class="form-group " id="op1">
                <label for="" class="col-sm-3 control-label">Subtipo*</label>
                <div class="col-sm-6">
                  <select name="subtipo" id="subtipo" class="form-control">
                    <option value="Sola">Sola</option>
                    <option value="Condominio">Condominio</option>
                    <option value="Financiamiento">Financiamiento</option>
                  </select>
                </div>
              </div>

              <div class="form-group " id="op2">
                <label for="" class="col-sm-3 control-label">Operación*</label>
                <div class="col-sm-6">
                  <select name="operacion" id="operacion" class="form-control">
                    <option value="Venta">Venta</option>
                    <option value="Renta">Renta</option>
                  </select>
                </div>
              </div>

              <div class="form-group " id="op3">
                <label for="" class="col-sm-3 control-label">Precio*</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Precio" id="Precio" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op4">
                <label for="" class="col-sm-3 control-label">Habitaciones*</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Habitaciones" id="Habitaciones" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op5">
                <label for="" class="col-sm-3 control-label">Baños*</label>
                
                <div class="col-sm-6">
                  <div class="input-group">
                    <input type="text" class="form-control" name="Baños" id="Baños" placeholder="Baños Completos">
                    <span class="input-group-addon">-</span>
                    {{-- MEDIOS BAÑOS --}}
                    <input type="text" class="form-control" name="MediosBaños" id="MediosBaños" placeholder="Medios Baños">
                  </div>
                </div>
              </div>

              

              <div class="form-group " id="op6">
                <label for="" class="col-sm-3 control-label">Terreno*</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Terreno" id="Terreno" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op7">
                <label for="" class="col-sm-3 control-label">Construcción*</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Construcción" id="Construcción" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op8">
                <label for="" class="col-sm-3 control-label">Condición construcción</label>
                <div class="col-sm-6">
                  <select name="Condición" id="Condición" class="form-control">
                    <option value="Buena">Buena</option>
                    <option value="Media">Media</option>
                    <option value="Mala">Mala</option>
                  </select>
                  {{-- <input type="text" class="form-control" name="Condición" id="Condición" placeholder=""> --}}
                </div>
              </div>

              <div class="form-group" id="op9">
                <label for="" class="col-sm-3 control-label">Año de construcción</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Año" id="Año" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op10">
                <label for="" class="col-sm-3 control-label">Niveles</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Niveles" id="Niveles" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op11">
                <label for="" class="col-sm-3 control-label">Estacionamientos</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Estacionamientos" id="Estacionamientos" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op12">
                <label for="" class="col-sm-3 control-label">Cuota de mantenimiento</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="cuota" id="cuota" placeholder="">
                </div>
              </div>
          {{-- fin de casas --}}


          
              <br><br><br>
              {{-- aca terminan los datos generales de la propiedad --}}





              {{-- descripcion de la propiedad --}}
              <div class="box-header with-border">
                <h3 class="box-title">Descripcion</h3>
              </div> 

             <hr style="border-top: 1px solid #3c8dbc;">

             <div class="form-group">
                <label for="" class="col-sm-3 control-label">Descripción</label>

                <div class="col-sm-6">
                  <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
                  {{-- <input type="text" class="form-control" name="Descripción" id="Descripción" placeholder=""> --}}
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Clave interna</label>

                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Clave" id="Clave" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Video</label>

                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Video" id="Video" placeholder="">
                </div>
              </div>


              
              <!-- /.box-body -->
              <div class="box-footer">
                {{-- <button type="submit" class="btn btn-default">Cancel</button> --}}
                <button type="submit" class="btn btn-info pull-right">Guardar Cambios</button>
              </div>
              <!-- /.box-footer -->
            </form>
          {{-- </div> --}}
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
    

	var mymap = L.map('mapid').setView([19.0412894, -98.2062013], 13);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);
  L.marker([19.0412894,-98.2062013]).addTo(mymap);
</script>
<script>
function buscar() {
  var latitud = document.getElementById('Latitud').value;
  var longitud = document.getElementById('longitud').value;
  console.log("ola");
  document.getElementById('mapid').innerHTML = "<div id='map' style='width: 100%; height: 100%;'></div>";
    var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                    osmAttribution = 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors,' +
                        ' <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
     osmLayer = new L.TileLayer(osmUrl, {maxZoom: 18, attribution: osmAttribution});
    var map = new L.Map('map');
    map.setView(new L.LatLng(latitud,longitud), 13 );
   var posision=L.marker([latitud,longitud])
    map.addLayer(osmLayer);
    var validatorsLayer = new OsmJs.Weather.LeafletLayer({lang: 'es'});
    map.addLayer(validatorsLayer);
    map.addLayer(posision);
}
</script>
<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  function mostra() {
    var valor = document.getElementById('estados').value;
    //console.log(valor);
    document.getElementById("Municipio").length=0;

    // console.log(valor);
        $.ajax({
            dataType:"json",
            type: 'POST',
            url:'AgregarMunicipio',
            data: {valor:valor},
            success:  function(response){
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
          // Subtipo
          document.getElementById('op1').style.display = 'block';
          // Operación
          document.getElementById('op2').style.display = 'block';
          // Precio
          document.getElementById('op3').style.display = 'block';
          // Habitaciones
          document.getElementById('op4').style.display = 'block';
          // Baños
          document.getElementById('op5').style.display = 'block';
          // Terreno
          document.getElementById('op6').style.display = 'block';
          // Construcción
          document.getElementById('op7').style.display = 'block';
          // Condición construcción
          document.getElementById('op8').style.display = 'block';
          // Año de construcción
          document.getElementById('op9').style.display = 'block';
          // Niveles
          document.getElementById('op10').style.display = 'block';
          // Estacionamientos
          document.getElementById('op11').style.display = 'block';
          // Cuota de mantenimiento
          document.getElementById('op12').style.display = 'block';
      break;

      case 'Bodega':
          // Subtipo
          document.getElementById('op1').style.display = 'none';
          // Operación
          document.getElementById('op2').style.display = 'block';
          // Precio
          document.getElementById('op3').style.display = 'block';
          // Habitaciones
          document.getElementById('op4').style.display = 'block';
          // Baños
          document.getElementById('op5').style.display = 'block';
          // Terreno
          document.getElementById('op6').style.display = 'block';
          // Construcción
          document.getElementById('op7').style.display = 'block';
          // Condición construcción
          document.getElementById('op8').style.display = 'block';
          // Año de construcción
          document.getElementById('op9').style.display = 'block';
          // Niveles
          document.getElementById('op10').style.display = 'block';
          // Estacionamientos
          document.getElementById('op11').style.display = 'block';
          // Cuota de mantenimiento
          document.getElementById('op12').style.display = 'block';
      break;

      case 'Departamento':
          // Subtipo
          document.getElementById('op1').style.display = 'none';
          // Operación
          document.getElementById('op2').style.display = 'block';
          // Precio
          document.getElementById('op3').style.display = 'block';
          // Habitaciones
          document.getElementById('op4').style.display = 'block';
          // Baños
          document.getElementById('op5').style.display = 'block';
          // Terreno
          document.getElementById('op6').style.display = 'none';
          // Construcción
          document.getElementById('op7').style.display = 'block';
          // Condición construcción
          document.getElementById('op8').style.display = 'block';
          // Año de construcción
          document.getElementById('op9').style.display = 'block';
          // Niveles
          document.getElementById('op10').style.display = 'block';
          // Estacionamientos
          document.getElementById('op11').style.display = 'block';
          // Cuota de mantenimiento
          document.getElementById('op12').style.display = 'block';
      break;

      case 'Oficina':
          // Subtipo
          document.getElementById('op1').style.display = 'none';
          // Operación
          document.getElementById('op2').style.display = 'block';
          // Precio
          document.getElementById('op3').style.display = 'block';
          // Habitaciones
          document.getElementById('op4').style.display = 'block';
          // Baños
          document.getElementById('op5').style.display = 'block';
          // Terreno
          document.getElementById('op6').style.display = 'block';
          // Construcción
          document.getElementById('op7').style.display = 'block';
          // Condición construcción
          document.getElementById('op8').style.display = 'block';
          // Año de construcción
          document.getElementById('op9').style.display = 'block';
          // Niveles
          document.getElementById('op10').style.display = 'block';
          // Estacionamientos
          document.getElementById('op11').style.display = 'block';
          // Cuota de mantenimiento
          document.getElementById('op12').style.display = 'block';
      break;

      case 'Local':
          // Subtipo
          document.getElementById('op1').style.display = 'block';
          // Operación
          document.getElementById('op2').style.display = 'block';
          // Precio
          document.getElementById('op3').style.display = 'block';
          // Habitaciones
          document.getElementById('op4').style.display = 'block';
          // Baños
          document.getElementById('op5').style.display = 'block';
          // Terreno
          document.getElementById('op6').style.display = 'block';
          // Construcción
          document.getElementById('op7').style.display = 'block';
          // Condición construcción
          document.getElementById('op8').style.display = 'block';
          // Año de construcción
          document.getElementById('op9').style.display = 'block';
          // Niveles
          document.getElementById('op10').style.display = 'block';
          // Estacionamientos
          document.getElementById('op11').style.display = 'block';
          // Cuota de mantenimiento
          document.getElementById('op12').style.display = 'block';
      break;

      case 'Terreno':
          // Subtipo
          document.getElementById('op1').style.display = 'none';
          // Operación
          document.getElementById('op2').style.display = 'block';
          // Precio
          document.getElementById('op3').style.display = 'block';
          // Habitaciones
          document.getElementById('op4').style.display = 'none';
          // Baños
          document.getElementById('op5').style.display = 'none';
          // Terreno
          document.getElementById('op6').style.display = 'block';
          // Construcción
          document.getElementById('op7').style.display = 'none';
          // Condición construcción
          document.getElementById('op8').style.display = 'none';
          // Año de construcción
          document.getElementById('op9').style.display = 'none';
          // Niveles
          document.getElementById('op10').style.display = 'none';
          // Estacionamientos
          document.getElementById('op11').style.display = 'none';
          // Cuota de mantenimiento
          document.getElementById('op12').style.display = 'none';
      break;
      default:
        break;
    }

  }
</script>