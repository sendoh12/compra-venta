<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'inicio')</title>
</head>
<body>

    

    <nav>
        <ul>
            <li><a href="/Compra-venta/public/">Home</a></li>
            <li><a href="/Compra-venta/public/about">About</a></li>
            <li><a href="/Compra-venta/public/portfolio">Portfolio</a></li>
            <li><a href="/Compra-venta/public/contact">Contact</a></li>
        </ul>
    </nav>

    @yield('content')
    
</body>
</html>