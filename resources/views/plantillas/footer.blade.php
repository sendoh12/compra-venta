{{-- <footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b></b>
  </div>
  <strong> GrupoLacer Arquitectura Inmobiliaria  <a href=""> </a></strong> 
  
</footer> --}}


<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
  <p class="clearfix mb-0"><span class="float-left d-inline-block">GrupoLacer</span><span class="float-right d-sm-inline-block d-none"><i class="bx bxs-heart pink mx-50 font-small-3"></i><a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank"></a></span>
      {{-- <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button> --}}
  </p>
</footer>
<!-- END: Footer-->


{{-- scripts para cargar el plugin de multiples imagenes --}}
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.min.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- BEGIN: Vendor JS-->
    <script>
      var assetBaseUrl = "{{ asset('') }}";
  </script>
  <script src="{{asset('frest-full/vendors/js/vendors.min.js')}}"></script>
  <script src="{{asset('frest-full/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
  <script src="{{asset('frest-full/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
  <script src="{{asset('frest-full/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  @yield('vendor-scripts')
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="{{asset('frest-full/js/scripts/configs/vertical-menu-light.js')}}"></script>
  
  {{-- <script src="{{asset('js/scripts/configs/horizontal-menu.js')}}"></script> --}}
  
  <script src="{{asset('frest-full/js/core/app-menu.js')}}"></script>
  <script src="{{asset('frest-full/js/core/app.js')}}"></script>
  <script src="{{asset('frest-full/js/scripts/components.js')}}"></script>
  <script src="{{asset('frest-full/js/scripts/footer.js')}}"></script>
  <script src="{{asset('frest-full/js/scripts/customizer.js')}}"></script>
  <script src="{{asset('frest-full/assets/js/scripts.js')}}"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  @yield('page-scripts')
  <!-- END: Page JS-->


 
 <script src=" {{asset('frest/js/vendors.min.js')}} "></script>
 <script src=" {{asset('frest/js/LivIconsEvo.tools.js')}} "></script>
 <script src=" {{asset('frest/js/LivIconsEvo.defaults.js')}} "></script>
 <script src=" {{asset('frest/js/LivIconsEvo.min.js')}} "></script>

 <script src=" {{asset('frest/js/apexcharts.min.js')}} "></script>
 <script src=" {{asset('frest/js/dragula.min.js')}} "></script>

 <script src=" {{asset('frest/js/vertical-menu-light.js')}} "></script>
 <script src=" {{asset('frest/js/app-menu.js')}} "></script>
 <script src=" {{asset('frest/js/app.js')}} "></script>
 <script src=" {{asset('frest/js/components.js')}} "></script>
 <script src=" {{asset('frest/js/customizer.min.js')}} "></script>
 <script src=" {{asset('frest/js/documentation.min.js')}} "></script>
 <script src=" {{asset('frest/js/footer.js')}} "></script>

 <script src=" {{asset('frest/js/dashboard-analytics.min.js')}} "></script>
 <script src=" {{asset('frest/js/dashboard-analytics.js')}} "></script>
 <script src=" {{asset('frest/js/widgets.min.js')}} "></script>
 <script src=" {{asset('frest/js/datatable.min.js')}} "></script>
 <script src="{{asset('frest/js/sweetalert2.all.min.js')}}"></script>

{{-- </div> --}}



      


<!-- ./wrapper -->
<script src=" {{asset('plugins/jquery/jquery.min.js')}} "></script>
<!-- jQuery 3 -->
<script src=" {{asset('dist/js/jquery.min.js')}} "></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('dist/js/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('dist/js/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
{{-- <script src="{{asset('dist/js/sweetalert2.min.js')}}"></script> --}}
{{-- <script src="{{asset('dist/js/sweetalert2.all.min.js')}}"></script> --}}
<script src="{{asset('dist/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dist/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('dist/js/admin-ajax.js')}}"></script>

<script src="{{asset('alertifyjs/alertify.js')}}"></script>


<script type="text/javascript" src="{{asset('js/modernizr.custom.46884.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.slicebox.js')}}"></script>







    <script type="text/javascript" src="{{ asset('css/plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('css/plugins/jQueryUI/jquery-ui.1.11.2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('css/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{ asset('css/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('css/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('css/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{ asset('css/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{ asset('Scripts/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('css/dist/js/app.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" href="{{ asset('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}" />
    <script type="text/javascript" src="{{ asset('bower_components/moment/min/moment.min.js')}} "></script>
    <script type="text/javascript" src="{{ asset('bower_components/moment/locale/es.js')}} "></script>
    <script type="text/javascript" src="{{ asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

   
</body>
</html>

