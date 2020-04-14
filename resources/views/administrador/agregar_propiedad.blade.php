
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

   <!-- BEGIN: Content-->
   <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Capturar propiedades</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
           

            <!-- Input Validation start -->
            <section class="input-validation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                              <?php if (isset($id_propiedad)):?>
                              <h4 class="card-title">Editar Propiedad</h4>
                              <?php else: ?>
                              <h4 class="card-title">Agregar Propiedad</h4>
                              <?php endif ?>
                              
                              @if(count($errors) > 0)
                                  <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    </div>
                              @endif
                                
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form id="CrearPropiedad" class="form-horizontal" method="POST" action="GuardarPropiedades" enctype="multipart/form-data"  novalidate>
                                      @csrf
                                        <div class="row">
                                          <input type="hidden" name="Id_prepiedad"  required value="<?php if(isset($id_propiedad)){
                                            echo $id_propiedad;
                                          }
                                          ?>" >
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nombre de la propiedad*</label>
                                                    <div class="controls">
                                                      <input type="text" class="form-control"   name="propiedad" id="propiedad" value="<?php if (isset($editar)) {
                                                        echo $editar->PROPIEDADES_NOMBRE;
                                                      } ?>">                                                    
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Pais*</label>
                                                    <div class="controls">
                                                      <select name="pais" id="pais" class="form-control" required>
                                                        <option value="Mexico" selected>Mexico</option>
                                                      </select>
                                                    </div>                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label>Estado*</label>
                                                    <div class="controls">
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
                                                      </select>                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Municipio/Delegación*</label>
                                                    <div class="controls">
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
                                                      </select>                                                      </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Colonia*</label>
                                                    <div class="controls">
                                                      <input type="text" class="form-control"  name="Colonia" id="Colonia" value="<?php if (isset($editar)) {
                                                        echo $editar->PROPIEDADES_COLONIA;
                                                      } ?>">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Zona</label>
                                                    <div class="controls">
                                                      <input type="text" class="form-control" name="Zona"  id="Zona" placeholder="" value="<?php if (isset($editar)) {
                                                        echo $editar->PROPIEDADES_ZONA;
                                                      } ?>">                                          
                                                      </div>
                                                </div>
                                                

                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Código postal*</label>
                                                    <div class="controls">
                                                      <input type="text" class="form-control validar"  name="CodigoPostal" id="CodigoPostal" placeholder="" value="<?php if (isset($editar)) {
                                                        echo $editar->PROPIEDADES_CP;
                                                      } ?>">                                                    
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Calle*</label>
                                                    <div class="controls">
                                                      <input type="text" class="form-control"  name="Calle" id="Calle" placeholder="" value="<?php if (isset($editar)) {
                                                        echo $editar->PROPIEDADES_CALLE;
                                                      } ?>">                                                    
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Número exterior</label>
                                                    <div class="controls">
                                                      <input type="text" class="form-control validar"  name="NumeroExterior" id="NumeroExterior" placeholder="" value="<?php if (isset($editar)) {
                                                        echo $editar->PROPIEDADES_EXTERIOR;
                                                      } ?>">                                                    
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Número interior</label>
                                                    <div class="controls">
                                                      <input type="text" class="form-control validar"  name="NumeroInterior" id="NumeroInterior" placeholder="" value="<?php if (isset($editar)) {
                                                        echo $editar->PROPIEDADES_INTERIOR;
                                                      } ?>">                                                    
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Seleccionar Imagen</label>
                                                    <div class="controls">
                                                      <input type="file" class="form-control" name="imagen" id="imagen" placeholder="" value="<?php if (isset($editar)) {
                                                        echo $editar->PROPIEDADES_IMAGEN;
                                                      } ?>">                                                    
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Input Validation end -->

            <!-- Multiple Rules Validation start -->
            <section class="multiple-validation">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 align="center" class="card-title">Coordenadas GPS</h4>
                              <button align="center" type="button" class="btn btn-primary" onclick="buscar();">Buscar</button>

                          </div>
                          
                          <div class="card-content">
                              <div class="card-body">
                                      <div class="row">
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label>Latitud</label>
                                              <div class="controls">
                                                <input type="text" class="form-control"  name="Latitud" id="Latitud" placeholder="" value="<?php if (isset($editar)) {
                                                  echo $editar->PROPIEDADES_LATITUD;
                                                } ?>">                                         
                                              </div>
                                          </div>
                                          </div>
                                          <div class="col-sm-6">
                                              <div class="form-group">
                                                <label>Longitud</label>
                                                <div class="controls">
                                                  <input type="text" class="form-control" name="longitud"  id="longitud" placeholder="" value="<?php if (isset($editar)) {
                                                    echo $editar->PROPIEDADES_LONGITUD;
                                                  } ?>">                                         
                                                </div>
                                              </div>
                                          </div>
                                          
                                          
                                        <br><br><br>

                                          <div class="form-group">
                                            <div class="col-sm-5">
                                              <div id="mapid" style="width:970px; height:400px; position:relative; outline:none;" class="leaflet-container leaflet-fade-anim leaflet-grab leaflet-touch-drag form-control" tabindex="0">
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
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- Multiple Rule Validation end -->

          <!-- Input Validation start -->
          <section class="input-validation">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Generales</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tipo*</label>
                                                <div class="controls">
                                                  <select class="form-control" name="tipo" id="tipo" onchange="Opciones()">
                                                    @foreach ($tipos as $item)
                                                      <option value="{{$item->TIPOS_NOMBRE}}">{{$item->TIPOS_NOMBRE}}</option>
                                                    @endforeach
                                                    
                                                  </select>                                                
                                                </div>
                                            </div>
                                            <div class="form-group " id="op1">
                                              <label>Subtipo*</label>
                                                <div class="controls">
                                                  <select name="subtipo" id="subtipo"  class="form-control">
                                                    <option value="Sola">Sola</option>
                                                    <option value="Condominio">Condominio</option>
                                                    <option value="Financiamiento">Financiamiento</option>
                                                  </select>                                                
                                                </div>
                                            </div>
                                            <div class="form-group " id="op2">
                                              <label>Operación*</label>
                                                <div class="controls">
                                                  <select name="operacion" id="operacion"  class="form-control">
                                                    <option value="Venta">Venta</option>
                                                    <option value="Renta">Renta</option>
                                                  </select>                                                
                                                </div>
                                            </div>
                                            <div class="form-group " id="op3">
                                              <label>Precio</label>
                                                <div class="controls">
                                                  <input type="text" class="form-control"  name="Precio" id="Precio" placeholder="" value="<?php if (isset($editar)) {
                                                    echo $editar->PROPIEDADES_PRECIO;
                                                  } ?>">                                                
                                                </div>
                                            </div>
                                            <div class="form-group " id="op4">
                                              <label>Habitaciones</label>
                                                <div class="controls">
                                                  <input type="text" class="form-control validar" name="Habitaciones"  id="Habitaciones" placeholder="" value="<?php if (isset($editar)) {
                                                    echo $editar->PROPIEDADES_HABITACIONES;
                                                  } ?>">                                                
                                                </div>
                                            </div>
                                            <div class="form-group " id="op5">
                                              <label>Baños</label>
                                                <div class="controls">
                                                  <div class="input-group">
                                                    <input type="text" class="form-control validar" name="Baños"  id="Baños" placeholder="Baños Completos" value="<?php if (isset($editar)) {
                                                      echo $editar->PROPIEDADES_BAÑOS;
                                                    } ?>">
                                                    <span class="input-group-addon"></span>
                                                    {{-- MEDIOS BAÑOS --}}
                                                    <input type="text" class="form-control validar" name="MediosBaños"  id="MediosBaños" placeholder="Medios Baños" value="<?php if (isset($editar)) {
                                                      echo $editar->PROPIEDADES_BAÑOS;
                                                    } ?>">
                                                  </div>                                             
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group " id="op6">
                                            <label>Terreno</label>
                                                <div class="controls">
                                                  <input type="text" class="form-control" name="Terreno"  id="Terreno" placeholder="" value="<?php if (isset($editar)) {
                                                    echo $editar->PROPIEDADES_TERRENOS;
                                                  } ?>">                                                
                                                </div>
                                            </div>
                                            <div class="form-group " id="op7">
                                              <label>Construcción</label>
                                                <div class="controls">
                                                  <input type="text" class="form-control" name="Construcción"  id="Construcción" placeholder="" value="<?php if (isset($editar)) {
                                                    echo $editar->PROPIEDADES_CONSTRUCCION;
                                                  } ?>">                                                
                                                </div>
                                            </div>
                                            <div class="form-group " id="op8">
                                              <label>Condición construcción</label>
                                                <div class="controls">
                                                  <select name="Condición" id="Condición"  class="form-control">
                                                    <option value="Buena">Buena</option>
                                                    <option value="Media">Media</option>
                                                    <option value="Mala">Mala</option>
                                                  </select>                                                
                                                </div>
                                            </div>
                                            <div class="form-group" id="op9">
                                              <label>Año de construcción</label>
                                                <div class="controls">
                                                  <input type="text" class="form-control validar" name="Año"  id="Año" placeholder="" value="<?php if (isset($editar)) {
                                                    echo $editar->PROPIEDADES_AÑO;
                                                  } ?>">                                                
                                                </div>
                                            </div>
                                            <div class="form-group " id="op10">
                                              <label>Niveles</label>
                                                <div class="controls">
                                                  <input type="text" class="form-control validar" name="Niveles" id="Niveles"  placeholder="" value="<?php if (isset($editar)) {
                                                    echo $editar->PROPIEDADES_NIVELES;
                                                  } ?>">                                                
                                                </div>
                                            </div>
                                            <div class="form-group " id="op11">
                                              <label>Estacionamientos</label>
                                                <div class="controls">
                                                  <input type="text" class="form-control validar" name="Estacionamientos"  id="Estacionamientos" placeholder=""value="<?php if (isset($editar)) {
                                                    echo $editar->PROPIEDADES_ESTACIONAMIENTO;
                                                  } ?>">                                                
                                                </div>
                                            </div>
                                            <div class="form-group " id="op12">
                                              <label>Cuota de mantenimiento</label>
                                              <div class="controls">
                                                <input type="text" class="form-control" name="cuota" id="cuota"  placeholder="" value="<?php if (isset($editar)) {
                                                  echo $editar->PROPIEDADES_CUOTA;
                                                } ?>">                                              
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Input Validation end -->


         <!-- Multiple Rules Validation start -->
         <section class="multiple-validation">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Descripcion</h4>
                      </div>
                      <div class="card-content">
                          <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Descripcion</label>
                                        <div class="controls">
                                          <textarea class="form-control" name="descripcion"  id="descripcion" cols="30" rows="5"><?php if (isset($editar)) {
                                            echo $editar->PROPIEDADES_DESCRIPCION;
                                          } ?></textarea>                                        
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                          <label>Clave interna</label>
                                          <div class="controls">
                                            <input type="text" class="form-control" name="Clave" id="Clave"  placeholder="" value="<?php if (isset($editar)) {
                                              echo $editar->PROPIEDADES_CLAVE;
                                            } ?>">                                        
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Video</label>
                                        <div class="controls">
                                          <input type="text" class="form-control" name="Video" id="Video" placeholder="" value="<?php if (isset($editar)) {
                                            echo $editar->PROPIEDADES_VIDEO;
                                          } ?>">                                        
                                        </div>
                                      </div>
                                  </div>
                                      
                                  </div>
                                  <button type="button" onclick="validaciones()" class="btn btn-info ">Guardar Cambios</button>
                                </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Multiple Rule Validation end -->


        </div>
    </div>
</div>
<!-- END: Content-->

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
    // }else if(NumeroInterior == null || NumeroInterior == '') {
    //   alertify.success("te hace falta llenar Numero Interior, por favor");
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
    }else if(propiedad != null && Colonia != null && Zona != null && CodigoPostal != null && Calle != null && NumeroInterior != null && descripcion != null && Clave != null) {
                    swal(
                        'Correcto',
                        'Guardando Propiedad...!',
                        'success'
                      )
        setTimeout(function(){ document.getElementById('CrearPropiedad').submit(); }, 2000);
      }else{
                    swal(
                        'Error!',
                        'Hubo un error',
                        'error'
                      )
      }
    
    // else {
    //     document.getElementById('CrearPropiedad').submit();
    // }
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