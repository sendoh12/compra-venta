
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

    <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br><br><br>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Capturar propiedades
        <small></small>
      </h1>
      
    </section>
      <div class="container-fluid">
        

         <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-40 ">
          <div class="box">

          {{-- aca se agregan los datos de la propiedad --}}

          <!-- Horizontal Form -->
          <div class="box box-succes" style="">
            <div class="box-header with-border">
            <?php if (isset($id_propiedad)):?>
              <h3 class="box-title">Editar Propiedad</h3>
            <?php else: ?>
              <h3 class="box-title">Agregar Propiedad</h3>
            <?php endif ?>
            </div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                  </div>
            @endif
            <hr style="border-top: 1px solid #3c8dbc;">
            <!-- /.box-header -->
            <!-- form start -->
            <form id="CrearPropiedad" class="form-horizontal" method="POST" action="GuardarPropiedades" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <input type="hidden" name="Id_prepiedad" required value="<?php if(isset($id_propiedad)){
                  echo $id_propiedad;
                }
                ?>">
                <div class="form-group">
                  <label for="" class="col-sm-4 control-label">Nombre de propiedad*</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control"  name="propiedad" id="propiedad" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_NOMBRE;
                    } ?>">
                  </div>
                </div>


                <div class="form-group">
                  <label for="" class="col-sm-4 control-label">Pais*</label>

                  <div class="col-sm-6">
                    {{-- <input type="text" class="form-control" name="" id="Pais" placeholder=""> --}}
                    <select name="pais" id="pais" class="form-control" required>
                      <option value="Mexico" selected>Mexico</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="Estado" class="col-sm-4 control-label">Estado*</label>

                  <div class="col-sm-6">
                    <select name="estado" id="estados" class="form-control" required onchange="MostrarMunicipios()">
                      @foreach ($estados as $item)
                      <?php if(isset($editar)):?>
                          <?php if($item->ESTADOS_ID == $editar->PROPIEDADES_ESTADO): ?>
                            <option value=" {{$item->ESTADOS_ID}} " selected> {{$item->ESTADOS_NOMBRE}} </option>
                          <?php else:?>
                            <option value=" {{$item->ESTADOS_ID}} "> {{$item->ESTADOS_NOMBRE}} </option>
                          <?php endif?>
                      <?php else: ?>
                        <option value=" {{$item->ESTADOS_ID}} "> {{$item->ESTADOS_NOMBRE}} </option>
                      <?php endif?>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-4 control-label">Municipio/Delegación*</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="Municipio" required id="Municipio">

                      <?php if((isset($Municipio)) and (isset($editar))):?>
                        <?php foreach ($Municipio as $key => $value):?>
                          <?php if($value->MUNICIPIOS_ID == $editar->PROPIEDADES_MUNICIPIO):?>
                            <option value="<?=$value->MUNICIPIOS_ID?>" id=""  selected><?=$value->MUNICIPIOS_NOMBRE?></option>
                          <?php else:?>
                            <option value="<?=$value->MUNICIPIOS_ID?>" id=""  selected><?=$value->MUNICIPIOS_NOMBRE?></option>
                          <?php endif ?>
                        <?php endforeach?>
                      <?php endif?>
                      <option value="" id="" ></option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-4 control-label">Colonia*</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control"  name="Colonia" id="Colonia" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_COLONIA;
                    } ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-4 control-label">Zona</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="Zona"  id="Zona" placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_ZONA;
                    } ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-4 control-label">Código postal*</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control validar"  name="CodigoPostal" id="CodigoPostal" placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_CP;
                    } ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-4 control-label">Calle*</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"  name="Calle" id="Calle" placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_CALLE;
                    } ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-4 control-label">Número exterior</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control validar"  name="NumeroExterior" id="NumeroExterior" placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_EXTERIOR;
                    } ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-4 control-label">Número interior</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control validar"  name="NumeroInterior" id="NumeroInterior" placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_INTERIOR;
                    } ?>">
                  </div>
                </div>
                  <br><br><br>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Seleccionar Imagen</label>
                    <div class="col-sm-6">
                      <input type="file" class="" name="imagen" id="imagen" placeholder="" value="<?php if (isset($editar)) {
                        echo $editar->PROPIEDADES_IMAGEN;
                      } ?>">
                    </div>
                </div>
                <div class="form-group">
                <center><h1>Las coordenadas GPS</h1></center>
                    <div class="col-sm-4">
                      <label for="" class="col-sm-4 control-label">Latitud</label>
                      <input type="text" class=""  name="Latitud" id="Latitud" placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_LATITUD;
                    } ?>">
                    </div>
                    <div class="col-sm-4">
                      <label for="" class="control-label">Longitud</label>
                      <input type="text" class="" name="longitud"  id="longitud" placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_LONGITUD;
                    } ?>">
                    </div>
                    <div class="col-sm-4">
                      <button type="button" class="btn btn-secondary btn-lg" onclick="buscar();">Buscar</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                      <div id="mapid" style="width:1035px; height:400px; position:relative; outline:none;" class="leaflet-container leaflet-fade-anim leaflet-grab leaflet-touch-drag form-control" tabindex="0">
                        <div class="leaflet-pane leaflet-map-pane form-control" style="transform: translate3d(173px, 104px, 0px);">
                          
                            <div class="leaflet-pane leaflet-tile-pane form-control">
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
                <label for="" class="col-sm-4 control-label">Tipo*</label>

                <div class="col-sm-6">
                  <select class="form-control" name="tipo" id="tipo" onchange="Opciones()">
                    @foreach ($tipos as $item)
                      <option value="{{$item->TIPOS_NOMBRE}}">{{$item->TIPOS_NOMBRE}}</option>
                    @endforeach
                    
                  </select>
                </div>
              </div>


              {{-- casas --}}
              <div class="form-group " id="op1">
                <label for="" class="col-sm-4 control-label">Subtipo*</label>
                <div class="col-sm-6">
                  <select name="subtipo" id="subtipo"  class="form-control">
                    <option value="Sola">Sola</option>
                    <option value="Condominio">Condominio</option>
                    <option value="Financiamiento">Financiamiento</option>
                  </select>
                </div>
              </div>

              <div class="form-group " id="op2">
                <label for="" class="col-sm-4 control-label">Operación*</label>
                <div class="col-sm-6">
                  <select name="operacion" id="operacion"  class="form-control">
                    <option value="Venta">Venta</option>
                    <option value="Renta">Renta</option>
                  </select>
                </div>
              </div>

              <div class="form-group " id="op3">
                <label for="" class="col-sm-4 control-label">Precio</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control"  name="Precio" id="Precio" placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_PRECIO;
                    } ?>">
                </div>
              </div>

              <div class="form-group " id="op4">
                <label for="" class="col-sm-4 control-label">Habitaciones</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control validar" name="Habitaciones"  id="Habitaciones" placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_HABITACIONES;
                    } ?>">
                </div>
              </div>

              <div class="form-group " id="op5">
                <label for="" class="col-sm-4 control-label">Baños</label>
                
                <div class="col-sm-6">
                  <div class="input-group">
                    <input type="text" class="form-control validar" name="Baños"  id="Baños" placeholder="Baños Completos" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_BAÑOS;
                    } ?>">
                    <span class="input-group-addon">-</span>
                    {{-- MEDIOS BAÑOS --}}
                    <input type="text" class="form-control validar" name="MediosBaños"  id="MediosBaños" placeholder="Medios Baños" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_BAÑOS;
                    } ?>">
                  </div>
                </div>
              </div>

              

              <div class="form-group " id="op6">
                <label for="" class="col-sm-4 control-label">Terreno</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Terreno"  id="Terreno" placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_TERRENOS;
                    } ?>">
                </div>
              </div>

              <div class="form-group " id="op7">
                <label for="" class="col-sm-4 control-label">Construcción</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Construcción"  id="Construcción" placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_CONSTRUCCION;
                    } ?>">
                </div>
              </div>

              <div class="form-group " id="op8">
                <label for="" class="col-sm-4 control-label">Condición construcción</label>
                <div class="col-sm-6">
                  <select name="Condición" id="Condición"  class="form-control">
                    <option value="Buena">Buena</option>
                    <option value="Media">Media</option>
                    <option value="Mala">Mala</option>
                  </select>
                  {{-- <input type="text" class="form-control" name="Condición" id="Condición" placeholder=""> --}}
                </div>
              </div>

              <div class="form-group" id="op9">
                <label for="" class="col-sm-4 control-label">Año de construcción</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control validar" name="Año"  id="Año" placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_AÑO;
                    } ?>">
                </div>
              </div>

              <div class="form-group " id="op10">
                <label for="" class="col-sm-4 control-label">Niveles</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control validar" name="Niveles" id="Niveles"  placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_NIVELES;
                    } ?>">
                </div>
              </div>

              <div class="form-group " id="op11">
                <label for="" class="col-sm-4 control-label">Estacionamientos</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control validar" name="Estacionamientos"  id="Estacionamientos" placeholder=""value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_ESTACIONAMIENTO;
                    } ?>">
                </div>
              </div>

              <div class="form-group " id="op12">
                <label for="" class="col-sm-4 control-label">Cuota de mantenimiento</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="cuota" id="cuota"  placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_CUOTA;
                    } ?>">
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
                <label for="" class="col-sm-4 control-label">Descripción*</label>

                <div class="col-sm-6">
                  <textarea class="form-control" name="descripcion"  id="descripcion" cols="30" rows="5"><?php if (isset($editar)) {
                    echo $editar->PROPIEDADES_DESCRIPCION;
                  } ?></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Clave interna*</label>

                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Clave" id="Clave"  placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_CLAVE;
                    } ?>">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Video</label>

                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Video" id="Video" placeholder="" value="<?php if (isset($editar)) {
                      echo $editar->PROPIEDADES_VIDEO;
                    } ?>">
                </div>
              </div>


              
              <!-- /.box-body -->
              <div class="box-footer" align="right">
                {{-- <button type="submit" class="btn btn-default">Cancel</button> --}}
                <button type="button" onclick="validaciones()" class="btn btn-info ">Guardar Cambios</button>
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
{{-- validar campos --}}
<script>
  function validaciones() {
    var propiedad = document.getElementById('propiedad').value;
    var Colonia = document.getElementById('Colonia').value;
    var Zona = document.getElementById('Zona').value;
    var CodigoPostal = document.getElementById('CodigoPostal').value;
    var Calle = document.getElementById('Calle').value;
    var NumeroExterior = document.getElementById('NumeroExterior').value;
    var NumeroInterior = document.getElementById('NumeroInterior').value;
    var imagen = document.getElementById('imagen').value;
    var Latitud = document.getElementById('Latitud').value;
    var longitud = document.getElementById('longitud').value;
    var descripcion = document.getElementById('descripcion').value;
    var Clave = document.getElementById('Clave').value;
    
    if(propiedad == null || propiedad == '') {
      alertify.success("te hace falta llenar Nombre de propiedad, por favor");

    }else if(Colonia == null || Colonia == '') {
      alertify.success("te hace falta llenar Colonia, por favor");
    }else if(Zona == null || Zona == '') {
      alertify.success("te hace falta llenar Zona, por favor");
    }else if(CodigoPostal == null || CodigoPostal == '') {
      alertify.success("te hace falta llenar Codigo Postal, por favor");
    }else if(Calle == null || Calle == '') {
      alertify.success("te hace falta llenar Calle, por favor");
    }else if(NumeroExterior == null || NumeroExterior == '') {
      alertify.success("te hace falta llenar Numero Exterior, por favor");
    }else if(NumeroInterior == null || NumeroInterior == '') {
      alertify.success("te hace falta llenar Numero Interior, por favor");
    // }else if(imagen == null || imagen == '') {
    //   alertify.success("te hace falta insertar la imagen, por favor");
    // }else if(Latitud == null || Latitud == '') {
    //   alertify.success("te hace falta llenar Latitud de la ubicacion, por favor");
    // }else if(longitud == null || longitud == '') {
    //   alertify.success("te hace falta llenar Longitud de la ubicacion, por favor");
    }else if(descripcion == null || descripcion == '') {
      alertify.success("te hace falta llenar la descripcion, por favor");
    }else if(Clave == null || Clave == '') {
      alertify.success("te hace falta llenar el campo clave, por favor");
    }else {
        document.getElementById('CrearPropiedad').submit();
    }
  }

  function validarNumeros(evt){

    var iKeyCode = (evt.which) ? evt.which : evt.keyCode;
    if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57) && (iKeyCode < 96 || iKeyCode > 105))
    {
      evt.preventDefault();
      evt.stopPropagation();
    //  return false;
    }else{
        return true;
    }
    }
    $(document).ready(function () {

    $(".validar").on("keydown", function(evt){
      console.log(evt);
      let iKeyCode = (evt.which) ? evt.which : evt.keyCode;
      console.log(iKeyCode);
      if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57) && (iKeyCode < 96 || iKeyCode > 105))
      {
        console.log('no es numero');
        return false;
      }
      return true;
    });  
 });
