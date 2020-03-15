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
    <h2>Propiedades</h2>
    <ul class="lista-invitados clearfix">
        @foreach ($propiedades as $propiedad)
        <li>
            <div class="invitado">
                <div class="etiqueta">{{$propiedad->PROPIEDADES_OPERACION}}</div>
                    <img style="width: 400px;height: 250px;" src="images/<?=$propiedad->PROPIEDADES_IMAGEN?>" alt="imagen invitado">
                    <p>{{$propiedad->PROPIEDADES_PRECIO}}</p>
                </div>
                <div class="texto" style="width: 400px;height: 250px;">
                    <p>{{$propiedad->PROPIEDADES_NOMBRE}}</p>
                    <p>{{$propiedad->ESTADOS_NOMBRE}}</p>
                    <p>{{$propiedad->MUNICIPIOS_NOMBRE}}</p>
                    <p>{{$propiedad->PROPIEDADES_COLONIA}}</p>
                    <p>{{$propiedad->PROPIEDADES_ZONA}}</p>
                    <div class="botones">
                </div>
            </div>
        </li>
       
            
        @endforeach
      
    </ul>
  </section>
    
@endsection