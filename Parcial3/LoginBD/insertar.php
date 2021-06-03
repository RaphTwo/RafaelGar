<?php
include('conexion.php')
session_start();
if(isset($_POST['btningresar2']))
{
    $queryVerificar = "SELECT * FROM USUARIO WHERE user = '$usuario'";
    $ejecutarVerificacion = $conexion->prepare($queryVerificar);
    $ejecutarVerificacion->execute();
    if($ejecutarVerificacion)
    {
$nombre = $_POST['Nombre'];
$ApPaterno = $_POST['ApPaterno'];
    $ApMaterno = $_POST['ApMaterno'];
    $Usuario = $_POST['txtusuerio'];
    $Contra = $_POST['txtpassword'];


    $queryInsertar = "INSERT INTO usuarios (nombre, appaterno, apmaterno, login, password) 
                                        VALUES('$nombre', '$nombre', '$ApPaterno', '$ApMaterno', '$Usuario', '$Contra')";
    $ejecutarInsertar = $conexion->prepare($queryInsertar);
    $ejecutarInsertar->execute();

    if ($ejecutarInsertar) {
        $_SESSION['nombredelusuario']=$nombre;
        header("Location: listar.php");

    } 
}
}
?>
