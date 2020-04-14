
@include('plantillas.header')
@include('plantillas.menu')



    <meta name="csrf-token" content="{{ csrf_token() }}" />
    

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
          <div class="content-header row">
              <div class="content-header-left col-12 mb-2 mt-1">
                  <div class="row breadcrumbs-top">
                      <div class="col-12">
                          <h5 class="content-header-title float-left pr-1 mb-0">Imagenes de Inicio</h5>
                          <div class="breadcrumb-wrapper col-12">
                              <ol class="breadcrumb p-0 mb-0">
                                  
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="content-body">
              <div class="row">
               
              </div>
              <!-- Zero configuration table -->
              <section id="basic-datatable">
                  <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-header">
                              </div>
                              <div class="card-content">
                                  <div class="card-body card-dashboard">
                                      
                                      <div class="table-responsive">
                                          <table class="table zero-configuration">
                                              <thead>
                                                  <tr>
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody id="sortable">
                                                @foreach ($imagenes as $item)
                                                <tr>
                                                    <td> 
                                                        <div class="row ">
                                                            {{-- <div class="col-md-12"> --}}
                                                                <div class="col-md-2" >
                                                                    <img class="card-img-top " style="width:200px; height:150px;"  src="{{asset(Storage::url($item->INICIO_NOMBRE))}}" alt="">
                                                                  </div>  
                                                                  <div class="col-md-6" >
                                                                    <a href="EliminarImageninicio/<?= base64_encode($item->INICIO_ID)?>" class="btn btn-primary">Eliminar</a>
                                                                  </div>
                                                                
                                                                
                                                            {{-- </div> --}}
                                                            
                                                        </div>
                                                          
                                                    </td>
                                                </tr>
                        
                                                
                                            @endforeach
                                                
                                               
                                              </tbody>
                                              
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!--/ Zero configuration table -->
          </div>
      </div>
  </div>
  <!-- END: Content-->

 

      

@include('plantillas.footer')


<script>
    $( function() {
      $( "#sortable" ).sortable();
      $( "#sortable" ).disableSelection();
    } );
    </script>