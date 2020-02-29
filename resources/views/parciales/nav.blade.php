


<header>
    <nav class="componer">
        <ul>
            <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href=" {{ route('home') }} ">Home</a>
            <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            <a class="{{ request()->routeIs('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">Portafolio</a>
            <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
            <a class="{{ request()->routeIs('informes') ? 'active' : '' }}" href="{{ route('informacion.informes') }}">Informacion</a>

        </ul>
    </nav>
</header>

