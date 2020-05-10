@include('plantillas.header')
@include('plantillas.menu')
<meta Name="csrf-token" content="{{csrf_token()}}">

<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
      <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
              <div class="row breadcrumbs-top">
                  <div class="col-12">
                      <h5 class="content-header-title float-left pr-1 mb-0">Capturar Imagenes</h5>
                      <div class="breadcrumb-wrapper col-12">
                          <ol class="breadcrumb p-0 mb-0">
                              {{-- <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                              </li>
                              <li class="breadcrumb-item"><a href="#">Form Elements</a>
                              </li>
                              <li class="breadcrumb-item active">Input
                              </li> --}}
                          </ol>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="content-body">
          <!-- Basic Inputs start -->
          <section id="basic-input">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Capture las imagenes para la pagina de inicio</h4>
                          </div>
                          <form id="" class="" action="{{route('InsertarInicio')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                          <div class="card-content">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <fieldset class="form-group">
                                              <label for="basicInput">Seleccionar Imagenes</label>
                                              <input type="file" class="form-control" name="imagen[]" id="imagen" required placeholder="" multiple>
                                          </fieldset>

                                          <div class="box-footer" align="right">
                                            <button  type="submit" class="btn btn-info ">Guardar Cambios</button>
                      
                                          </div>

                                  
                                      </div>
                                      
                                  </div>
                              </div>
                          </div>
                        </form>
                      </div>
                  </div>
              </div>
          </section>
          <!-- Basic Inputs end -->

          
         
          <!-- Tooltip validations end -->

      </div>
  </div>
</div>
<!-- END: Content-->

  @include('plantillas.footer')