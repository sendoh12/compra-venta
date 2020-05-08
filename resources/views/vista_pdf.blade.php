<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    




@if (count($propiedades)!=0)
    <div class="container">


        <h1 class="fw-300 centrar-texto">Datos de la propiedad</h1><br>
            <div class="row tamano-row">
              <div class="col-md-4">
                <div class="description">
                  <h1 class="fw-300 centrar-texto">{{'Casa en '.$propiedades[0]->PROPIEDADES_OPERACION}}</h1>
                        <div class="ubicacion">
                          <h3>Ubicacion</h3>
                          <p>{{$propiedades[0]->PROPIEDADES_CLAVE}}</p> 
                          <p>{{$propiedades[0]->PROPIEDADES_NOMBRE}}</p> 
                          <p>{{$propiedades[0]->PROPIEDADES_PAIS.', '.
                              $propiedades[0]->ESTADOS_NOMBRE.', '.
                              $propiedades[0]->MUNICIPIOS_NOMBRE.', '.
                              $propiedades[0]->PROPIEDADES_COLONIA}}</p>

                          <p>{{'Zona '.$propiedades[0]->PROPIEDADES_ZONA}}</p>
                          <p>{{'CP: '.$propiedades[0]->PROPIEDADES_CP}}</p>
                          <p>{{$propiedades[0]->PROPIEDADES_CALLE}}</p>

                          
                        </div>
                  </div>
              </div>
            </div>
            <br>
            <h1 class="fw-300 centrar-texto">Informacion completa</h1>

            <div class="row tamaño-cuadro">
              <div class="col-md-6">
                <div class="description">
                  <div class="ubicacion cambiar-des">
                    <h3>Descripción</h3>
                    {{-- <textarea class="descript" readonly> --}}
                       <p>{{$propiedades[0]->PROPIEDADES_DESCRIPCION}}</p> 
                    {{-- </textarea> --}}
                      
                  </div>
                  <div class="barra-azul">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="description">
                  <div class="ubicacion">
                    <h3>Datos Complementatios</h3>
                      <p>{{'Estacionamientos '.$propiedades[0]->PROPIEDADES_ESTACIONAMIENTO}}</p>
                      <p>{{'Niveles '.$propiedades[0]->PROPIEDADES_NIVELES}}</p>
                      <p>{{'Construción '.$propiedades[0]->PROPIEDADES_CONSTRUCCION}}</p> 
                      <p>{{'Terreno '.$propiedades[0]->PROPIEDADES_TERRENOS}}</p>
                      <p>{{'Año de construccion '.$propiedades[0]->PROPIEDADES_AÑO}}</p>
                  </div>
                  <div class="barra-azul">
                  </div>
                </div>
              </div>

            </div>

            <div class="col-md-8" align="center">
                @foreach ($propiedades as $prop)
                    @if (isset($prop->IMAGENES_ARCHIVO))
                        <div class="item ">
                            <img style="width: 400px;height: 250px;" src="{{asset(Storage::url($prop->IMAGENES_ARCHIVO))}}" alt="Los Angeles">
                            <br>
                        </div>
                    @endif
                @endforeach
            </div>
    </div>
    @endif
</body>
</html>
