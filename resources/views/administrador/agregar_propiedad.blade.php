
@include('plantillas.header')
@include('plantillas.menu')

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        @yield('title')
        

         <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10 col-md-offset-1">
         

          {{-- aca se agregan los datos de la propiedad --}}

          <!-- Horizontal Form -->
          <div class="box box-succes" style="">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Propiedad</h3>
            </div> 

            <hr style="border-top: 1px solid #3c8dbc;">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="GuardarPropiedades" enctype="multipart/form-data">
              @csrf
              <div class="box-body">

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Nombre de propiedad*</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="propiedad" id="propiedad" placeholder="">
                  </div>
                </div>


                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Pais*</label>

                  <div class="col-sm-6">
                    {{-- <input type="text" class="form-control" name="" id="Pais" placeholder=""> --}}
                    <select name="pais" id="pais" class="form-control">
                      <option value="" selected>Mexico</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="Estado" class="col-sm-3 control-label">Estado*</label>

                  <div class="col-sm-6">
                    <select name="estado" id="estados" class="form-control" onchange="MostrarMunicipios()">
                      @foreach ($estados as $item)
                        <option value=" {{$item->ESTADOS_ID}} "> {{$item->ESTADOS_NOMBRE}} </option>
                      @endforeach
                    </select>
                    
                    {{-- <input type="text" class="form-control" name="Estado" id="Estado" placeholder=""> --}}
                  </div>
                </div>


                {{-- <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="file"  id="inputPassword3" placeholder="Password">
                  </div>
                </div> --}}

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Municipio/Delegación*</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="Municipio" id="Municipio">
                      <option value="" id="" ></option>
                    </select>
                    {{-- <input type="text" id="Municipio" name="Municipio" /> --}}
                    {{-- <input type="text" class="form-control" name="Municipio" id="Municipio" placeholder=""> --}}
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Colonia*</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="Colonia" id="Colonia" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Zona</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="Zona" id="Zona" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Código postal*</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="CodigoPostal" id="CodigoPostal" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Calle*</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="Calle" id="Calle" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Número exterior</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="NumeroExterior" id="NumeroExterior" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Número interior</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="NumeroInterior" id="NumeroInterior" placeholder="">
                  </div>
                </div>
                  <br><br><br>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Seleccionar Imagen</label>
                    <div class="col-sm-6">
                      <input type="file" class="" name="imagen" id="imagen" placeholder="">
                    </div>
                </div>
                <br><br><br>
                {{-- fin de agregar propiedad --}}



                {{-- aca empieza la de los datos generales de la propiedad --}}
                <div class="box-header with-border">
                  <h3 class="box-title">Generales</h3>
                </div> 

               <hr style="border-top: 1px solid #3c8dbc;">


               <div class="form-group">
                <label for="" class="col-sm-3 control-label">Tipo*</label>

                <div class="col-sm-6">
                  <select class="form-control" name="tipo" id="tipo" onchange="Opciones()">
                    @foreach ($tipos as $item)
                      <option value="{{$item->TIPOS_NOMBRE}}"> {{$item->TIPOS_NOMBRE}} </option>
                    @endforeach
                    
                  </select>
                </div>
              </div>


              {{-- casas --}}
              <div class="form-group " id="op1">
                <label for="" class="col-sm-3 control-label">Subtipo*</label>
                <div class="col-sm-6">
                  <select name="subtipo" id="subtipo" class="form-control">
                    <option value="Sola">Sola</option>
                    <option value="Condominio">Condominio</option>
                    <option value="Financiamiento">Financiamiento</option>
                  </select>
                </div>
              </div>

              <div class="form-group " id="op2">
                <label for="" class="col-sm-3 control-label">Operación*</label>
                <div class="col-sm-6">
                  <select name="operacion" id="operacion" class="form-control">
                    <option value="Venta">Venta</option>
                    <option value="Renta">Renta</option>
                  </select>
                </div>
              </div>

              <div class="form-group " id="op3">
                <label for="" class="col-sm-3 control-label">Precio*</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Precio" id="Precio" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op4">
                <label for="" class="col-sm-3 control-label">Habitaciones*</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Habitaciones" id="Habitaciones" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op5">
                <label for="" class="col-sm-3 control-label">Baños*</label>
                
                <div class="col-sm-6">
                  <div class="input-group">
                    <input type="text" class="form-control" name="Baños" id="Baños" placeholder="Baños Completos">
                    <span class="input-group-addon">-</span>
                    {{-- MEDIOS BAÑOS --}}
                    <input type="text" class="form-control" name="MediosBaños" id="MediosBaños" placeholder="Medios Baños">
                  </div>
                </div>
              </div>

              

              <div class="form-group " id="op6">
                <label for="" class="col-sm-3 control-label">Terreno*</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Terreno" id="Terreno" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op7">
                <label for="" class="col-sm-3 control-label">Construcción*</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Construcción" id="Construcción" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op8">
                <label for="" class="col-sm-3 control-label">Condición construcción</label>
                <div class="col-sm-6">
                  <select name="Condición" id="Condición" class="form-control">
                    <option value="Buena">Buena</option>
                    <option value="Media">Media</option>
                    <option value="Mala">Mala</option>
                  </select>
                  {{-- <input type="text" class="form-control" name="Condición" id="Condición" placeholder=""> --}}
                </div>
              </div>

              <div class="form-group" id="op9">
                <label for="" class="col-sm-3 control-label">Año de construcción</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Año" id="Año" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op10">
                <label for="" class="col-sm-3 control-label">Niveles</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Niveles" id="Niveles" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op11">
                <label for="" class="col-sm-3 control-label">Estacionamientos</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Estacionamientos" id="Estacionamientos" placeholder="">
                </div>
              </div>

              <div class="form-group " id="op12">
                <label for="" class="col-sm-3 control-label">Cuota de mantenimiento</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="cuota" id="cuota" placeholder="">
                </div>
              </div>
          {{-- fin de casas --}}


          
              <br><br><br>
              {{-- aca terminan los datos generales de la propiedad --}}





              {{-- descripcion de la propiedad --}}
              <div class="box-header with-border">
                <h3 class="box-title">Descripcion</h3>
              </div> 

             <hr style="border-top: 1px solid #3c8dbc;">

             <div class="form-group">
                <label for="" class="col-sm-3 control-label">Descripción</label>

                <div class="col-sm-6">
                  <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
                  {{-- <input type="text" class="form-control" name="Descripción" id="Descripción" placeholder=""> --}}
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Clave interna</label>

                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Clave" id="Clave" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Video</label>

                <div class="col-sm-6">
                  <input type="text" class="form-control" name="Video" id="Video" placeholder="">
                </div>
              </div>


                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                {{-- <button type="submit" class="btn btn-default">Cancel</button> --}}
                <button type="submit" class="btn btn-info pull-right">Guardar Cambios</button>
              </div>
              <!-- /.box-footer -->
            </form>
          {{-- </div> --}}
          <!-- /.box -->

        </div>
          <!-- /.box -->

     
    </div>
  </section>
    <!-- /.content-header -->
  
