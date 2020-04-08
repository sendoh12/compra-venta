
@include('plantillas.header')
@include('plantillas.menu')

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script>
      .linea {
    display: inline-block;
    width: 100px;
}
    </script>

  <div class="content-wrapper">
    <br><br><br>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Listado de Propiedades
        <small></small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja las propiedades en esta sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form action="buscar" method="get" onsubmit="return showLoad()">
            <div class="panel-body">
                <label class="label-control">Nombre de Propiedad</label>
                <input type="text" name="busqueda" class="form-control" placeholder="Ingresar nombre de la Propiedad" required="required">
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-info">buscar</button>
            </div>
            </form>

              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Propiedades</th>
                  {{-- <th>Nombre</th>
                  <th>Acciones</th> --}}
                </tr>
                </thead>
                <?php
                // var_dump($url);
                // foreach ($url as $key => $value) {
                //   var_dump($value->pathPrefix);
                // }
                // die;
                ?>
                <tbody>
                    @foreach ($propiedades as $item)
                        <tr>
                            <td> 
                                <div class="row ">
                                    <div class="col-md-16">
                                        <div class="card col-md-3" >
                                            <img class="card-img-top " style="width:200px; height:100px;"  src="{{ Storage::url($item->PROPIEDADES_IMAGEN) }}" alt=""> 
                                        </div>
                                        <div class="col-md-6">
                                            {{$item->PROPIEDADES_NOMBRE}} <br>
                                            {{'Precio'.$item->PROPIEDADES_PRECIO}}
                                        </div>
                                        <div class="col-md-3">

                                            {{-- <a href="{{ route('Editar', $item->PROPIEDADES_ID) }}" class="btn bg-orange btn-flat ">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a> --}}
                                            <div class="linea col-md-3">
                                              <form action="Editar" method="get">
                                                <input type="hidden" name="id_propiedad" value="<?=base64_encode($item->PROPIEDADES_ID)?>">
                                                <button type="submit" class="btn bg-primary btn-flat linea" ><i class="fas fa-pencil-alt"> </i></button>
                                              </form>
                                            </div>
                                            

                                          {{-- <a href="#" class="btn bg-maroon btn-flat  ">
                                                <i class="fa fa-trash"></i>
                                            </a> --}}
                                            <div class="linea col-md-3">
                                              <form action="VerImagenes" method="get">
                                              <input type="hidden" name="id_propiedade" value="<?=base64_encode($item->PROPIEDADES_ID)?>">
                                              <button type="submit" class="btn bg-primary btn-flat  linea"><i class="fas fa-image"> </i></button>
                                              </form>
                                            </div>

                                            <div class="linea col-md-3">
                                              <a href="AgregarImagenes/<?=base64_encode($item->PROPIEDADES_ID)?>" data-id="" data-tipo="admin" class="btn bg-primary btn-flat  linea"> 
                                                <i class="fas fa-plus-circle"></i>
                                              </a>
                                            </div>
                                            <div class="linea col-md-3">
                                                  <a href="Eliminar_propiedade/<?=base64_encode($item->PROPIEDADES_ID)?>" class="btn bg-primary btn-flat  linea" >
                                                    <i class="fa fa-trash-o"></i>
                                                  </a>
                                            </div>
                                            {{-- <div class="linea col-md-3">
                                              <a href="/mapas/{{base64_encode($item->PROPIEDADES_ID)}}/{{base64_encode($item->PROPIEDADES_LATITUD)}}/{{base64_encode($item->PROPIEDADES_LONGITUD)}}" class ="btn bg-orange btn-flat margin">Mapa</a>
                                            </div> --}}

                                        </div>
                                    </div>
                                    
                                </div>
                                   
                            </td>
                        </tr>

                        
                    @endforeach
                    
                </tbody>
               
              </table>
              {{$propiedades->links()}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
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