</script>

<script>
<?php if(isset($editar)):
          if(($editar->PROPIEDADES_LATITUD != null) && ($editar->PROPIEDADES_LONGITUD != null)):?>
                var mymap = L.map('mapid').setView([<?=$editar->PROPIEDADES_LATITUD?>, <?=$editar->PROPIEDADES_LONGITUD?>], 13);
          <?php else:?>
            var mymap = L.map('mapid').setView([19.0412894, -98.2062013], 13);
          <?php endif?>
<?php else:?>
  var mymap = L.map('mapid').setView([19.0412894, -98.2062013], 13);
<?php endif?>
	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);
  <?php if(isset($editar)):
          if(($editar->PROPIEDADES_LATITUD != null) && ($editar->PROPIEDADES_LONGITUD != null)):?>
                L.marker([<?=$editar->PROPIEDADES_LATITUD?>, <?=$editar->PROPIEDADES_LONGITUD?>]).addTo(mymap);
          <?php else:?>
            L.marker([19.0412894,-98.2062013]).addTo(mymap);
          <?php endif?>
<?php else:?>
  L.marker([19.0412894,-98.2062013]).addTo(mymap);
<?php endif?>
  
</script>
<script>
function buscar() {
  var latitud = document.getElementById('Latitud').value;
  var longitud = document.getElementById('longitud').value;
  //console.log("ola");
  document.getElementById('mapid').innerHTML = "<div id='map' style='width: 100%; height: 100%;'></div>";
    var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    osmAttribution = 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors,' +
                        ' <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
    osmLayer = new L.TileLayer(osmUrl, {maxZoom: 18, attribution: osmAttribution});
    var map = new L.Map('map');
    map.setView(new L.LatLng(latitud,longitud), 13 );
    map.addLayer(osmLayer);
    var marker=L.marker([latitud,longitud]);
    marker.bindPopup('<p>Latitud:'+latitud+'</p><p>Longitud:'+longitud+'</p>');
	  marker.addTo(map);
    var validatorsLayer = new OsmJs.Weather.LeafletLayer({lang: 'es'});
    map.addLayer(validatorsLayer);
    map.addLayer(posision);
}
</script>
<script>
      $(document).ready(function() {
        var costan="";
        <?php if (isset($editar)):?>
                    costan='<?=$editar->PROPIEDADES_DESCRIPCION?>';
                    document.getElementById("descripcion").value = costan;
          <?php endif ?>
          // console.log(costan);
                });

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
              // console.log(response.mensaje.length);
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