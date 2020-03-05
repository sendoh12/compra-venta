$(document).ready(function(){

    $('#guardar-registro').on('submit', function(e){
        e.preventDefault();

        var datos = $(this).serializeArray();

        //crear el llamado a ajax
        $.ajax({
            //metodo que esta en el fomulario
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: datos,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var resultado = data;
                if(resultado.respuesta == 'exito'){
                    swal(
                        'Correcto',
                        'Se guardo correctamente!',
                        'success'
                      )
                }else{
                    swal(
                        'Error!',
                        'Hubo un error',
                        'error'
                      )
                }
            }
        });
    });


    //eliminar un registro
    $('.borrar_registro').on('click', function(e){
        e.preventDefault();

        var id = $(this).attr('data-id');
        var tipo = $(this).attr('data-tipo');
        var parametros = {
            "id" : id,
            "registro" : 'eliminar'
        };

        $.ajax({
            type:'post',
            data: parametros,
            url: 'modelo_admin.php',
            success: function(data){
                console.log(data);
            }
        });
    });



    $('#login-admin').on('submit', function(e){
        e.preventDefault();

        var datos = $(this).serializeArray();

        //crear el llamado a ajax
        $.ajax({
            //metodo que esta en el fomulario
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: datos,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                
                var resultado = data;
                if(resultado.respuesta == 'exitoso'){
                    swal(
                        'Login Correcto',
                        'Bienvenido@ ' +resultado.usuario+ ' !! ',
                        'success'
                      )
                      setTimeout(function(){
                        window.location.href = 'admin_area.php';
                      }, 2000);
                }else{
                    swal(
                        'Error!',
                        'Usuario o Password Incorrectos',
                        'error'
                      )
                }
                
                
            }
        });
    });
});

