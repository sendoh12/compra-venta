

<header>
    <nav>
        <ul>
            <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href=" {{ route('home') }} ">Home</a>
            <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            <a class="{{ request()->routeIs('portfoao') ? 'active' : '' }}" href="{{ route('portfolio') }}">Portafolio</a>
            <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
        </ul>
    </nav>
</header>

