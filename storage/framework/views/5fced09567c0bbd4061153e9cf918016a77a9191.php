
    

<link rel="stylesheet" href="<?php echo e(asset('dist/estilos/styles.css')); ?>">



<div class="principal">

</div>

    <div class="telefono center-block">
    <h4><i class="fas fa-sms "></i> Escribenos a: arquitectura_inmobiliaria@grupolacer.com Telefono: <i class=" fas fa-phone-square "></i> 229 118 7076 </h4>
    </div>
    
    <div class="informes center-block">
        <div class="log">
            <img class="iman" src=" <?php echo e(asset('uploads/lacerInmovibiliaria.jpeg')); ?>" alt="">
        </div>
        <div class="inf">
        <h4><i class="fas fa-sms "></i> Escribenos a: arquitectura_inmobiliaria@grupolacer.com <br> Telefono: <i class=" fas fa-phone-square "></i> 229 118 7076 </h4>
        </div>
    </div>

    

    <nav class="navbar navbar-inverse center-block">
        <div class=" container-fluid principal ">
            

                <ul class="nav navbar-nav ">
                    
                    <li class="<?php echo e(request()->routeIs('lacer') ? 'activo' : ''); ?> ">
                        <a href=" <?php echo e(route('lacer')); ?>"> <i class=" fas fa-home "></i> Inicio </a>
                    </li>

                    <li class="<?php echo e(request()->routeIs('about') ? 'activo' : ''); ?>">
                        <a href="<?php echo e(route('about')); ?>"> <i class=" fas fa-landmark "></i> Propiedades </a>
                    </li>

                    <li class="<?php echo e(request()->routeIs('portfolio') ? 'activo' : ''); ?>">
                        <a href="<?php echo e(route('portfolio')); ?>"> <i class=" fas fa-id-badge "></i> Contacto </a>
                    </li>

                    <li class="<?php echo e(request()->routeIs('contact') ? 'activo' : ''); ?>">
                        
                    </li>

                    <li class="<?php echo e(request()->routeIs('informes') ? 'activo' : ''); ?>">
                        
                        <a href="#"> <i class=" fas fa-info-circle "></i> Proyectos </a>

                    </li>

                </ul>
        
        </div>
    </nav> 

    <script src="<?php echo e(asset('slider/js/jquery-3.1.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('slider/js/main.js')); ?>"></script>


<?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/parciales/nav.blade.php ENDPATH**/ ?>