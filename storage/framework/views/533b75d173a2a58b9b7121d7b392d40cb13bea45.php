<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    




<?php if(count($propiedades)!=0): ?>
    <div class="container">


        <h1 class="fw-300 centrar-texto">Datos de la propiedad</h1><br>
            <div class="row tamano-row">
              <div class="col-md-4">
                <div class="description">
                  <h1 class="fw-300 centrar-texto"><?php echo e('Casa en '.$propiedades[0]->PROPIEDADES_OPERACION); ?></h1>
                        <div class="ubicacion">
                          <h3>Ubicacion</h3>
                          <p><?php echo e($propiedades[0]->PROPIEDADES_CLAVE); ?></p> 
                          <p><?php echo e($propiedades[0]->PROPIEDADES_NOMBRE); ?></p> 
                          <p><?php echo e($propiedades[0]->PROPIEDADES_PAIS.', '.
                              $propiedades[0]->ESTADOS_NOMBRE.', '.
                              $propiedades[0]->MUNICIPIOS_NOMBRE.', '.
                              $propiedades[0]->PROPIEDADES_COLONIA); ?></p>

                          <p><?php echo e('Zona '.$propiedades[0]->PROPIEDADES_ZONA); ?></p>
                          <p><?php echo e('CP: '.$propiedades[0]->PROPIEDADES_CP); ?></p>
                          <p><?php echo e($propiedades[0]->PROPIEDADES_CALLE); ?></p>

                          
                        </div>
                  </div>
              </div>
            </div>
            <br>
            <h1 class="fw-300 centrar-texto">Informacion completa</h1>

            <div class="row tamaño-cuadro">
              <div class="col-md-6">
                <div class="description">
                  <div class="ubicacion cambiar-des">
                    <h3>Descripción</h3>
                    
                       <p><?php echo e($propiedades[0]->PROPIEDADES_DESCRIPCION); ?></p> 
                    
                      
                  </div>
                  <div class="barra-azul">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="description">
                  <div class="ubicacion">
                    <h3>Datos Complementatios</h3>
                      <p><?php echo e('Estacionamientos '.$propiedades[0]->PROPIEDADES_ESTACIONAMIENTO); ?></p>
                      <p><?php echo e('Niveles '.$propiedades[0]->PROPIEDADES_NIVELES); ?></p>
                      <p><?php echo e('Construción '.$propiedades[0]->PROPIEDADES_CONSTRUCCION); ?></p> 
                      <p><?php echo e('Terreno '.$propiedades[0]->PROPIEDADES_TERRENOS); ?></p>
                      <p><?php echo e('Año de construccion '.$propiedades[0]->PROPIEDADES_AÑO); ?></p>
                  </div>
                  <div class="barra-azul">
                  </div>
                </div>
              </div>

            </div>

            <div class="col-md-8" align="center">
                <?php $__currentLoopData = $propiedades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($prop->IMAGENES_ARCHIVO)): ?>
                        <div class="item ">
                            <img style="width: 400px;height: 250px;" src="<?php echo e(asset(Storage::url($prop->IMAGENES_ARCHIVO))); ?>" alt="Los Angeles">
                            <br>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </div>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Compra-venta\resources\views/vista_pdf.blade.php ENDPATH**/ ?>