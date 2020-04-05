<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf</title>
    <style>
    .prcio{
        background-color: aqua;
        font-size: medium;
        margin-top: auto;
        padding: 3px;
        width: 70%; 
    }
    .clave{
        background-color: gray;
        font-size: medium;
        margin-top: auto;
        padding: 3px;
        width: 30%; 
    }
    </style>
</head>
<body>
    <h1>{{$propiedades[0]->PROPIEDADES_OPERACION}}  {{$propiedades[0]->PROPIEDADES_NOMBRE}}</h1>
<div>
    <div >
        <h1>
            {{$propiedades[0]->PROPIEDADES_PRECIO }}
        </h1>
    </div>

    <div class="clave">
        <h1>{{$propiedades[0]->PROPIEDADES_CLAVE}}</h1>
    </div>

</div>
<br>
<div>
<img style="width: 400px;height: 250px;" src="fotos/{{$propiedades[0]->PROPIEDADES_IMAGEN}}" alt="imagen invitado">
    <div>
    <h4>Datos generales:</h4>
    <p>
    Construcción: {{$propiedades[0]->PROPIEDADES_CONSTRUCCION}}
    <br>
    Terreno: {{$propiedades[0]->PROPIEDADES_TERRENOS}}
    <br>
    Habitaciones: {{$propiedades[0]->PROPIEDADES_HABITACIONES}}
    <br>
    Baños completos: {{$propiedades[0]->PROPIEDADES_BAÑOS}}
    <br>
    Medios baños: {{$propiedades[0]->PROPIEDADES_MEDIO_BAÑO}}
    </p>
    </div>
</div>
<div>
    <h5>Descripción</h5>
    <p>
        {{$propiedades[0]->PROPIEDADES_DESCRIPCION}}
        <br>
        <h5>N° NIVELES</h5>
        {{$propiedades[0]->PROPIEDADES_NIVELES}}
        <h5>N° ESTACIONAMIENTO</h5>
        {{$propiedades[0]->PROPIEDADES_ESTACIONAMIENTO}}
    </p>
</div>
    </body>
</html>