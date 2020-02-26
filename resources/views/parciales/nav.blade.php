
<nav>
    <ul>
        <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="/Compra-venta/public/">Home</a></li>
        <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="/Compra-venta/public/about">About</a></li>
        <li class="{{ request()->routeIs('portafolio') ? 'active' : '' }}"><a href="/Compra-venta/public/portfolio">Portfolio</a></li>
        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="/Compra-venta/public/contact">Contact</a></li>
    </ul>
</nav>