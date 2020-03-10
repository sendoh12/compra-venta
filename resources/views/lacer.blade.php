@extends('Paginasinicio.inicio')

@section('title', 'Home')


<link rel="stylesheet" type="text/css" href=" {{asset('sider/css/estilos.css')}} ">
<link rel="stylesheet" type="text/css" href=" {{asset('sider/css/font-awesome.css')}} ">
@section('content')


    <div class="captura ">
        
       <div class="slideshow">
		<ul class="slider">
            @foreach ($imagenes as $item)
			<li>
				<img style="width: 100%; height: 500px;"  src="inicio/<?=$item->INICIO_NOMBRE?>" alt="">
				<section class="caption">
					<h1>Lorem ipsum 1</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quis ipsa, id quidem quisquam unde.</p>
				</section>
            </li>
            @endforeach
		</ul>

		<ol class="pagination">
			
		</ol>
	
		<div class="left">
			<span class="fa fa-chevron-left"></span>
		</div>

		<div class="right">
			<span class="fa fa-chevron-right"></span>
		</div>

	</div>
      
       

    </div>
@endsection