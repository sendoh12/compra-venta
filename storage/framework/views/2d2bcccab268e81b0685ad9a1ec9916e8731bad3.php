
<?php echo $__env->make('plantillas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('plantillas.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style>
  .centrar-mapid{
    display: flex;
    justify-content: center;
    padding: 2rem 0;
  }
  .mapid{
    width: 90%;
    height: 420px;
}
</style>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

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
                              
                              <?php if(count($errors) > 0): ?>
                                  <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    </div>
                              <?php endif; ?>
                                
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form id="CrearPropiedad" class="form-horizontal" method="POST" action="GuardarPropiedades" enctype="multipart/form-data"  novalidate>
                                      <?php echo csrf_field(); ?>
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
                                                        <?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if(isset($editar)):?>
                                                            <?php if($item->ESTADOS_ID == $editar->PROPIEDADES_ESTADO): ?>
                                                              <option value=" <?php echo e($item->ESTADOS_ID); ?> " selected> <?php echo e($item->ESTADOS_NOMBRE); ?> </option>
                                                            <?php else:?>
                                                              <option value=" <?php echo e($item->ESTADOS_ID); ?> "> <?php echo e($item->ESTADOS_NOMBRE); ?> </option>
                                                            <?php endif?>
                                                        <?php else: ?>
                                                          <option value=" <?php echo e($item->ESTADOS_ID); ?> "> <?php echo e($item->ESTADOS_NOMBRE); ?> </option>
                                                        <?php endif?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                      <input type="text" class="form-control"  name="CodigoPostal" id="CodigoPostal" placeholder="" value="<?php if (isset($editar)) {
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
                                          
                                          
                                        

                                          
                                            
                                              <div class="container">
                                                <div class="centrar-mapid">
                                                  <div id="mapid" class="mapid">
                                                    
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
                                                    <?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <option value="<?php echo e($item->TIPOS_NOMBRE); ?>"><?php echo e($item->TIPOS_NOMBRE); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                  </select>                                                
                                                </div>
                                            </div>
                                            <div class="form-group " id="op1">
                                              <label>Subtipo*</label>
                                                <div class="controls">
                                                  <select name="subtipo" id="subtipo"  class="form-control">
                                                    <option value="Sola">Sola</option>
                                                    <option value="Condominio">Condominio</option>
                                                    <option value="Financiamiento">Fraccionamiento</option>
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
                                                  <div class="row">
                                                    <div class="col-md-9">
                                                      <input style="" type="text" class="form-control"  name="Precio" id="Precio" placeholder="" value="<?php if (isset($editar)) {
                                                        echo $editar->PROPIEDADES_PRECIO;
                                                      } ?>">
                                                    </div>
                                                    <div class="col-md-3">
                                                      <select style="text-align:center;" name="moneda" id="moneda" class="form-control">
                                                        <option value="MXN$">MXN$</option>
                                                        <option value="US$">US$</option>
                                                      </select>                                                
                                                    </div>
                                                  </div>
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
                                                  <div class="row">
                                                    <div class="col-md-9">
                                                      <input type="text" class="form-control validar" name="Terreno"  id="Terreno" placeholder="" value="<?php if (isset($editar)) {
                                                        echo $editar->PROPIEDADES_TERRENOS;
                                                      } ?>">
                                                    </div>
                                                    <div class="col-md-3">
                                                      <select style="text-align: center;" class="form-control" name="TerrenoTamaño" id="TerrenoTamaño">
                                                        <option value="m²">m²</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="form-group " id="op7">
                                              <label>Construcción</label>
                                                <div class="controls">
                                                  <div class="row">
                                                    <div class="col-md-9">
                                                      <input type="text" class="form-control validar" name="Construcción"  id="Construcción" placeholder="" value="<?php if (isset($editar)) {
                                                        echo $editar->PROPIEDADES_CONSTRUCCION;
                                                      } ?>">
                                                    </div>
                                                    <div class="col-md-3">
                                                      <select style="text-align: center;" class="form-control" name="ConstruccionTamaño" id="ConstruccionTamaño">
                                                          <option value="m²">m²</option>  
                                                      </select>                                        
                                                    </div>
                                                  </div>
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
                                              <label>Año de construcción (Ejemplo: 1995)</label>
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
                                                <div class="row">
                                                  <div class="col-md-9">
                                                    <input type="text" class="form-control" name="cuota" id="cuota"  placeholder="" value="<?php if (isset($editar)) {
                                                      echo $editar->PROPIEDADES_CUOTA;
                                                    } ?>">    
                                                  </div>
                                                  <div class="col-md-3">
                                                    <select style="text-align:center;" name="CuotaMoneda" id="CuotaMoneda" class="form-control">
                                                      <option value="MXN$">MXN$</option>
                                                      <option value="US$">US$</option>
                                                    </select>                                           
                                                  </div>
                                                </div>
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

<?php echo $__env->make('plantillas.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
  function MostrarUbicacion() {
    var popup = L.popup();

  window.onload = function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
  }

  mymap.on('click', onMapClick);
  }
  
