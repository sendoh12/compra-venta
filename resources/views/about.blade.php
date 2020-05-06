{{-- <script src="/js/dist/jspdf.min.js"></script> --}}
@extends('PaginasInicio.inicio')

@section('title', 'Propiedades')


@section('content')
<link rel="stylesheet" type="text/css" href=" {{asset('sider/css/estilos.css')}} ">

<meta name="csrf-token" content="{{ csrf_token() }}" />
<br><br>
<div class="busqueda">
    <div class="quienesSomos">
        <form action="Flitar_busquedad" method="post" class="contacto-busqueda">
            <fieldset>
                <legend>Buscar propiedad</legend>
            
            @csrf
            <button type="button" class="boton boton-azul" onclick="filtro()"> Filtro</button>
            <button type="button" class="boton boton-azul" onclick="clave()"> Clave</button>
            <br><br>
        <div id="filtro">
            <div class="form-group">
                <label>Operacion</label>
                <select name="" id="">
                    <option value="Venta" selected="true">Venta</option>
                    <option value="Renta">Renta</option>
                </select>
                    
            </div>
            <div class="form-group">
                <label >Tipo de inmueble:</label>
                <select name="" id="">
                    <option selected="true">(Todos)</option>
                    @foreach ($tipos as $item)
                        <option value="{{$item->TIPOS_ID}}">{{$item->TIPOS_NOMBRE}}</option>
                    @endforeach
                </select>
            </div>
            <div >
                <label>Nombre</label>
                <input type="text" id="" placeholder="Nombre de la propiedad">
            </div>
            <button type="submit" class="boton boton-azul">Buscar</button>
        </form>
        </div>

        <div id="clave" style="display:none;">
        <form action="Flitar_busquedad" method="post" class="contacto-propiedad">
                <label >Buscar por clave</label>
                <input type="text" id="" placeholder="Nombre de la propiedad">
            <button type="submit" class="boton boton-azul" style="align:right;">Buscar</button>
        </div>
            
        </form>
    </fieldset>
    </div><br>

 </div> 
 
 <h2 class="fw-300 centrar-texto">Casas y Terrenos en Venta</h2> 
 {{-- seccion de propiedades --}}
 <div class="users">
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
                                    <p>{{$propiedad->PROPIEDADES_ESTACIONAMIENTO}}</p>
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

    
        
        
         
    </div>





  @include('plantillas.menu_footer')
  


  <script src="{{asset('js/dist/jspdf.min.js')}}"></script>

<script>
    $.ajaxSetup({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  </script>

  <script>
      $(document).on("click", ".pagination a", function(e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        
        $.ajax({
          type: 'GET',
          url: "propiedades",
          data: {page:page},
          dataType: 'json',
            success: function (response) {
              $('.users').html(response);
            }
        });


    });
  </script>

<script>
    function Generar_pdf(params) {
        var id_propiedad=params;
        var base_url='pdfjava/'+id_propiedad;
        var req =   new XMLHttpRequest();
        XMLHttpRequest.responseType = 'json';
        req.open('get',base_url,true);
        req.onreadystatechange = function (aEvt) {
            if (req.readyState == 4) {
                if(req.status == 200){
                    var propiedad = Array.from(JSON.parse(req.response));
                        var doc = new jsPDF();
                            doc.setLineWidth(1.5);
                            doc.line(20, 20, 180, 20);
                            doc.setFontSize(14);
                            doc.text(20, 30, propiedad[0].PROPIEDADES_NOMBRE );
                            //doc.addImage(data, 'JPEG', 10, 40, 180, 180);
                            doc.setProperties({
                                title: 'PROPIEDADES',
                                subject: 'VENTAS',
                                author: 'JOSE MANUEL SANCHEZ JUAREZ',
                                keywords: 'generated, javascript, web 2.0, ajax',
                                creator: 'MEEE'
                            });
                            doc.save('propiedad.pdf');
                }
                else{
                    dump("Error loading page\n");
                }
            }
        };
        req.send(null);
    }
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

