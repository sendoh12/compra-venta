

<?php $__env->startSection('title', 'Contacto'); ?>


<?php $__env->startSection('content'); ?>
<br>
    <div class="contacto">
        <div class="contenido">
			<div class="filtro">
			<?php if(count($errors) > 0): ?>
				<div class="alert alert-danger">
					<ul>
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><?php echo e($error); ?></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
        	<?php endif; ?>
				<form  action="contactos"  method="post" class="col-md-10 col-md-offset-1 colorform">
					<?php echo csrf_field(); ?>
					<br>
					
						<label class="letra">Contactanos</label>
					
					<br><br>
					<div class="form-group">
						<input type="text" name="nombre" class="form-control tipoletra" id="" placeholder="Nombre de la persona y apellidos"  minlength="2" maxlength="80"  required>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control tipoletra" id="" placeholder="Email" minlength="2" maxlength="80"  required>
					</div>
					<div class="form-group">
						<input type="tel" name="tel" class="form-control tipoletra" id="" placeholder="Telefono" minlength="2" maxlength="10" pattern="[0-9]{10}" required>
					</div>
					<div class="form-group">
						<input type="text" name="asunto" class="form-control tipoletra" id="" placeholder="Asunto" minlength="2" maxlength="120"  required>
					</div>
					<div class="form-group">
						<textarea class="form-control tipoletra" name="mesaje" id="" placeholder="Mensaje*" minlength="2" maxlength="1000"  required></textarea>
					</div>
						<button type="submit" class="btn-3d form-control">Enviar</button>
				</form>					
            </div>
        
    </div>

    

<?php echo $__env->make('plantillas.menu_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('PaginasInicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/portfolio.blade.php ENDPATH**/ ?>