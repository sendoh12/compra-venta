

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
  
    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>RQ</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Grupo</b>Lacer</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
  
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php
                if (session()->has('admin')):
                  $usario=session()->get('admin');
                  
                  ?>
                  <div class="info">
                  <span class="hidden-xs">Hola: <?=$usario['Nombre']?></span>
                  </div>
                <?php endif;?>
              </a>
              <ul class="dropdown-menu">
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-success btn-flat">Ajustes</a>
                  </div>
                  <div class="pull-right">
                    <a href="salir" class="btn btn-defalut btn-flat">Cerrar Session</a>
                  </div>
                </li>
              </ul>
            </li>
            
          </ul>
        </div>
      </nav>
    </header>
  
    <!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      
      <div class=" info">
        <?php if (session()->has('admin')):
            $usario=session()->get('admin');?>
            
            <div class="info">
            <a href="#" class="d-block"><?=$usario['Nombre']?></a>
            </div>
          <?php endif;?>
      </div>
    </div>
    <!-- search form -->
    
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Menu de administracion</li>
      

      

      <li class="nav-item ">
        <a href="<?php echo e(route('administrador.captura_imagenes')); ?>" class="nav-link ">
          <i class="fas fa-image "></i>
          <span> Capturar Imagenes</span>
        </a>
      </li>

      <li class="nav-item ">
        <a href="<?php echo e(route('administrador.lista_imginicio')); ?>" class="nav-link ">
          <i class="fas fa-eye "></i>
          <span> Imagenes de Inicio</span>
        </a>
      </li>

      <li class="nav-item ">
        <a href="<?php echo e(route('home')); ?>" class="nav-link ">
          <i class="fas fa-eye "></i>
          <span>Ver administradores</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('Registro_usurio')); ?>" class="nav-link">
          <i class="fas fa-plus-circle"></i>
          <span>Crear Administradores</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('administrador.agregar_propiedad')); ?>" class="nav-link">
          <i class="fas fa-plus-circle"></i>
          <span>Agregar Propiedad</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('administrador.ver_propiedades')); ?>" class="nav-link">
          <i class="fas fa-eye "></i>
          <span>Ver Propiedad</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('VerContactos')); ?>" class="nav-link">
          <i class="fas fa-eye "></i>
          <span>Ver Contactos</span>
        </a>
      </li>

      
      
      
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- =============================================== -->



<script>
  function Registrar() {
      location.href="Registro_usurio";
  }
  </script><?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/plantillas/menu.blade.php ENDPATH**/ ?>