{{-- @extends('Paginasinicio.inicio') --}}
    

<link rel="stylesheet" href="{{asset('dist/estilos/styles.css')}}">



<div class="principal">

</div>

    <div class="telefono center-block">
    <h4><i class="fas fa-sms "></i> Escribenos a: arquitectura_inmobiliaria@grupolacer.com Telefono: <i class=" fas fa-phone-square "></i> 229 118 7076 </h4>
    </div>
    {{-- encabezado --}}
    <div class="informes center-block">
        <div class="log">
            <img class="iman" src=" {{asset('uploads/lacerInmovibiliaria.jpeg')}}" alt="">
        </div>
        <div class="inf">
        <h4><i class="fas fa-sms "></i> Escribenos a: arquitectura_inmobiliaria@grupolacer.com <br> Telefono: <i class=" fas fa-phone-square "></i> 229 118 7076 </h4>
        </div>
    </div>

    

    <nav class="navbar navbar-inverse center-block">
        <div class=" container-fluid principal ">
            

                <ul class="nav navbar-nav ">
                    
                    <li class="{{ request()->routeIs('lacer') ? 'activo' : '' }} ">
                        <a href=" {{ route('lacer') }}"> <i class=" fas fa-home "></i> Inicio </a>
                    </li>

                    <li class="{{ request()->routeIs('about') ? 'activo' : '' }}">
                        <a href="{{ route('about') }}"> <i class=" fas fa-landmark "></i> Propiedades </a>
                    </li>

                    <li class="{{ request()->routeIs('portfolio') ? 'activo' : '' }}">
                        <a href="{{ route('portfolio') }}"> <i class=" fas fa-id-badge "></i> Contacto </a>
                    </li>

                    <li class="{{ request()->routeIs('contact') ? 'activo' : '' }}">
                        <a href="{{ route('contact') }}"> <i class=" fas fa-star "></i> Favoritos </a>
                    </li>

                    <li class="{{ request()->routeIs('informes') ? 'activo' : '' }}">
                        <a href="{{ route('informes') }}"> <i class=" fas fa-info-circle "></i> Informacion </a>
                    </li>

                </ul>
        {{-- <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ action('LoginController@index') }} "><span class="fas fa-user-circle"></span> Login</a></li>
        </ul> --}}
        </div>
    </nav> 

    <script src="{{asset('slider/js/jquery-3.1.0.min.js')}}"></script>
    <script src="{{asset('slider/js/main.js')}}"></script>


