/*$(document).ready(function(){

});*/

$( "#registro" ).on( "click", function() {
    // lo que queramos realizar
    var usuario  = $("#usuario").val();
    var correo  = $("#correo").val();
    var contrasena  = $("#password").val();

    if(usuario != "" || correo != "" || contrasena != "" ){
        $.ajax ({
            type:"post",
            ContentType: "application/x-www-form-urlencoded",
            url:"models/controlador/crudUsuario.php",
            data:"usuario="+usuario+"&correo="+correo+"&contrasena="+contrasena+"&type=insert",
            success:respuestaRegistro
           });
      }
      else{
          alert("Todos los campos son hobligatorios.");  
      } 

});


function respuestaRegistro(data){
    alert(""+data);
}