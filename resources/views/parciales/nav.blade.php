<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('Material/material.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/estilos/Normalize.css')}}">
    <link rel="stylesheet" href="{{asset('dist/estilos/compra.css')}}">
    <title>GrupoLacer</title>
</head>
<body>
    <header class="site-header inicio">
        <div class="contenedor">
            <div class="barra">
                <a href="{{asset('/')}}">
                    <img src="{{asset('uploads/lacerInmovibiliaria.jpeg')}}" alt="logotipo">
                </a>
                <p><i class="fas fa-sms "></i> 
                    Escribenos a: arquitectura_inmobiliaria@grupolacer.com Telefono: 
                    <i class=" fas fa-phone-square "></i> 
                    229 118 7076 
                </p>
            </div> 
            {{-- contenedor fin --}}
        </div>
    </header>

    
    <div class="menu ">
        <div class="navegacion-principal fw-700 contenedor ">
            <nav class="navegacion">
                <a href="{{ route('/') }}">Inicio </a>
                <a href="{{ route('propiedades') }}">Propiedades </a>
                <a href="{{ route('contacto') }}">Contacto</a>
                {{-- <a href="{{ route('contact') }}">Favoritos </a> --}}
                <a href="#">Proyectos </a>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
                <!-- aqui insertaremos el slider -->
                <div id="carousel1" class="carousel slide" data-ride="carousel">
                    <!-- Indicatodores -->
                    <ol class="carousel-indicators">
                        @foreach ($imagenes as $key => $item)
                            @if ($key == 0)
                                <li data-target="#carousel1" data-slide-to="{{$key}}" class="active"></li>
                            @else
                                <li data-target="#carousel1" data-slide-to="{{$key}}"></li>
                            @endif
                        @endforeach
                    </ol>
                
                    <!-- Contenedor de las imagenes -->
                    <div class="ajustar-slider">
                        <div class="carousel-inner" role="listbox">
                            
                            @foreach ($imagenes as $key => $item)
                                @if ($key == 0)
                                    <div class="item active">
                                        <img style="width: 100%; height: 500px;" src="{{asset(Storage::url($item->INICIO_NOMBRE))}}" alt="Imagen 1">
                                        <div class="carousel-caption"></div>
                                    </div>
                                @else
                                    <div class="item">
                                        <img style="width: 100%; height: 500px;" src="{{asset(Storage::url($item->INICIO_NOMBRE))}}" alt="Imagen 2">
                                        <div class="carousel-caption"></div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                
                </div>
                
            
            </div>
        </div>
    </div>
   
      
      

    {{-- <section class="imagen-contacto2">
        <div class="contenedor contenido-contacto ">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>
                Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad
            </p>
            <a href="{{ route('contacto') }}" class="boton boton-verde">Contactanos</a>
        </div>
    </section> --}}

    
    
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('slider/js/jquery-3.1.0.min.js')}}"></script>
    <script src="{{asset('slider/js/main.js')}}"></script>

    
    
</body>
</html>