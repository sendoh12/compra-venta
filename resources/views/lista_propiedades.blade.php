<section class="invitados contenedor2 seccion">
           <h2>Propiedades</h2>
           <ul class="lista-invitados clearfix">
               @if(isset($propiedades))
               @foreach ($propiedades as $propiedad)
               <li>
                   <div class="invitado">
                       <div class="etiqueta">{{$propiedad->PROPIEDADES_OPERACION}}</div>
                       {{-- <a href="{{route('CasaVenta',$propiedad->PROPIEDADES_ID)}}">
                           <img style="width: 400px;height: 250px;" src="images/{{$propiedad->PROPIEDADES_IMAGEN}}" alt="imagen invitado">
                       </a> --}}
       
                       <form action="CasaVenta" method="get">
                           {{-- @isset($propiedad->PROPIEDADES_ID) --}}
                               <input type="hidden" name="id" value="{{base64_encode($propiedad->PROPIEDADES_ID)}}">
                           {{-- @endisset --}}
                           <button type="submit">
                               <img style="width: 400px;height: 250px;" src="{{asset(Storage::url($propiedad->PROPIEDADES_IMAGEN))}}" alt="imagen invitado">
                           </button>
                         </form>
       
                           <p>{{$propiedad->PROPIEDADES_PRECIO}}</p>
                       </div>
                       <div class="texto" style="width: 400px;height: 250px;">
                           <h4><p>{{$propiedad->PROPIEDADES_TIPO.' en '.$propiedad->PROPIEDADES_OPERACION}}</p></h4>
                           <p>{{$propiedad->PROPIEDADES_CLAVE}}</p>
                           {{-- <p>{{$propiedad->PROPIEDADES_PRECIO}}</p> --}}
                           <p>{{$propiedad->ESTADOS_NOMBRE.', '.$propiedad->MUNICIPIOS_NOMBRE}}</p>
                           <p>{{$propiedad->PROPIEDADES_COLONIA}}</p>
                           <p>{{$propiedad->PROPIEDADES_ZONA}}</p> 
       
                           <nav class="iconos">
                               {{'Habs '.$propiedad->PROPIEDADES_HABITACIONES}}
                               <a ><i class="fas fa-person-booth"></i></a>
                               {{'Baño(s) '.$propiedad->PROPIEDADES_BAÑOS}}
                               <a ><i class="fas fa-toilet"></i></a>
                               {{$propiedad->PROPIEDADES_CONSTRUCCION}}
                               <a><i class="fas fa-home"></i></a>
                           </nav>
                       {{-- </div> --}}
                           <div class="botones">
                               {{-- <input type="submit" value="Enviar"> --}}
                               <form action="pdfjava" method="post">
                                   @csrf
                                   <input type="hidden" name="ide" value="{{$propiedad->PROPIEDADES_ID}}">
                                   <input type="submit" value="Descargar">
                               </form>
                               {{-- <!-- <a href="pdfjava/{{$propiedad->PROPIEDADES_ID}}">Descargar</a> --> --}}
                               {{-- <!-- <a onclick="Generar_pdf({{$propiedad->PROPIEDADES_ID}})">Descargar</a> --> --}}
                               {{-- <input type="submit" value="Contactar"> --}}
                               
       
                           </div>
                   </div>
               </li>
               @endforeach
               @endif
       
               
           </ul>
           
         </section>
         <div class="paginando">
           {{$propiedades->links()}}
         </div>