</script>


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
    var moneda = document.getElementById('moneda').value;
    var TerrenoTamaño = document.getElementById('TerrenoTamaño').value;
    var ConstruccionTamaño = document.getElementById('ConstruccionTamaño').value;
    var CuotaMoneda = document.getElementById('CuotaMoneda').value;
    var Precio = document.getElementById('Precio').value;
    var Habitaciones = document.getElementById('Habitaciones').value;
    var Baños = document.getElementById('Baños').value;
    var Terreno = document.getElementById('Terreno').value;
    var Construcción = document.getElementById('Construcción').value;
    var cuota = document.getElementById('cuota').value;
    var Año = document.getElementById('Año').value;
    var Niveles = document.getElementById('Niveles').value;
    var Estacionamientos = document.getElementById('Estacionamientos').value;
    
    if(propiedad == null || propiedad == '') {
                  swal(
                      'Campo vacio',
                      'No has llenado el campo de propiedad!',
                      'warning'
                   )

    }else if(Colonia == null || Colonia == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Clonia!',
                      'warning'
                   )
    }else if(Zona == null || Zona == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Zona!',
                      'warning'
                   )
    }else if(CodigoPostal == null || CodigoPostal == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Codigo Postal!',
                      'warning'
                   )
    }else if(CodigoPostal % 1 != 0) {
      swal(
                      'Campo invalido',
                      'El Codigo postal solo puede llevar numeros!',
                      'warning'
                   )
    }else if(Calle == null || Calle == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Calle!',
                      'warning'
                   )
    }else if(NumeroExterior == null || NumeroExterior == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Numero Exterior!',
                      'warning'
                   )

    }
    else if(Precio == null || Precio == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Precio!',
                      'warning'
                   )

    }else if(Precio % 1 != 0) {
      swal(
                      'Campo invalido',
                      'El campo precio solo puede llevar numeros!',
                      'warning'
                   )

    }else if(moneda == null || moneda == '') {
      swal(
                      'Campo vacio',
                      'La moneda del precio no puede ser vacia!',
                      'warning'
                   )

    }else if(Habitaciones == null || Habitaciones == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Habitaciones!',
                      'warning'
                   )

    }else if(Habitaciones % 1 != 0) {
      swal(
                      'Campo invalido',
                      'El campo Habitaciones solo puede llevar numeros!',
                      'warning'
                   )

    }else if(Baños == null || Baños == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Baños!',
                      'warning'
                   )

    }else if(Baños % 1 != 0) {
      swal(
                      'Campo invalido',
                      'El campo Baños solo puede llevar numeros!',
                      'warning'
                   )

    }else if(NumeroExterior % 1 != 0) {
      swal(
                      'Campo invalido',
                      'El Numero Exterior solo puede llevar numeros!',
                      'warning'
                   )

    }else if(Terreno == null || Terreno == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Terreno!',
                      'warning'
                   )

    }else if(Terreno % 1 != 0) {
      swal(
                      'Campo invalido',
                      'El campo Terreno solo puede llevar numeros!',
                      'warning'
                   )

    }else if(TerrenoTamaño == null || TerrenoTamaño == '') {
      swal(
                      'Campo vacio',
                      'Los metros del terreno no pueden ser vacios!',
                      'warning'
                   )

    }else if(Construcción == null || Construcción == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Construcción!',
                      'warning'
                   )

    }else if(Construcción % 1 != 0) {
      swal(
                      'Campo invalido',
                      'El campo Construcción solo puede llevar numeros!',
                      'warning'
                   )

    }else if(ConstruccionTamaño == null || ConstruccionTamaño == '') {
      swal(
                      'Campo invalido',
                      'Los metros de la construccion no puede ser vacio!',
                      'warning'
                   )

    }else if(Año == null || Año == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Año!',
                      'warning'
                   )

    }else if(Año % 1 != 0) {
      swal(
                      'Campo invalido',
                      'El campo Año solo puede llevar numeros!',
                      'warning'
                   )

    }else if(Niveles == null || Niveles == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Niveles!',
                      'warning'
                   )

    }else if(Niveles % 1 != 0) {
      swal(
                      'Campo invalido',
                      'El campo Niveles solo puede llevar numeros!',
                      'warning'
                   )

    }else if(Estacionamientos == null || Estacionamientos == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Estacionamientos!',
                      'warning'
                   )

    }else if(Estacionamientos % 1 != 0) {
      swal(
                      'Campo invalido',
                      'El campo Estacionamientos solo puede llevar numeros!',
                      'warning'
                   )

    }else if(ConstruccionTamaño == null || ConstruccionTamaño == '') {
      swal(
                      'Campo vacio',
                      'Los metros de la construccion no pueden ser vacios!',
                      'warning'
                   )

    }else if(descripcion == null || descripcion == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Descripcion!',
                      'warning'
                   )
    }else if(Clave == null || Clave == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Clave!',
                      'warning'
                   )
    }else if(moneda == null || moneda == '') {
      swal(
                      'Campo vacio',
                      'No has llenado el campo de Moneda!',
                      'warning'
                   )
    }else if(TerrenoTamaño == null || TerrenoTamaño == '') {
      swal(
                      'Campo vacio',
                      'El tamaño del terreno no puede ser vacio!',
                      'warning'
                   )
    }else if(ConstruccionTamaño == null || ConstruccionTamaño == '') {
      swal(
                      'Campo vacio',
                      'El tamaño de la construccion no puede ser vacia!',
                      'warning'
                   )
    }else if(CuotaMoneda == null || CuotaMoneda == '') {
      swal(
                      'Campo vacio',
                      'La moneda de la cuota no puede ser vacia!',
                      'warning'
                   )
    }else if(propiedad != null && Colonia != null && Zona != null && CodigoPostal != null && Calle != null && 
            NumeroInterior != null && descripcion != null && Clave != null && Clave != null && Clave != null && 
            Clave != null && Clave != null && Clave != null && Clave != null && Clave != null
            && Clave != null && Clave != null && Clave != null && Clave != null) {
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
  
<?php endif;?>

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);

  
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

  window.onload = function MostrarMuni() {
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
</script><?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/administrador/agregar_propiedad.blade.php ENDPATH**/ ?>