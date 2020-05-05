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

<br>
    
@if (count($propiedades)!=0)
    <div class="container">
        <h1 class="fw-300 centrar-texto">Datos de la propiedad</h1><br>

            <div class="row">
                <div class="col-md-6 slider-propiedad">
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
                        <div class="carousel-inner">
                            @foreach ($propiedades as $key => $prop)
                                @if (isset($prop->IMAGENES_ARCHIVO))
                                    @if ($key == 0)
                                        <div class="item active">
                                            <img style="height: 50rem" src="{{asset(Storage::url($prop->IMAGENES_ARCHIVO))}}" alt="Los Angeles">
                                        </div>
                                    @else
                                        <div class="item">
                                            <img style="height: 50rem" src="{{asset(Storage::url($prop->IMAGENES_ARCHIVO))}}" alt="Chicago">
                                        </div>
                                    @endif
                                @endif
                            @endforeach
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


                <div class="col-md-6">
                    <div class="description">
                        <h3>Ubicacion</h3>
                            {{'Codigo '.$propiedades[0]->PROPIEDADES_CLAVE}} <br>
                            {{$propiedades[0]->PROPIEDADES_NOMBRE}} <br>
                            {{$propiedades[0]->PROPIEDADES_PAIS.', '}}
                            {{$propiedades[0]->ESTADOS_NOMBRE.', '}}
                            {{$propiedades[0]->MUNICIPIOS_NOMBRE.', '}}
                            {{$propiedades[0]->PROPIEDADES_COLONIA}}<br>
                            {{$propiedades[0]->PROPIEDADES_ZONA}}<br>
                            {{$propiedades[0]->PROPIEDADES_CP}}<br>
                            {{$propiedades[0]->PROPIEDADES_CALLE}}<br>
                        <h3>Descripción</h3>
                            {{$propiedades[0]->PROPIEDADES_DESCRIPCION}}
                        <h3>Datos Complementatios</h3>
                            {{'Estacionamientos '.$propiedades[0]->PROPIEDADES_ESTACIONAMIENTO}} <br>
                            {{'Niveles '.$propiedades[0]->PROPIEDADES_NIVELES}} <br>
                            {{'Construción '.$propiedades[0]->PROPIEDADES_CONSTRUCCION}} <br>
                            {{'Terreno '.$propiedades[0]->PROPIEDADES_TERRENOS}} <br>
                            {{'Año de construccion '.$propiedades[0]->PROPIEDADES_AÑO}}
        
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
@endif
@include('plantillas.menu_footer')


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