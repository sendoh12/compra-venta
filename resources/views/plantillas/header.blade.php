


{{-- <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GrupoLacer</title> --}}

  <!DOCTYPE html>
  <html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
      <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
      <meta name="author" content="PIXINVENT">
      <title>Dashboard Ecommerce - Frest - Bootstrap HTML admin template</title>
      <link rel="apple-touch-icon" href="{{asset('frest/ico/6.png')}}">
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('frest/ico/favicon.ico')}}">

      {{-- style blade file --}}
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('frest-full/vendors/css/vendors-rtl.min.css')}}">
    @yield('vendor-styles')
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('frest-full/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frest-full/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frest-full/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frest-full/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frest-full/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frest-full/css/themes/semi-dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frest-full/css/custom-rtl.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/core/menu/menu-types/horizontal-menu.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('frest-full/css/core/menu/menu-types/vertical-menu.css')}}">
    @yield('page-styles')
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('frest-full/assets/css/style-rtl.css')}}">
    <!-- END: Custom CSS-->

  
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/vendors.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/apexcharts.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/dragula.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/flag-icon.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/boxicons.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/animate.css')}}">
      
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/bootstrap.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/bootstrap-extended.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/colors.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/components.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/dark-layout.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/semi-dark-layout.css')}}">

      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/vertical-menu.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/dashboard-analytics.css')}}">
      {{-- <link rel="stylesheet" type="text/css" href="{{asset('frest/css/dashboard-analytics.min.css')}}"> --}}
 
      {{-- <link rel="stylesheet" type="text/css" href="{{asset('frest/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/widgets.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/animate.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/app-calendar.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/app-chat.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/app-email.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/app-invoice.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/app-todo.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/boxicons.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/boxicons.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/context-menu.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/dashboard-analytics.min.css')}}"> --}}
      {{-- <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/dashboard-ecommerce.min.css')}}"> --}}
      {{-- <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/dropzone.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/flag-icon.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/form-validation.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/page-knowledge-base.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/page-user-profile.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/page-users.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/tour.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/wizard.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/flag-icon-more.scss')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/flag-icon-list.scss')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/fuentes/flag-icon-base.scss')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frest/css/sweetalert2.min.css')}}"> --}}



  <!-- Google Font -->
  {{-- {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> --}}

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet"> 

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}



  {{-- <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('dist/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/font-awesome.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/ionicons.min.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('dist/css/sweetalert2.min.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('dist/css/admin.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

 
    <link rel="stylesheet" type="text/css" href=" {{asset('css/dist/css/font-awesome.min.css')}} ">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/dist/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dist/css/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/datatables/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/datatables/dataTables.responsive.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/dist/css/AdminLTE.min.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/dist/css/AdminLTE.css')}} "> --}}
    
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/dist/css/AdminLTE1.css')}}"> --}}
    
    {{-- ruta que le da los estilos de examen --}}
    {{-- <link rel="stylesheet" type="text/css" href=" {{asset('css/dist/css/skins/_all-skins.min.css')}} "> --}}
    {{-- <link rel="stylesheet" type="text/css" href=" {{asset('css/plugins/iCheck/flat/blue.css')}} ">
    <link rel="stylesheet" type="text/css" href=" {{asset('css/plugins/morris/morris.css')}} ">
    <link rel="stylesheet" type="text/css" href=" {{asset('css/plugins/datepicker/datepicker3.css')}} ">
    <link rel="stylesheet" type="text/css" href=" {{asset('css/plugins/daterangepicker/daterangepicker-bs3.css')}} ">
    <link rel="stylesheet" type="text/css" href=" {{asset('css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}} ">
    <link rel="stylesheet" type="text/css" href=" {{asset('css/plugins/fullcalendar/fullcalendar.css')}} ">
    <link rel="stylesheet" type="text/css" href=" {{asset('css/plugins/fullcalendar/fullcalendar.print.css')}} ">

    <link rel="stylesheet" type="text/css" href=" {{asset('alertifyjs/css/alertify.css')}} ">
    <link rel="stylesheet" type="text/css" href=" {{asset('alertifyjs/css/themes/default.css')}} "> --}}

    

</head>