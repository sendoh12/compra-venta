<div class="contenedor">
    <div class="container">
        <div class="row">
            @if(isset($propiedades))
            @foreach ($propiedades as $propiedad)
            <div class="col-md-4 propied">
                
                {{-- <div class="etiqueta">
                    {{$propiedad->PROPIEDADES_OPERACION}}
                </div> --}}

                <form action="CasaVenta" method="get">
                        <input type="hidden" name="id" value="{{base64_encode($propiedad->PROPIEDADES_ID)}}">
                    <div class="centrar-imagen">
                        <button style="width:94% ;height: 250px;" class="centrar-imagen" type="submit">
                            <img style="width:100% ;height: 250px;" src="{{asset(Storage::url($propiedad->PROPIEDADES_IMAGEN))}}" >
                        
                            <div class="texto-encima">
                                <p class="etiqueta">{{$propiedad->PROPIEDADES_OPERACION}}</p>
                            </div>
                        </button>
                        </div>
                </form>

                <div class="centrar-propiedad">
                    <div class="datos-propiedad">
                        <p>{{$propiedad->PROPIEDADES_PRECIO}}</p>
                        <h4><p>{{$propiedad->PROPIEDADES_TIPO.' en '.$propiedad->PROPIEDADES_OPERACION}}</p></h4>
                        <p>{{$propiedad->PROPIEDADES_CLAVE}}</p>
                        {{-- <p>{{$propiedad->PROPIEDADES_PRECIO}}</p> --}}
                        <p>{{$propiedad->ESTADOS_NOMBRE.', '.$propiedad->MUNICIPIOS_NOMBRE}}</p>
                        <p>{{$propiedad->PROPIEDADES_COLONIA}}</p>
                        <p>{{$propiedad->PROPIEDADES_ZONA}}</p> 
                        <ul class="iconos-caracteristicas">
                            <li>
                                <img src="{{asset('dist/img/icono_wc.svg')}}" alt="icono wc">
                                <p>{{$propiedad->PROPIEDADES_BAÑOS}}</p>
                            </li>
                            <li>
                                <img src="{{asset('dist/img/icono_estacionamiento.svg')}}" alt="icono wc">
                                <p>{{$propiedad->PROPIEDADES_CONSTRUCCION}}</p>
                            </li>
                            <li>
                                <img src="{{asset('dist/img/icono_dormitorio.svg')}}" alt="icono wc">
                                <p>{{$propiedad->PROPIEDADES_HABITACIONES}}</p>
                            </li>
                        </ul> 
                    </div>                        
                </div>
                <div class="centrar-funciones">

                    <div class="funciones">
                        {{-- ver propiedad --}}
                        <form action="CasaVenta" method="get">
                            <input type="hidden" name="id" value="{{base64_encode($propiedad->PROPIEDADES_ID)}}">
                            <input type="submit" value="Ver propiedad">
                        </form>   

                        {{-- contacto --}}
                            <input type="submit" value="Contacto">

                        {{-- descargar pdf --}}
                        <form action="pdfjava" method="post">
                            @csrf
                            <input type="hidden" name="ide" value="{{$propiedad->PROPIEDADES_ID}}">
                            <input type="submit" value="Descargar">
                        </form>
                        
                    </div>
                </div>

            </div>
            @endforeach
            @endif    
        </div>
    </div>
</div>
            <div class="paginando">
                {{$propiedades->links()}}
            </div>