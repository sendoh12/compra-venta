@extends('Paginasinicio.inicio')

@section('title', 'About')


@section('content')
<div class="captura ">
        
    <div class="slideshow">
     <ul class="slider">
         @foreach ($imagenes as $item)
         <li>
             <img style="width: 100%; height: 400px;"  src="inicio/<?=$item->INICIO_NOMBRE?>" alt="">
             <section class="caption">
                 <h1>GupoLacer</h1>
                 <p></p>
             </section>
         </li>
         @endforeach
     </ul>
 
     <div class="left">
         <span class="fa fa-chevron-left"></span>
     </div>

     <div class="right">
         <span class="fa fa-chevron-right"></span>
     </div>

 </div>
    
@endsection