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

 {{-- seccion para la busqueda --}}
 <div class="busqueda">
    <div class="quienesSomos">
        <form action="Flitar_busquedad" method="post" class="col-md-10 col-md-offset-1 colorform">
            @csrf
            <br> 
            <button type="button" class="btn-3d" onclick="filtro()"> Filtro</button>
            <button type="button" class="btn-3d" onclick="clave()"> Clave</button>
            <br><br>
        <div id="filtro">
            <div class="form-group">
                <label class="letra">Operacion</label>
                <select class="form-control letra" name="" id="">
                    <option value="Venta" selected="true">Venta</option>
                    <option value="Renta">Renta</option>
                </select>
                    
            </div>
            <div class="form-group">
                <label class="letra">Tipo de inmueble:</label>
                <select class="form-control" name="" id="">
                    <option selected="true">(Todos)</option>
                    @foreach ($tipos as $item)
                        <option value="{{$item->TIPOS_ID}}">{{$item->TIPOS_NOMBRE}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="letra">Nombre</label>
                <input type="text" class="form-control tipoletra" id="" placeholder="Nombre de la propiedad">
            </div>
            <button type="submit" class="btn-3d form-control">Buscar</button>
        </form>
        </div>

        <div id="clave" style="display:none;">
        <form action="Flitar_busquedad" method="post" class="col-md-10 col-md-offset-1 colorform">
            <div class="form-group">
                <label class="letra">Buscar por clave</label>
                <input type="text" class="form-control tipoletra" id="" placeholder="Nombre de la propiedad">
            </div>
            <button type="submit" class="btn-3d" style="align:right;">Buscar</button>


        </div>
            
        </form>
    </div><br><br>

 </div> 


 {{-- seccion de propiedades --}}
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
                        <img style="width: 400px;height: 250px;" src="images/{{$propiedad->PROPIEDADES_IMAGEN}}" alt="imagen invitado">
                    </button>
                  </form>

                    <p>{{$propiedad->PROPIEDADES_PRECIO}}</p>
                </div>
                <div class="texto" style="width: 400px;height: 250px;">
                    <p>{{$propiedad->PROPIEDADES_CLAVE}}</p>
                    <p>{{$propiedad->PROPIEDADES_NOMBRE}}</p>
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
                        <a href="#">Enviar</a>
                        <a href="#">Descargar</a>
                        <a href="#">Contactar</a>
                        

                    </div>
            </div>
        </li>
        @endforeach
        @endif

        
    </ul>
    
  </section>
  


  @include('plantillas.menu_footer')

  <script>
    function filtro() {
        document.getElementById('clave').style.display = 'none';
        document.getElementById('filtro').style.display = 'block';
    }
    
    function clave() {
        document.getElementById('clave').style.display = 'block';
        document.getElementById('filtro').style.display = 'none';
    }
</script>
@endsection