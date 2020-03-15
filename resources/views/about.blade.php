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

 <section class="invitados contenedor seccion">
    <h2>Nuestros invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="imagen invitado">
          <p>Rafael Bautista</p>
        </div>
        
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="imagen invitado">
          <p>Shari Herrera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="imagen invitado">
          <p>Gregorio Sanchez</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="imagen invitado">
          <p>Susana Rivera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="imagen invitado">
          <p>Harold Garcia</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="imagen invitado">
          <p>Susan Sanchez</p>
        </div>
      </li>
    </ul>
  </section>
    
@endsection