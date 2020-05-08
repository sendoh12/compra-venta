
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    



    <title><?php echo $__env->yieldContent('title', 'inicio'); ?></title>
</head>

<body>   
    
    
    <?php echo $__env->make('parciales.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>        
    </div>
    
   
    
</body>
</html>



<?php /**PATH C:\xampp\htdocs\compra-venta\resources\views/PaginasInicio/inicio.blade.php ENDPATH**/ ?>