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
    <header class="site-header inicio">
        <div class="contenedor">
            <div class="barra">
                <a href="<?php echo e(asset('/')); ?>">
                    <img style="width: 250px; height: 100px;" src="<?php echo e(asset('uploads/lacerInmovibiliaria.jpeg')); ?>" alt="logotipo">
                </a>
                <p><i class="fas fa-sms "></i> 
                    Escribenos a: arquitectura_inmobiliaria@grupolacer.com Telefono: 
                    <i class=" fas fa-phone-square "></i> 
                    229 118 7076 
                </p>
            </div> 
            
        </div>
    </header>

    
    <div class="menu ">
        <div class="navegacion-principal fw-700 contenedor ">
            <nav class="navegacion">
                <a href="<?php echo e(route('/')); ?>">Inicio </a>
                <a href="<?php echo e(route('propiedades')); ?>">Propiedades </a>
                <a href="<?php echo e(route('contacto')); ?>">Contacto</a>
                
                <a href="#">Proyectos </a>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
                <!-- aqui insertaremos el slider -->
                <div id="carousel1" class="carousel slide" data-ride="carousel">
                    <!-- Indicatodores -->
                    <ol class="carousel-indicators">
                        <?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($key == 0): ?>
                                <li data-target="#carousel1" data-slide-to="<?php echo e($key); ?>" class="active"></li>
                            <?php else: ?>
                                <li data-target="#carousel1" data-slide-to="<?php echo e($key); ?>"></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                
                    <!-- Contenedor de las imagenes -->
                    <div class="ajustar-slider">
                        <div class="carousel-inner" role="listbox">
                            
                            <?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($key == 0): ?>
                                    <div class="item active">
                                        <img style="width: 100%; height: 500px;" src="<?php echo e(asset(Storage::url($item->INICIO_NOMBRE))); ?>" alt="Imagen 1">
                                        <div class="carousel-caption"></div>
                                    </div>
                                <?php else: ?>
                                    <div class="item">
                                        <img style="width: 100%; height: 500px;" src="<?php echo e(asset(Storage::url($item->INICIO_NOMBRE))); ?>" alt="Imagen 2">
                                        <div class="carousel-caption"></div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                
                </div>
                
            
            </div>
        </div>
    </div>
   
      
      

    

    
    
    <script src="<?php echo e(asset('dist/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('slider/js/jquery-3.1.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('slider/js/main.js')); ?>"></script>

    
    
</body>
</html><?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/parciales/nav.blade.php ENDPATH**/ ?>