
@include('plantillas.header')
@include('plantillas.menu')



    <meta name="csrf-token" content="{{ csrf_token() }}" />
    

    <div class="content-wrapper">
      <br><br><br>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Imagenes de Inicio
            <small></small>
          </h1>
          
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
    
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                                <table id="registros" class="table table-bordered">
                                  <thead>
                                      <tr>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody id="sortable">
                                      @foreach ($imagenes as $item)
                                          <tr>
                                              <td> 
                                                  <div class="row ">
                                                      <div class="col-md-16">
                                                          <div class="card col-md-3" >

                                                              <img class="card-img-top " style="width:200px; height:150px;"  src="{{asset(Storage::url($item->INICIO_NOMBRE))}}" alt="">
                                                              <a href="EliminarImageninicio/<?= base64_encode($item->INICIO_ID)?>" class="btn btn-danger">Eliminar</a>
                                                              
                                                          </div>  
                                                          
                                                      </div>
                                                      
                                                  </div>
                                                    
                                              </td>
                                          </tr>
                  
                                          
                                      @endforeach
                                      
                                  </tbody>
                                
                                </table>
                  
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


<script>
    $( function() {
      $( "#sortable" ).sortable();
      $( "#sortable" ).disableSelection();
    } );
    </script>