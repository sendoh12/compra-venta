    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">

            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                <a href=" {{ route('home') }} ">Inicio</a>
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
                <a href="{{ route('informacion.informes') }}">Informacion</a>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        </div>
    </nav> 




