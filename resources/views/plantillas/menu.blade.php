

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
  
    <header class="main-header">
      <!-- Logo -->
      <a href="../index.php" class="logo">
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
                <span class="hidden-xs">Hola: Admin</span>
              </a>
              <ul class="dropdown-menu">
               
               
              
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-success btn-flat">Ajustes</a>
                  </div>
                  <div class="pull-right">
                    <a href="salir" class="btn btn-success btn-flat">Cerrar Session</a>
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
            {{-- <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div> --}}
            <div class="info">
            <a href="#" class="d-block"><?=$usario['Nombre']?></a>
            </div>
          <?php endif;?>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Buscar...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Menu de administracion</li>
      {{-- <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i> <span>Ver administradores</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-plus-circle"></i> Dashboard </a></li>
        </ul>
      </li> --}}

      {{-- <li class="treeview">
        <a href="{{ route('home') }}">
          <i class="fa fa-files-o"></i>
          <span>Ver administradores</span>
        </a>
      </li> --}}

      <li class="nav-item ">
        <a href="{{ route('home') }}" class="nav-link ">
          <i class="fa fa-files-o "></i>
          <span>Ver administradores</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('Registro_usurio') }}" class="nav-link">
          <i class="nav-icon fas fa-th "></i>
          <span>Crear Administradores</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('administrador.agregar_propiedad') }}" class="nav-link">
          <i class="nav-icon fas fa-th "></i>
          <span>Agregar Propiedad</span>
        </a>
      </li>

      <!-- <li class="nav-item">
        <a href="{{ route('administrador.lista_propiedad') }}" class="nav-link">
          <i class="nav-icon fas fa-th "></i>
          <span>Lista de Propiedad</span>
        </a>
      </li> -->

        <a href="{{ route('administrador.ver_propiedades') }}" class="nav-link">
          <i class="nav-icon fas fa-th "></i>
          <span>Ver Propiedad</span>
        </a>
      </li>
      
      {{-- <li class="treeview">
        <a href="{{ route('administrador.ver_administradores') }}">
          <i class="fa fa-files-o"></i>
          <span>Agregar terrenos</span>
        </a>
      </li> --}}

      {{-- <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i>
          <span>Categoria Eventos</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-list-ul"></i> Ver Todos</a></li>
          <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
        <i class="fa fa-user-circle"></i>
          <span>Invitados</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-list-ul"></i> Ver Todos</a></li>
          <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
        <i class="fa fa-address-card"></i>
          <span>Registrados</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-list-ul"></i> Ver Todos</a></li>
          <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
        <i class="fa fa-user"></i>
          <span>Administradores</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="lista_admin.php"><i class="fa fa-list-ul"></i> Ver Todos</a></li>
          <li><a href="crear_admin.php"><i class="fa fa-plus-circle"></i> Agregar</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
        <i class="fa fa-comments"></i>
          <span>Testimoniales</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-list-ul"></i> Ver Todos</a></li>
          <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
        </ul>
      </li> --}}
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- =============================================== -->



<script>
  function Registrar() {
      location.href="Registro_usurio";
  }
  </script>