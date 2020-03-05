
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



    <title>@yield('title', 'inicio')</title>
</head>

<body>   
    
    {{-- @include('parciales.nav') --}}
    @include('parciales.nav')

    {{-- @section('title', 'inicio')  --}}
    {{-- @endsection --}}

    <div class="container">
        @yield('content')        
    </div>
    
   
    
</body>
</html>


