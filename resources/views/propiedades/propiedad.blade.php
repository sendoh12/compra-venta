@extends('PaginasInicio.inicio')

@section('title', 'Casa en venta')

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

<link rel="stylesheet" type="text/css" href=" {{asset('css/slicebox.css')}} " />
	<link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}" />
@section('content')

    
@if (count($propiedades)!=0)
    <div class="container">
      <div class="panel panel-default contenedor">
        <div class="panel-body">


        <h1 class="fw-300 centrar-texto">Datos de la propiedad</h1><br>
            <div class="row tamano-row">
              <div class="col-md-4">
                <div class="description">
                  <h1 class="fw-300 centrar-texto">{{'Casa en '.$propiedades[0]->PROPIEDADES_OPERACION}}</h1>
                  <h3 class="fw-300 centrar-texto">{{$propiedades[0]->PROPIEDADES_MONEDA.' '.number_format($propiedades[0]->PROPIEDADES_PRECIO)}}</h3>
                        <div class="ubicacion">
                          <h3>Ubicacion</h3>
                          <p>{{$propiedades[0]->PROPIEDADES_CLAVE}}</p> 
                          <p>{{$propiedades[0]->PROPIEDADES_NOMBRE}}</p> 
                          <p>{{$propiedades[0]->PROPIEDADES_PAIS.', '.
                              $propiedades[0]->ESTADOS_NOMBRE.', '.
                              $propiedades[0]->MUNICIPIOS_NOMBRE.', '.
                              $propiedades[0]->PROPIEDADES_COLONIA}}</p>

                          <p>{{'Zona '.$propiedades[0]->PROPIEDADES_ZONA}}</p>
                          <p>{{'CP: '.$propiedades[0]->PROPIEDADES_CP}}</p>
                          <p>{{$propiedades[0]->PROPIEDADES_CALLE}}</p>

                          
                        </div>
                        <div class="barra-azul">

                        </div>
                  </div>
              </div>

              
                <div class="col-md-8 ">
                  <div class="slider-img">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            @foreach ($propiedades as $key => $prop)
                                @if (isset($prop->IMAGENES_ARCHIVO))
                                    @if ($key == 0)
                                        <li data-target="#myCarousel" data-slide-to="{{$key}}" class="active"></li>
                                    @else
                                        <li data-target="#myCarousel" data-slide-to="{{$key}}"></li>
                                    @endif
                                @endif
                            @endforeach
                        </ol>
                      
                        <!-- Wrapper for slides -->
                        <div class="modificar-sli">
                        <div class="carousel-inner">

                            @foreach ($propiedades as $key => $prop)
                                @if (isset($prop->IMAGENES_ARCHIVO))
                                    @if ($key == 0)
                                        <div class="item active">
                                            <img style="height:50rem" src="{{asset(Storage::url($prop->IMAGENES_ARCHIVO))}}" alt="Los Angeles">
                                        </div>
                                    @else
                                        <div class="item">
                                            <img style="height:50rem" src="{{asset(Storage::url($prop->IMAGENES_ARCHIVO))}}" alt="Chicago">
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                          </div>
                        </div>
                      
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                            </a>
                      </div>    
                  </div>
                </div>
            </div>
            <br>
            <h1 class="fw-300 centrar-texto">Informacion completa</h1>

            <div class="row tamaño-cuadro">
              <div class="col-md-6">
                <div class="description">
                  <div class="ubicacion cambiar-des">
                    <h3>Descripción</h3>
                    <textarea class="descript" readonly>
                        {{$propiedades[0]->PROPIEDADES_DESCRIPCION}}
                    </textarea>
                      
                  </div>
                  <div class="barra-azul">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="description">
                  <div class="ubicacion">
                    <h3>Datos Complementatios</h3>
                      <p>{{'Estacionamientos '.$propiedades[0]->PROPIEDADES_ESTACIONAMIENTO}}</p>
                      <p>{{'Niveles '.$propiedades[0]->PROPIEDADES_NIVELES}}</p>
                      <p>{{'Construción '.$propiedades[0]->PROPIEDADES_CONSTRUCCION}}</p> 
                      <p>{{'Terreno '.$propiedades[0]->PROPIEDADES_TERRENOS}}</p>
                      <p>{{'Año de construccion '.$propiedades[0]->PROPIEDADES_AÑO}}</p>
                  </div>
                  <div class="barra-azul">
                  </div>
                </div>
              </div>

            </div>

        <h1 class="fw-300 centrar-texto">Zona de la propiedad</h1>
			<br>

		

        <div class="mapid" id="mapid">
            <input type="hidden" id="latitud" value="{{$propiedades[0]->PROPIEDADES_LATITUD}}">
            <input type="hidden" id="longitud" value="{{$propiedades[0]->PROPIEDADES_LONGITUD}}">
        </div>
      </div>
    </div>

    </div>
@endif


<!-- Footer -->
<footer class="page-footer font-small blue pt-4">
  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">
    <!-- Grid row -->
    <div class="row color-footer">
      <!-- Grid column -->
      <div class="col-md-4 mt-md-0 mt-3">
        <!-- Content -->
        <div class="ajustar-footer">
          <h5 class="text-uppercase ">
            <h3>¿Quienes <span>Somos?</span></h3>
          </h5>
          <p>
            Somos un grupo de profesionistas enfocados en apoyar en la compra, 
            venta o renta de su bien inmueble, con el objetivo de satisfacer las necesidades 
            inmobiliarias de nuestros clientes.
  
          </p>

        </div>
      </div>

      <!-- Grid column -->
      {{-- <hr class="clearfix w-100 d-md-none pb-3"> --}}
      <!-- Grid column -->
      <div class="col-md-4 mt-md-0 mt-3">
        <!-- Content -->
        <div class="ajustar-footer">
          <h5 class="text-uppercase ">
            <h3>Sobre <span>Grupolacer</span></h3>
          </h5>
          <p>
            <li>Ser la mejor opción inmobiliaria, superando las expectativas de nuestros clientes y generando calidad.</li>
            <li>Desarrollar para nuestros clientes soluciones inmobiliarias trascendentes, creadas por un grupo de personas enfocado en la excelencia.</li>
            <h5>Valores</h5>
              • Honestidad 
              • Respeto <br>
              • Profesionalismo 
              • Responsabilidad <br>
              • Puntualidad 
              • Espíritu de servicio <br>
              • Compromiso
          </p>
        </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 mt-md-0 mt-3">
        <!-- Content -->
        <div class="ajustar-footer">
          <h5 class="text-uppercase ">
            <h3>Redes <span>Sociales</span></h3>
          </h5>
          <nav class="redes-sociales">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </nav>
      </div>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
  <!-- Footer Links -->
</footer>
<!-- Footer -->


  

  <div class="copyright">
    <p class="contenedor">
      Todos los derechos Reservados GRUPOLACER 2020
    </p>
  </div>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/modernizr.custom.46884.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.slicebox.js')}}"></script>
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

            var latitud = document.getElementById('latitud').value;
            var longitud = document.getElementById('longitud').value;
            // console.log(latitud, longitud);

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
            
        
        
    </script>
    

    @endsection