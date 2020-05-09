{{-- <script src="/js/dist/jspdf.min.js"></script> --}}
@extends('PaginasInicio.inicio')

@section('title', 'Propiedades')


@section('content')
<link rel="stylesheet" type="text/css" href=" {{asset('sider/css/estilos.css')}} ">

<meta name="csrf-token" content="{{ csrf_token() }}" />
<br><br>
<div class="busqueda">
    <div class="quienesSomos">
            <fieldset>
                <legend>Buscar propiedad</legend>
                <div class="panel panel-default">
                    <div class="panel-body">

                        <button type="button" class="boton boton-azul" onclick="filtro()"> Filtro</button>
                        <button type="button" class="boton boton-azul" onclick="clave()"> Clave</button>
                        <div class="dropdown" style="float:left; margin-Right:5px;">
                                <button class="dropdown-toggle boton boton-azul" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Por precio
                                    <span class="caret"></span>
                                </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li>
                                            <a href="precios_0_a_1000">De $0 a $ 1,000</a>
                                        </li>
                                        <li>
                                            <a href="precios_1000_a_5000">De $1,000 a $5,000</a>
                                        </li>
                                        <li>
                                            <a href="Precios_5000_a_10000">De $5,000 a $10,000</a>
                                        </li>
                                        <li>
                                        <a href="precios_mayor_10000">Mas de $10,000</a>
                                        </li>
                                    </ul>
                                </div>
                    </div>
                </div>
<form action="Flitar_busquedad" method="post" class="contacto-busqueda">
            @csrf
        <div id="filtro">
            <div class="form-group">
                <label>Operacion</label>
                <select name="operacion" id="">
                    <option value="Venta" selected="true">Ventas</option>
                    <option value="Renta">Renta</option>
                </select>
            </div>
            <div class="form-group">
                <label >Tipo de inmueble:</label>
                <select name="inmueble" id="">
                    <option selected="true">(Todos)</option>
                    @foreach ($tipos as $item)
                        <option value="{{$item->TIPOS_ID}}">{{$item->TIPOS_NOMBRE}}</option>
                    @endforeach
                </select>
            </div>
            <div >
                <label>Nombre</label>
                <input class="boton-contacto" type="text" id="" name="nombre" placeholder="Nombre de la propiedad" required>
            </div>
            <button type="submit" class="boton boton-azul">Buscar</button>
        </form>
        </div>

        <div id="clave" style="display:none;">
        <form action="Filtro_buscar_nombre" method="post" class="contacto-propiedad">
            @csrf
                <label >Buscar por clave</label>
                <input class="boton-contacto" type="text" id="" name="clave" placeholder="Clave de la propiedad" required>
            <button  type="submit" class="boton boton-azul" style="align:right;">Buscar</button>
        </div>
        </form>
    </fieldset>
    </div>
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
							<input type="button" onclick="PasarClave({{$propiedad->PROPIEDADES_ID}})" data-toggle="modal" data-target="#exampleModalCenter" value="Contacto">

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

    {{-- SECCION DEL MODAL --}}
	 <!-- Modal -->
	 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<label for="">Propiedad de interes</label>
				<input type="text" class="form-control" name="ClavePropiedad" id="ClavePropiedad" disabled>
			</div>
			<div class="modal-body">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre" id="nombre" >
			</div>
			<div class="modal-body">
				<label for="">E-mail</label>
				<input type="email" class="form-control" name="email" id="email" >
			</div>
			<div class="modal-body">
				<label for="">Telefono</label>
				<input type="tel" class="form-control validar" name="telefono" id="telefono" >
			</div>
			<div class="modal-body">
				<label for="">Mensaje</label>
				<textarea name="mensaje" id="mensaje" class="form-control" cols="30" rows="10"></textarea>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			  <button type="button" onclick="EnviarContacto()" class="btn btn-primary">Enviar</button>
			</div>
		  </div>
		</div>
	  </div>
	  {{-- ACA TERMINA LA SECCION DEL MODAL --}}

</div>








  @include('plantillas.menu_footer')
  


  <script src="{{asset('js/dist/jspdf.min.js')}}"></script>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{asset('frest/js/sweetalert2.all.min.js')}}"></script>

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

{{-- parte del contacto --}}
	<script>
		function PasarClave(clave) {

			$.ajax({
				type: 'POST',
				url: "PropiedadClave",
				data: {clave:clave},
				dataType: 'json',
					success: function (response) {
						// console.log(response.arreglo[0].PROPIEDADES_CLAVE);
						$("#ClavePropiedad").val(response.arreglo[0].PROPIEDADES_CLAVE);
					}
				});
		}
		function EnviarContacto() {
			var ClavePropiedad = document.getElementById('ClavePropiedad').value;
			var nombre = document.getElementById('nombre').value;
			var email = document.getElementById('email').value;
			var telefono = document.getElementById('telefono').value;
            var mensaje = document.getElementById('mensaje').value;
            // console.log(mensaje);
			if(nombre == null || nombre == '') {
                  swal(
                      'Campo vacio',
                      'No has llenado el campo Nombre!',
                      'warning'
                   )

				}else if(email == null || email == '') {
				swal(
                      'Campo vacio',
                      'No has llenado el campo de Correo Electronico!',
                      'warning'
                   )
				}else if(telefono == null || telefono == '') {
				swal(
                      'Campo vacio',
                      'No has llenado el campo de Telefono!',
                      'warning'
                   )
				}else if(telefono.length < 10  || telefono.length > 10) {
				swal(
                      'Error',
                      'El telefono debe ser de 10 digitos!',
                      'warning'
                   )
				}else if(mensaje == null || mensaje == '') {
				swal(
                      'Campo vacio',
                      'No has llenado el campo de Mensaje!',
                      'warning'
                   )
				}
				else{
					$.ajax({
						cache:false,
						dataType:"json",
						type: 'POST',
						url:'contactos',
						data: {
							ClavePropiedad:ClavePropiedad,
							nombre:nombre, 
							email:email,
							telefono:telefono,
							mensaje:mensaje,
						},
							success: function(response){
								if(response.bandera == 1) {
									swal(
										'Correcto',
										'Tus datos han sido enviados...!',
										'success'
									)
									setTimeout(function(){location.reload(); }, 2000);
								}
							
							},

							beforeSend:function(){},
							error:function(objXMLHttpRequest){
								console.log(objXMLHttpRequest);
								swal(
										'Error',
										'Por favor ingrese un usuario valido, un correo valido, un numero de 10 digitos, un mensaje minimo de 10 caracteres',

										'warning'
									)
							}
					});
				}
        }
        

        // validar los campos de numeros
		function validarNumeros(evt){

            var iKeyCode = (evt.which) ? evt.which : evt.keyCode;
            if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57) && (iKeyCode < 96 || iKeyCode > 105))
            {
                evt.preventDefault();
                evt.stopPropagation();
                //  return false;
            }else{
                return true;
            }
            }
            $(document).ready(function () {

                $(".validar").on("keydown", function(evt){
                    console.log(evt);
                    let iKeyCode = (evt.which) ? evt.which : evt.keyCode;
                    console.log(iKeyCode);
                    if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57) && (iKeyCode < 96 || iKeyCode > 105))
                    {
                        console.log('no es numero');
                        return false;
                    }
                    return true;
                });  
            });
	</script>

@endsection