</div>  
</div>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          @yield('content')

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  

@include('plantillas.footer')

<script>
  $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  function MostrarMunicipios() {
    var valor = document.getElementById('estados').value;
    document.getElementById("Municipio").length=0;
    var Municipio = document.getElementById("Municipio");
    var element = [];
    var aTag = [];
    // console.log(valor);
        $.ajax({
            //async:true,
            cache:false,
            dataType:"json",
            type: 'POST',
            url:'AgregarMunicipio',
            data: {valor:valor},
            success:  function(response){
              // var arreglo = JSON.parse(response.mensaje);
              console.log(response.mensaje.length);
              j=0;
              for (let i = 0; i < response.mensaje.length; i++) {
                // var option = document.createElement("option");
                // option.innerHTML = response.mensaje[i].MUNICIPIOS_NOMBRE;
                // Municipio.appendChild(option);
                document.getElementById("Municipio").innerHTML += "<option value='"+response.mensaje[i].MUNICIPIOS_ID+"'>"
                                                                +response.mensaje[i].MUNICIPIOS_NOMBRE+"</option>";

              }
            
            },
            beforeSend:function(){},
            error:function(objXMLHttpRequest){}
        });

  }

  function Opciones() {
    var valor = document.getElementById('tipo').value;
    
    switch (valor) {
      case 'Casa':
          // Subtipo
          document.getElementById('op1').style.display = 'block';
          // Operación
          document.getElementById('op2').style.display = 'block';
          // Precio
          document.getElementById('op3').style.display = 'block';
          // Habitaciones
          document.getElementById('op4').style.display = 'block';
          // Baños
          document.getElementById('op5').style.display = 'block';
          // Terreno
          document.getElementById('op6').style.display = 'block';
          // Construcción
          document.getElementById('op7').style.display = 'block';
          // Condición construcción
          document.getElementById('op8').style.display = 'block';
          // Año de construcción
          document.getElementById('op9').style.display = 'block';
          // Niveles
          document.getElementById('op10').style.display = 'block';
          // Estacionamientos
          document.getElementById('op11').style.display = 'block';
          // Cuota de mantenimiento
          document.getElementById('op12').style.display = 'block';
      break;

      case 'Bodega':
          // Subtipo
          document.getElementById('op1').style.display = 'none';
          // Operación
          document.getElementById('op2').style.display = 'block';
          // Precio
          document.getElementById('op3').style.display = 'block';
          // Habitaciones
          document.getElementById('op4').style.display = 'block';
          // Baños
          document.getElementById('op5').style.display = 'block';
          // Terreno
          document.getElementById('op6').style.display = 'block';
          // Construcción
          document.getElementById('op7').style.display = 'block';
          // Condición construcción
          document.getElementById('op8').style.display = 'block';
          // Año de construcción
          document.getElementById('op9').style.display = 'block';
          // Niveles
          document.getElementById('op10').style.display = 'block';
          // Estacionamientos
          document.getElementById('op11').style.display = 'block';
          // Cuota de mantenimiento
          document.getElementById('op12').style.display = 'block';
      break;

      case 'Departamento':
          // Subtipo
          document.getElementById('op1').style.display = 'none';
          // Operación
          document.getElementById('op2').style.display = 'block';
          // Precio
          document.getElementById('op3').style.display = 'block';
          // Habitaciones
          document.getElementById('op4').style.display = 'block';
          // Baños
          document.getElementById('op5').style.display = 'block';
          // Terreno
          document.getElementById('op6').style.display = 'none';
          // Construcción
          document.getElementById('op7').style.display = 'block';
          // Condición construcción
          document.getElementById('op8').style.display = 'block';
          // Año de construcción
          document.getElementById('op9').style.display = 'block';
          // Niveles
          document.getElementById('op10').style.display = 'block';
          // Estacionamientos
          document.getElementById('op11').style.display = 'block';
          // Cuota de mantenimiento
          document.getElementById('op12').style.display = 'block';
      break;

      case 'Oficina':
          // Subtipo
          document.getElementById('op1').style.display = 'none';
          // Operación
          document.getElementById('op2').style.display = 'block';
          // Precio
          document.getElementById('op3').style.display = 'block';
          // Habitaciones
          document.getElementById('op4').style.display = 'block';
          // Baños
          document.getElementById('op5').style.display = 'block';
          // Terreno
          document.getElementById('op6').style.display = 'block';
          // Construcción
          document.getElementById('op7').style.display = 'block';
          // Condición construcción
          document.getElementById('op8').style.display = 'block';
          // Año de construcción
          document.getElementById('op9').style.display = 'block';
          // Niveles
          document.getElementById('op10').style.display = 'block';
          // Estacionamientos
          document.getElementById('op11').style.display = 'block';
          // Cuota de mantenimiento
          document.getElementById('op12').style.display = 'block';
      break;

      case 'Local':
          // Subtipo
          document.getElementById('op1').style.display = 'block';
          // Operación
          document.getElementById('op2').style.display = 'block';
          // Precio
          document.getElementById('op3').style.display = 'block';
          // Habitaciones
          document.getElementById('op4').style.display = 'block';
          // Baños
          document.getElementById('op5').style.display = 'block';
          // Terreno
          document.getElementById('op6').style.display = 'block';
          // Construcción
          document.getElementById('op7').style.display = 'block';
          // Condición construcción
          document.getElementById('op8').style.display = 'block';
          // Año de construcción
          document.getElementById('op9').style.display = 'block';
          // Niveles
          document.getElementById('op10').style.display = 'block';
          // Estacionamientos
          document.getElementById('op11').style.display = 'block';
          // Cuota de mantenimiento
          document.getElementById('op12').style.display = 'block';
      break;

      case 'Terreno':
          // Subtipo
          document.getElementById('op1').style.display = 'none';
          // Operación
          document.getElementById('op2').style.display = 'block';
          // Precio
          document.getElementById('op3').style.display = 'block';
          // Habitaciones
          document.getElementById('op4').style.display = 'none';
          // Baños
          document.getElementById('op5').style.display = 'none';
          // Terreno
          document.getElementById('op6').style.display = 'block';
          // Construcción
          document.getElementById('op7').style.display = 'none';
          // Condición construcción
          document.getElementById('op8').style.display = 'none';
          // Año de construcción
          document.getElementById('op9').style.display = 'none';
          // Niveles
          document.getElementById('op10').style.display = 'none';
          // Estacionamientos
          document.getElementById('op11').style.display = 'none';
          // Cuota de mantenimiento
          document.getElementById('op12').style.display = 'none';
      break;
    
      default:
        break;
    }

    

    

  }
</script>