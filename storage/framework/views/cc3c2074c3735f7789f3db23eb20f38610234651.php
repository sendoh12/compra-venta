

<?php $__env->startSection('title', 'Contact'); ?>


<?php $__env->startSection('content'); ?>
    <h1>Contact</h1>

    <form action="<?php echo e(route('contact')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input name="name" type="text" placeholder="Nombre del contacto..."><br>
        <input name="email" type="email" placeholder="Correo electronico..."><br>
        <input name="subject" placeholder="Asunto..."><br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="Mensaje..."></textarea><br>  
        <button>Enviar</button>      
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('PaginasInicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/contact.blade.php ENDPATH**/ ?>