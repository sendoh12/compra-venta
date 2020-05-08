<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('dist/estilos/Normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/estilos/compra.css')); ?>">
    <title>GrupoLacer</title>
</head>
<body>

    <header class="contenedor logotipo-header ">
        <div class="row">
            <div class="col-md-3">
                <div class="logo-site">
                    <a href="<?php echo e(asset('/')); ?>">
                        <img style="width: 250px; height: 100px;" src="<?php echo e(asset('uploads/lacerInmovibiliaria.jpeg')); ?>" alt="logotipo">
                    </a>
                </div>

            </div>
            <div class="col-md-9">
                <div class="site-text">
                    <p><i class="fas fa-sms "></i> 
                        Escribenos a: arquitectura_inmobiliaria@grupolacer.com Telefono: 
                        <i class=" fas fa-phone-square "></i> 
                        229 118 7076 
                    </p>

                </div>
            </div>
        </div>
    </header>



        <nav id="menu" class="navbar navbar-default menu" role="navigation">
            <!-- El logotipo y el icono que despliega el menú se agrupan
                 para mostrarlos mejor en los dispositivos móviles -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse"
                      data-target=".navbar-ex1-collapse">
                <span class="sr-only">Desplegar navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a style="display: none" id="nombre-nav" class="navbar-brand" href="<?php echo e(asset('/')); ?>">
                <p>GrupoLacer</p>   
              </a>
            </div>
          
            <!-- Agrupar los enlaces de navegación, los formularios y cualquier
                 otro elemento que se pueda ocultar al minimizar la barra -->
            <div class="colapsar-menu">

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <div class="menu-nav">

                        <ul class="nav navbar-nav ">
            
                        <li class="<?php echo e(request()->routeIs('/') ? 'activo' : ''); ?>">
                            <a href="<?php echo e(route('/')); ?>">Inicio</a>
                        </li>
            
                        <li class="<?php echo e(request()->routeIs('propiedades') ? 'activo' : ''); ?>">
                            <a href="<?php echo e(route('propiedades')); ?>">Propiedades</a>
                        </li>
            
                        <li class="<?php echo e(request()->routeIs('contacto') ? 'activo' : ''); ?>">
                            <a href="<?php echo e(route('contacto')); ?>">Contacto</a>
                        </li>
            
                        <li class="<?php echo e(request()->routeIs('informes') ? 'activo' : ''); ?>">
                            <a href="#">Proyectos</a>
                        </li>
                        
                        </ul>
                    </div>
                </div>
            </div>
          </nav>






    
    
    <script src="<?php echo e(asset('dist/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('slider/js/jquery-3.1.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('slider/js/main.js')); ?>"></script>

    
    <script>
        var windowHeight = $(window).height();
        var barraAltura = $('#menu').innerHeight();
        console.log(barraAltura);
        
        // console.log(windowHeight);
        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            if(scroll > 100) {
                $('#menu').addClass('fixed');
                $('body').css({'margin-top':barraAltura+'px'});
            }else{
                $('#menu').removeClass('fixed');
                $('body').css({'margin-top':'0px'});
            }

        });

    </script>
    
    
</body>
</html><?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/parciales/nav.blade.php ENDPATH**/ ?>