<?php
include("conexion.php");

$USUARIO=$_POST["txusuario"];
$PASSWORD=$_POST["txpassword"];
$PASSWORD=md5($PASSWORD);
$PATERNO=$_POST["ApPaterno"];
$MATERNO=$_POST["ApMaterno"];

$query = "INSERT INTO usuarios (nombre, apPaterno,apMaterno,login,password ) VALUES('$USUARIO', '$PATERNO','$MATERNO','$USUARIO','$PASSWORD')";

$queryVerificar = "SELECT * FROM usuarios WHERE login = '$usuario'";
    $ejecutarVerificacion = $conexion->prepare($queryVerificar);
    $ejecutarVerificacion->execute();

    if($ejecutarVerificacion->rowCount() > 0){
        echo '
            <script>
                alert("Este usuario ya está registrado");
                window.location = "registro.php";
            </script>
            ';
    }else{

        $ejecutarQuery = $conexion->prepare($query);
        $ejecutarQuery->execute();
    
        if($ejecutarQuery){
            echo '
            <script>
                alert("Usuario almacenado con exito!");
                window.location = "registro.php";
            </script>
            ';
            header("Location: index.php")
        }else{
            echo '
            <script>
                alert("Usuario NO almacenado, inténtelo de nuevo");
                window.location = "registro.php";
            </script>
            ';
        }
        
        $conexion=null;
    }
?>
