


<?php $__env->startSection('title', 'Propiedades'); ?>


<?php $__env->startSection('content'); ?>
<div class="captura ">
        
    <div class="slideshow">
        <ul class="slider">
            <?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <img style="width: 100%; height: 400px;"  src="inicio/<?=$item->INICIO_NOMBRE?>" alt="">
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

 
 <div class="busqueda">
    <div class="quienesSomos">
        <form action="Flitar_busquedad" method="post" class="col-md-10 col-md-offset-1 colorform">
            <?php echo csrf_field(); ?>
            <br> 
            <button type="button" class="btn-3d" onclick="filtro()"> Filtro</button>
            <button type="button" class="btn-3d" onclick="clave()"> Clave</button>
            <br><br>
        <div id="filtro">
            <div class="form-group">
                <label class="letra">Operacion</label>
                <select class="form-control letra" name="" id="">
                    <option value="Venta" selected="true">Venta</option>
                    <option value="Renta">Renta</option>
                </select>
                    
            </div>
            <div class="form-group">
                <label class="letra">Tipo de inmueble:</label>
                <select class="form-control" name="" id="">
                    <option selected="true">(Todos)</option>
                    <?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->TIPOS_ID); ?>"><?php echo e($item->TIPOS_NOMBRE); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label class="letra">Nombre</label>
                <input type="text" class="form-control tipoletra" id="" placeholder="Nombre de la propiedad">
            </div>
            <button type="submit" class="btn-3d form-control">Buscar</button>
        </form>
        </div>

        <div id="clave" style="display:none;">
        <form action="Flitar_busquedad" method="post" class="col-md-10 col-md-offset-1 colorform">
            <div class="form-group">
                <label class="letra">Buscar por clave</label>
                <input type="text" class="form-control tipoletra" id="" placeholder="Nombre de la propiedad">
            </div>
            <button type="submit" class="btn-3d" style="align:right;">Buscar</button>


        </div>
            
        </form>
    </div><br><br>

 </div> 


 
 <section class="invitados contenedor2 seccion">
    <h2>Propiedades</h2>
    <ul class="lista-invitados clearfix">
        <?php if(isset($propiedades)): ?>
        <?php $__currentLoopData = $propiedades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propiedad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <div class="invitado">
                <div class="etiqueta"><?php echo e($propiedad->PROPIEDADES_OPERACION); ?></div>
                

                <form action="CasaVenta" method="get">
                    
                        <input type="hidden" name="id" value="<?php echo e(base64_encode($propiedad->PROPIEDADES_ID)); ?>">
                    
                    <button type="submit">
                        <img style="width: 400px;height: 250px;" src="images/<?php echo e($propiedad->PROPIEDADES_IMAGEN); ?>" alt="imagen invitado">
                    </button>
                  </form>

                    <p><?php echo e($propiedad->PROPIEDADES_PRECIO); ?></p>
                </div>
                <div class="texto" style="width: 400px;height: 250px;">
                    <p><?php echo e($propiedad->PROPIEDADES_CLAVE); ?></p>
                    <p><?php echo e($propiedad->PROPIEDADES_NOMBRE); ?></p>
                    <p><?php echo e($propiedad->ESTADOS_NOMBRE.', '.$propiedad->MUNICIPIOS_NOMBRE); ?></p>
                    <p><?php echo e($propiedad->PROPIEDADES_COLONIA); ?></p>
                    <p><?php echo e($propiedad->PROPIEDADES_ZONA); ?></p> 

                    <nav class="iconos">
                        <?php echo e('Habs '.$propiedad->PROPIEDADES_HABITACIONES); ?>

                        <a ><i class="fas fa-person-booth"></i></a>
                        <?php echo e('Baño(s) '.$propiedad->PROPIEDADES_BAÑOS); ?>

                        <a ><i class="fas fa-toilet"></i></a>
                        <?php echo e($propiedad->PROPIEDADES_CONSTRUCCION); ?>

                        <a><i class="fas fa-home"></i></a>
                    </nav>
                
                    <div class="botones">
                        <a href="#">Enviar</a>
                        <form action="pdfjava" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="ide" value="<?php echo e($propiedad->PROPIEDADES_ID); ?>">
                            <input type="submit" value="Descargar">
                        </form>
                        <!-- <a href="pdfjava/<?php echo e($propiedad->PROPIEDADES_ID); ?>">Descargar</a> -->
                        <!-- <a onclick="Generar_pdf(<?php echo e($propiedad->PROPIEDADES_ID); ?>)">Descargar</a> -->
                        <a href="#">Contactar</a>
                        

                    </div>
            </div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        
    </ul>
    
  </section>
  


  <?php echo $__env->make('plantillas.menu_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('js/dist/jspdf.min.js')); ?>"></script>

<script>
    function Generar_pdf(params) {
        var id_propiedad=params;
        var base_url='pdfjava/'+id_propiedad;
        var req =   new XMLHttpRequest();
        XMLHttpRequest.responseType = 'json';
        req.open('get',base_url,true);
        req.onreadystatechange = function (aEvt) {
            if (req.readyState == 4) {
                if(req.status == 200){
                    var propiedad = Array.from(JSON.parse(req.response));
                        var doc = new jsPDF();
                            doc.setLineWidth(1.5);
                            doc.line(20, 20, 180, 20);
                            doc.setFontSize(14);
                            doc.text(20, 30, propiedad[0].PROPIEDADES_NOMBRE );
                            //doc.addImage(data, 'JPEG', 10, 40, 180, 180);
                            doc.setProperties({
                                title: 'PROPIEDADES',
                                subject: 'VENTAS',
                                author: 'JOSE MANUEL SANCHEZ JUAREZ',
                                keywords: 'generated, javascript, web 2.0, ajax',
                                creator: 'MEEE'
                            });
                            doc.save('propiedad.pdf');
                }
                else{
                    dump("Error loading page\n");
                }
            }
        };
        req.send(null);
    }
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


<?php echo $__env->make('PaginasInicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\compra-venta\resources\views/about.blade.php ENDPATH**/ ?>