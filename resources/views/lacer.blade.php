 @extends('PaginasInicio.inicio')

@section('title', 'Inicio')


{{-- <link rel="stylesheet" type="text/css" href=" {{asset('sider/css/estilos.css')}} ">
<link rel="stylesheet" type="text/css" href=" {{asset('sider/css/font-awesome.css')}} "> --}}
@section('content')

 			


<br>
		<section class="contenedor">
			<h1 class="fw-300 centrar-texto">¿Quiénes somos?</h1>
			<br>
			<div class="contenido-nosotros">
				<div class="imagen">
					<img src="{{asset('dist/img/nosotros.jpg')}}" alt="imagen sobre nosotros">
				</div>
				<div class="texto-nosotros">
					<blockquote>25 Años de Experiencia</blockquote>
					<p>
						Somos un grupo de profesionistas enfocados en apoyar 
						en la compra, venta o renta de su bien inmueble, con 
						el objetivo de satisfacer las necesidades inmobiliarias 
						de nuestros clientes. <br>

						Proin consequat viverra sapien, malesuada tempor tortor 
						feugiat vitae. In dictum felis et nunc aliquet molestie. 
						Proin tristique commodo felis, sed auctor elit auctor pulvinar.
						 Nunc porta, nibh quis convallis sollicitudin, arcu nisl 
						 semper mi, vitae sagittis lorem dolor non risus. Vivamus 
						 accumsan maximus est, eu mollis mi. Proin id nisl vel odio 
						 semper hendrerit. Nunc porta in justo finibus tempor. 
						 Suspendisse lobortis dolor quis elit suscipit molestie. 
						 Sed condimentum, erat at tempor finibus, urna nisi 
						 fermentum est, a dignissim nisi libero vel est. Donec 
						 et imperdiet augue. Curabitur malesuada sodales congue. 
						 Suspendisse potenti. Ut sit amet convallis nisi.
					</p>
				</div>
			</div>
		</section>
<br>
		<main class="seccion contenedor">
			<h2 class="fw-300 centrar-texto">Casas y Terrenos en Venta</h2>
			<br>
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
                {{-- <div class="paginando">
                    {{$propiedades->links()}}
                </div> --}}

			<div class="ver-todas">
				<!-- Accent-colored raised button with ripple -->  
			<a href="{{route('propiedades')}}" class="boton boton-verde ">Ver Todas</a>
			</div>
		</main>

		<br>
		<section class="imagen-contacto">
			<div class="contenedor contenido-contacto ">
				<h2>Encuentra la casa de tus sueños</h2>
				<p>
					Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad
				</p>
				<a href="{{ route('contacto') }}" class="boton boton-verde">Contactanos</a>
			</div>
		</section>

		<br>
		<div class="seccion-inferior contenedor seccion">
			<section class="blog">
				<h3 class="centrar-texto fw-300" >Nuestros Proyectos</h3>
				<br>
				<article class="entrada-blog">
					<div class="imagen">
						<img src="{{asset('dist/img/blog1.jpg')}}" alt="icono seguridad" />
					</div>
					<div class="texto-entrada">
						<a href="#">
							<h4>Terraza en el techo de tu casa</h4>
						</a>
						
					<p>Escrito el: <span>20/10/2019</span> por: <span>Admin</span> </p>
					<p>
						Consejos para construir una terraza en el
						techo de tu casa con los mejores materiaes y ahorro de dinero
					</p>
					</div>
					
				</article>
	
	
				<article class="entrada-blog">
					<div class="imagen">
						<img src="{{asset('dist/img/blog2.jpg')}}" alt="icono seguridad" />
					</div>
					<div class="texto-entrada">
						<a href="#">
							<h4>Guia para la decoracion de tu hogar</h4>
						</a>
						
						<p>Escrito el: <span>20/10/2019</span> por: <span>Admin</span></p>
						<p>
							Consejos para construir una terraza en el
							techo de tu casa con los mejores materiaes y ahorro de dinero
						</p>
					</div>
					
				</article>
	
			</section>
	
			
			<section class="testimoniales">
				<h3 class="centrar-texto fw-300">Testimoniales</h3>
				<br>
				<div class="testimonial">
					<blockquote>
						El personal se comporto de una excelente forma, muy buena atencion
						y la casa que me ofrecieron cumple con toas las expectativas
					</blockquote>
					<p>- Eduardo Cervantes</p>
				</div>
			</section>
		</div>




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
 
