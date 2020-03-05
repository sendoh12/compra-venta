
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
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Pais*</label>

                  <div class="col-sm-10">
                    {{-- <input type="text" class="form-control" name="" id="Pais" placeholder=""> --}}
                    <select name="pais" id="" class="form-control">
                      <option value="" selected>Mexico</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="Estado" class="col-sm-2 control-label">Estado*</label>

                  <div class="col-sm-10">
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
                  <label for="" class="col-sm-2 control-label">Municipio/Delegación*</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="Municipio" id="Municipio">
                      <option value="" id="Municipio" ></option>
                    </select>
                    {{-- <input type="text" id="Municipio" name="Municipio" /> --}}
                    {{-- <input type="text" class="form-control" name="Municipio" id="Municipio" placeholder=""> --}}
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Colonia*</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Colonia" id="Colonia" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Zona</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Zona" id="Zona" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Código postal*</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="CodigoPostal" id="CodigoPostal" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Calle*</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Calle" id="Calle" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Número exterior</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="NumeroExterior" id="NumeroExterior" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Número interior</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="NumeroInterior" id="NumeroInterior" placeholder="">
                  </div>
                </div><br><br><br>
                {{-- fin de agregar propiedad --}}



                {{-- aca empieza la de los datos generales de la propiedad --}}
                <div class="box-header with-border">
                  <h3 class="box-title">Generales</h3>
                </div> 

               <hr style="border-top: 1px solid #3c8dbc;">


               <div class="form-group">
                <label for="" class="col-sm-2 control-label">Tipo*</label>

                <div class="col-sm-10">
                  <select class="form-control" name="tipo" id="tipo">
                    <option value=""></option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Subtipo*</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Subtipo" id="Subtipo" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Operación*</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Operación" id="Operación" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Precio*</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Precio" id="Precio" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Habitaciones*</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Habitaciones" id="Habitaciones" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Baños*</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Baños" id="Baños" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Terreno*</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Terreno" id="Terreno" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Construcción*</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Construcción" id="Construcción" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">
                  Condición construcción
                  </label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Condición" id="Condición" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Año de construcción</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Año" id="Año" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Niveles</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Niveles" id="Niveles" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Estacionamientos</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Estacionamientos" id="Estacionamientos" placeholder="">
                </div>
              </div><br><br><br>
              {{-- aca terminan los datos generales de la propiedad --}}





              {{-- descripcion de la propiedad --}}
              <div class="box-header with-border">
                <h3 class="box-title">Descripcion</h3>
              </div> 

             <hr style="border-top: 1px solid #3c8dbc;">

             <div class="form-group">
                <label for="" class="col-sm-2 control-label">Descripción</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Descripción" id="Descripción" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Clave interna</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Clave" id="Clave" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Video</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Video" id="Video" placeholder="">
                </div>
              </div>


                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
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
</script>