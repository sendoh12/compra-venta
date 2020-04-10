

<?php $__env->startSection('title', 'Inicio'); ?>


<link rel="stylesheet" type="text/css" href=" <?php echo e(asset('sider/css/estilos.css')); ?> ">
<link rel="stylesheet" type="text/css" href=" <?php echo e(asset('sider/css/font-awesome.css')); ?> ">
<?php $__env->startSection('content'); ?>


    <div class="captura ">
    	<div class="slideshow">
		<ul class="slider">
            <?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li>
				<img style="width: 100%; height: 400px;"  src="<?php echo e(asset(Storage::url($item->INICIO_NOMBRE))); ?>" alt="">
				<section class="caption">
					<h1>GupoLacer</h1>
					<p></p>
				</section>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	
		<div class="left">
			<span class="fa fa-chevron-left"></span>
		</div>

		<div class="right">
			<span class="fa fa-chevron-right"></span>
		</div>

	</div>

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
						<input type="tel" name="tel" class="form-control tipoletra" id="" placeholder="Telefono" minlength="2" maxlength="10" required>
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


			<div class="quienesSomos">
				<form id="filtro" action="Flitar_busquedad" method="post" class="col-md-10 col-md-offset-1 colorform">
					<?php echo csrf_field(); ?>
					<br>
					<button type="button" class="btn-3d" onclick="filtro()"> Filtro</button>
					<button type="button" class="btn-3d" onclick="clave()"> Clave</button>
					<br><br>
				<div>
					<div class="form-group">
						<label class="letra">Operacion</label>
						<select class="form-control" name="operacion" id="">
							<option value="Venta" selected="true">Venta</option>
                    		<option value="Renta">Renta</option>
						</select>
					</div>
					<div class="form-group">
						<label class="letra">Tipo de inmueble:</label>
						<select class="form-control" name="inmueble" id="">
							<option selected="true">Todos</option>
							<?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($item->TIPOS_ID); ?>"><?php echo e($item->TIPOS_NOMBRE); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					<div class="form-group">
						<label class="letra">Nombre</label>
						<input type="text" class="form-control tipoletra" name="nombre" placeholder="Nombre de la propiedad" minlength="2" maxlength="120"  required>
					</div>
					<button type="submit" class="btn-3d form-control">Buscar</button>
				</div>
				</form>
			<div id="clave" style="display:none;">
				<form action="Filtro_buscar_nombre" method="post" class="col-md-10 col-md-offset-1 colorform">
				<?php echo csrf_field(); ?>
				<br>
					<button type="button" class="btn-3d" onclick="filtro()"> Filtro</button>
					<button type="button" class="btn-3d" onclick="clave()"> Clave</button>
					<br><br>
					<div class="form-group">
						<label class="letra">Buscar por clave</label>
						<input type="text" class="form-control tipoletra" name="nombre1" placeholder="Nombre de 1la propiedad" minlength="2" maxlength="120"  required>
					</div>
					<button type="submit" class="btn-3d" style="align:right;">Buscar</button>

				</form>
			</div>
		</div>
	</div>

<?php echo $__env->make('plantillas.menu_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	</div>
	
	<script>
		function filtro() {
			document.getElementById('clave').style.display = 'none';
			document.getElementById('filtro').style.display = 'block';
		}
		
		function clave() {
			document.getElementById('clave').style.display = 'block';
			document.getElementById('filtro').style.display = 'none';
		}
	</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('PaginasInicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/lacer.blade.php ENDPATH**/ ?>