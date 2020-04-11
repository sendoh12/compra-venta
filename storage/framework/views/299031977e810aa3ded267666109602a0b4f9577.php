

<?php $__env->startSection('title', 'Casa en venta'); ?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.min.js"></script>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

<link rel="stylesheet" type="text/css" href=" <?php echo e(asset('css/slicebox.css')); ?> " />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/demo.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/custom.css')); ?>" />
<?php $__env->startSection('content'); ?>
    
    
    
    <div class="container">

		<?php if(count($propiedades)!=0): ?>
        
        
        
        
        <div class="wrapper" id="fotos" style="display:block">
            <button type="button" class="btn-3d" onclick="fotos()"> Fotos</button>
            <button type="button" class="btn-3d" onclick="mapa()">Mapa</button>
			
			

            <ul id="sb-slider" class="sb-slider" style="max-width: 1600px; overflow: hidden;">
                <?php $__currentLoopData = $propiedades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <?php if(isset($prop->IMAGENES_ARCHIVO)): ?>
                            <a target="_blank"><img src="<?php echo e(asset(Storage::url($prop->IMAGENES_ARCHIVO))); ?>" alt=""/></a>
                        <?php endif; ?>
                        <div class="sb-description">
                            <h3><?php echo e($propiedades[0]->PROPIEDADES_NOMBRE); ?></h3>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </ul>

            <div id="shadow" class="shadow"></div>

            <div id="nav-arrows" class="nav-arrows">
                <a href="#">Next</a>
                <a href="#">Previous</a>
            </div>
        </div>

        
        <div class="wrapper" id="mapas" style="display:none">
            <button type="button" class="btn-3d" onclick="fotos()"> Fotos</button>
            <button type="button" class="btn-3d" onclick="mapa()">Mapa</button>
            <input type="hidden" id="latitud" value="<?php echo e($propiedades[0]->PROPIEDADES_LATITUD); ?>">
            <input type="hidden" id="longitud" value="<?php echo e($propiedades[0]->PROPIEDADES_LONGITUD); ?>">
          
            <div class="origenmapa">
                <div id="mapid" style="width:730px; height:400px; position:relative; outline:none;" class="leaflet-container leaflet-fade-anim leaflet-grab leaflet-touch-drag" tabindex="0">
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

        <div class="caracteristicas">
            <div class="description">
                <h3>Ubicacion</h3>
                    <?php echo e('Codigo '.$propiedades[0]->PROPIEDADES_CLAVE); ?> <br>
                    <?php echo e($propiedades[0]->PROPIEDADES_NOMBRE); ?> <br>
                    <?php echo e($propiedades[0]->PROPIEDADES_PAIS.', '); ?>

                    <?php echo e($propiedades[0]->ESTADOS_NOMBRE.', '); ?>

                    <?php echo e($propiedades[0]->MUNICIPIOS_NOMBRE.', '); ?>

                    <?php echo e($propiedades[0]->PROPIEDADES_COLONIA); ?><br>
                    <?php echo e($propiedades[0]->PROPIEDADES_ZONA); ?><br>
                    <?php echo e($propiedades[0]->PROPIEDADES_CP); ?><br>
                    <?php echo e($propiedades[0]->PROPIEDADES_CALLE); ?><br>
                <h3>Descripción</h3>
                    <?php echo e($propiedades[0]->PROPIEDADES_DESCRIPCION); ?>

                <h3>Datos Complementatios</h3>
                    <?php echo e('Estacionamientos '.$propiedades[0]->PROPIEDADES_ESTACIONAMIENTO); ?> <br>
                    <?php echo e('Niveles '.$propiedades[0]->PROPIEDADES_NIVELES); ?> <br>
                    <?php echo e('Construción '.$propiedades[0]->PROPIEDADES_CONSTRUCCION); ?> <br>
                    <?php echo e('Terreno '.$propiedades[0]->PROPIEDADES_TERRENOS); ?> <br>
                    <?php echo e('Año de construccion '.$propiedades[0]->PROPIEDADES_AÑO); ?>


            </div>
            <div class="datos">
                <form  class="form-horizontal col-md-8 col-md-offset-2 formprecio">
                    <br>
                    <label class="col-sm-9 control-label">
                        <h3>
                            <?php echo e('Casa en '.$propiedades[0]->PROPIEDADES_OPERACION); ?> <br>
                            <?php echo e($propiedades[0]->PROPIEDADES_PRECIO); ?>

                        </h3>
                        <nav class="iconospropied">
                            <?php echo e('Habs '.$propiedades[0]->PROPIEDADES_HABITACIONES); ?>

                            <a ><i class="fas fa-person-booth"></i></a>
                            <?php echo e('Baño(s) '.$propiedades[0]->PROPIEDADES_BAÑOS); ?>

                            <a ><i class="fas fa-toilet"></i></a>
                            <?php echo e($propiedades[0]->PROPIEDADES_CONSTRUCCION); ?>

                            <a><i class="fas fa-home"></i></a>
                        </nav>
                        
                    </label>
                    
                </form>

                

                <form  action="contactos"  method="post" class="col-md-8 col-md-offset-2 formcolor">
					<?php echo csrf_field(); ?>
					<br>
					
						<label class="letra">Contactanos</label>
					
					<br><br>
					<div class="form-group">
						<input type="text" name="nombre" class="form-control tipoletra" id="" placeholder="Nombre de la persona y apellidos"  minlength="2" maxlength="80"  required>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control tipoletra" id="" placeholder="Email" minlength="2" maxlength="80"  required>
					</div>
					<div class="form-group">
						<input type="tel" name="tel" class="form-control tipoletra" id="" placeholder="Telefono" minlength="2" maxlength="10" required>
					</div>
					<div class="form-group">
						<input type="text" name="asunto" class="form-control tipoletra" id="" placeholder="Asunto" minlength="2" maxlength="120"  required>
					</div>
					<div class="form-group">
						<textarea class="form-control tipoletra" name="mesaje" id="" placeholder="Mensaje*" minlength="2" maxlength="1000"  required></textarea>
					</div>
						<button type="submit" class="btn-3d form-control">Contactar</button>
				</form>
                
            </div>
        </div>
    </div>
    <?php endif; ?>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/modernizr.custom.46884.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.slicebox.js')); ?>"></script>
    <script type="text/javascript">
        $(function() {
            
            var Page = (function() {

                var $navArrows = $( '#nav-arrows' ).hide(),
                    $shadow = $( '#shadow' ).hide(),
                    slicebox = $( '#sb-slider' ).slicebox( {
                        onReady : function() {

                            $navArrows.show();
                            $shadow.show();

                        },
                        orientation : 'r',
                        cuboidsRandom : true
                    } ),
                    
                    init = function() {

                        initEvents();
                        
                    },
                    initEvents = function() {

                        // add navigation events
                        $navArrows.children( ':first' ).on( 'click', function() {

                            slicebox.next();
                            return false;

                        } );

                        $navArrows.children( ':last' ).on( 'click', function() {
                            
                            slicebox.previous();
                            return false;

                        } );

                    };

                    return { init : init };

            })();

            Page.init();

        });
    </script>

    <script>
        function fotos() {
            document.getElementById('fotos').style.display = 'block';
            document.getElementById('mapas').style.display = 'none';

        }

        function mapa() {
            document.getElementById('fotos').style.display = 'none';
            document.getElementById('mapas').style.display = 'block';

            var latitud = document.getElementById('latitud').value;
            var longitud = document.getElementById('longitud').value;
            console.log(latitud, longitud);

            var mymap = L.map('mapid').setView([latitud, longitud], 17);
            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
            }).addTo(mymap);
            // L.marker([latitud, longitud]).addTo(mymap);
            
        }
        
    </script>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('PaginasInicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/propiedades/propiedad.blade.php ENDPATH**/ ?>