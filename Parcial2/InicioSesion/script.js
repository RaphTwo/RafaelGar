$(document).ready(function()
 {
                    $("#validar").click(function(){
                        var usuario=$('#usuario').val();
                        var contrasena=$('#contrasena').val();

                     if( usuario='admin' && contrasena=='1234') {
                        $('#myModal').modal('show');                                         
                       }
                     else {
                        $('.modal-body').html("Contraseña y/o usuario incorrecto");
                        $('#myModal').modal('show');
                                         }
              
             });
     
         });