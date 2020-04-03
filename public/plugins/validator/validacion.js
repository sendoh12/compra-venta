
$(document).ready(function(){

  $('#login').bootstrapValidator({
  excluded:[':not(select:hidden, input:visible, textarea:visible)'],
 feedbackIcons: {
   valid: 'fa fa-check',
   invalid: 'glyphicon glyphicon-remove',
   validating: 'glyphicon glyphicon-refresh'
 },
 fields: {
   email: {
     validators: {
       /*emailAddress: {
         message: 'El correo electronico no es valido'
       },*/
       notEmpty: {
         message: 'El correo es requerido'
       }
     }
   },
   passwd: {
     validators:{
       regexp:{
         regexp: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/g,
         message: "La contrsaeña debe tener por lo menos una mayuscula, un número y un minimo de 8 caracteres"
       },
       notEmpty: {
         message: "La contraseña no puede estar vacia"
       }
     }

   }

 }

});
});
