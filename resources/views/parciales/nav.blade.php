{{-- @extends('Paginasinicio.inicio') --}}
    



    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header ">
            <a class="navbar-brand" href="#">GrupoLacer</a>
        </div>
        <ul class="nav navbar-nav ">
            
            <li class="{{ request()->routeIs('lacer') ? 'active' : '' }}">
                <a href=" {{ route('lacer') }}"> Inicio </a>
            </li>

            <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                <a href="{{ route('about') }}">Propiedades</a>
            </li>

            <li class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">
                <a href="{{ route('portfolio') }}">Contacto</a>
            </li>

            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                <a href="{{ route('contact') }}">Favoritos</a>
            </li>

            <li class="{{ request()->routeIs('informes') ? 'active' : '' }}">
                <a href="{{ route('informes') }}">Informacion</a>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            {{-- <i class="fas fa-user-plus"></i> --}}
            {{-- <i class="fas fa-user-circle"></i> --}}
            {{-- <li><a href="#"><span class="fas fa-user-plus"></span> Sign Up</a></li> --}}
            <li><a href="{{ action('LoginController@index') }} "><span class="fas fa-user-circle"></span> Login</a></li>
        </ul>
        </div>
    </nav> 




