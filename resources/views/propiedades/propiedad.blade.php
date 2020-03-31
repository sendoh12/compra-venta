@extends('Paginasinicio.inicio')

@section('title', 'Casa en venta')
    

<link rel="stylesheet" type="text/css" href=" {{asset('css/slicebox.css')}} " />
	<link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}" />
@section('content')
    {{-- <div class="images">
        @foreach ($propiedades as $prop)
        <img style="width: 400px;height: 250px; background:red;" src="fotos/{{$prop->IMAGENES_ARCHIVO}}">
            
        @endforeach
    </div> --}}
    
    
    <div class="container">

		

        {{-- <h1>Slicebox <span>A fresh 3D image slider with graceful fallback</span></h1> --}}
        
        

        <div class="wrapper" style="display:block">
            <button type="button" class="btn-3d" onclick="filtro()"> Fotos</button>
			<a href="/mapas/<?php echo $propiedades[0]->PROPIEDADES_ID.'/'.$propiedades[0]->PROPIEDADES_LATITUD.'/'.$propiedades[0]->PROPIEDADES_LONGITUD?>" class="btn-3d" > Mapa</a>

            <ul id="sb-slider" class="sb-slider" style="max-width: 1600px; overflow: hidden;">
                @foreach ($propiedades as $prop)
                    <li>
                        <a target="_blank"><img src="fotos/{{$prop->IMAGENES_ARCHIVO}}" alt="image1"/></a>
                        <div class="sb-description">
                            <h3>Bahia- puesta de sol</h3>
                        </div>
                    </li>
                @endforeach
               
            </ul>

            <div id="shadow" class="shadow"></div>

            <div id="nav-arrows" class="nav-arrows">
                <a href="#">Next</a>
                <a href="#">Previous</a>
            </div>

        </div>
        <div class="wrapper" style="display:none">
            <button>Fotos</button>
            <a href="">Mapa</a>
            

        </div>

        <div class="caracteristicas">
            <div class="description">
                <h3>Ubicacion</h3>
                    {{'Codigo '.$propiedades[0]->PROPIEDADES_CLAVE}} <br>
                    {{$propiedades[0]->PROPIEDADES_NOMBRE}} <br>
                    {{$propiedades[0]->PROPIEDADES_PAIS.', '}}
                    {{$propiedades[0]->ESTADOS_NOMBRE.', '}}
                    {{$propiedades[0]->MUNICIPIOS_NOMBRE.', '}}
                    {{$propiedades[0]->PROPIEDADES_COLONIA}}<br>
                    {{$propiedades[0]->PROPIEDADES_ZONA}}<br>
                    {{$propiedades[0]->PROPIEDADES_CP}}<br>
                    {{$propiedades[0]->PROPIEDADES_CALLE}}<br>
                <h3>Descripción</h3>
                    {{$propiedades[0]->PROPIEDADES_DESCRIPCION}}
                <h3>Datos Complementatios</h3>
                    {{'Estacionamientos '.$propiedades[0]->PROPIEDADES_ESTACIONAMIENTO}} <br>
                    {{'Niveles '.$propiedades[0]->PROPIEDADES_NIVELES}} <br>
                    {{'Construción '.$propiedades[0]->PROPIEDADES_CONSTRUCCION}} <br>
                    {{'Terreno '.$propiedades[0]->PROPIEDADES_TERRENOS}} <br>
                    {{'Año de construccion '.$propiedades[0]->PROPIEDADES_AÑO}}

            </div>
            <div class="datos">
                <form  class="form-horizontal col-md-8 col-md-offset-2 formprecio">
                    <br>
                    <label class="col-sm-9 control-label">
                        <h3>
                            {{'Casa en '.$propiedades[0]->PROPIEDADES_OPERACION}} <br>
                            {{$propiedades[0]->PROPIEDADES_PRECIO}}
                        </h3>
                        <nav class="iconospropied">
                            {{'Habs '.$propiedades[0]->PROPIEDADES_HABITACIONES}}
                            <a ><i class="fas fa-person-booth"></i></a>
                            {{'Baño(s) '.$propiedades[0]->PROPIEDADES_BAÑOS}}
                            <a ><i class="fas fa-toilet"></i></a>
                            {{$propiedades[0]->PROPIEDADES_CONSTRUCCION}}
                            <a><i class="fas fa-home"></i></a>
                        </nav>
                        
                    </label>
                    
                </form>

                

                <form  action="contactos"  method="post" class="col-md-8 col-md-offset-2 formcolor">
					@csrf
					<br>
					{{-- <div class="form-group"> --}}
						<label class="letra">Contactanos</label>
					{{-- </div> --}}
					<br><br>
					<div class="form-group">
						<input type="text" name="nombre" class="form-control tipoletra" id="" placeholder="Nombre de la persona y apellidos"  minlength="2" maxlength="80"  required>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control tipoletra" id="" placeholder="Email" minlength="2" maxlength="80"  required>
					</div>
					<div class="form-group">
						<input type="tel" name="tel" class="form-control tipoletra" id="" placeholder="Telefono" minlength="2" maxlength="10" required>
					</div>
					<div class="form-group">
						<input type="text" name="asunto" class="form-control tipoletra" id="" placeholder="Asunto" minlength="2" maxlength="120"  required>
					</div>
					<div class="form-group">
						<textarea class="form-control tipoletra" name="mesaje" id="" placeholder="Mensaje*" minlength="2" maxlength="1000"  required></textarea>
					</div>
						<button type="submit" class="btn-3d form-control">Contactar</button>
				</form>
                
            </div>
        </div>
        

        {{-- <p class="info"><strong>Example 3:</strong> Random orientation and number of slices</p> --}}

    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/modernizr.custom.46884.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.slicebox.js')}}"></script>
    <script type="text/javascript">
        $(function() {
            
            var Page = (function() {

                var $navArrows = $( '#nav-arrows' ).hide(),
                    $shadow = $( '#shadow' ).hide(),
                    slicebox = $( '#sb-slider' ).slicebox( {
                        onReady : function() {

                            $navArrows.show();
                            $shadow.show();

                        },
                        orientation : 'r',
                        cuboidsRandom : true
                    } ),
                    
                    init = function() {

                        initEvents();
                        
                    },
                    initEvents = function() {

                        // add navigation events
                        $navArrows.children( ':first' ).on( 'click', function() {

                            slicebox.next();
                            return false;

                        } );

                        $navArrows.children( ':last' ).on( 'click', function() {
                            
                            slicebox.previous();
                            return false;

                        } );

                    };

                    return { init : init };

            })();

            Page.init();

        });
    </script>
    

@endsection