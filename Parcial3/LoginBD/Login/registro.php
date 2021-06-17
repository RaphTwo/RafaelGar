<?php

?>  
<link rel="stylesheet" href="login.css">
    <title>Registro</title>

<body>
    <form action="registro.php" method="post">

        <table>
        <tr><td style="background-color:#264ac1c4;" align="center"><label >Registro</label></td></tr>
            <div>
            <tr><td><input type="text" placeholder="Nombre"name="txtNombre"></td></tr>
            <tr><td><input type="text" placeholder="Apellido Paterno"name="txtApPaterno"></td></tr>
            <tr><td><input type="text" placeholder="Apellido Materno"name="txtApMaterno"></td></tr>
            <tr><td><input type="text" placeholder="&#128273;Usuario"name="txtusuario2"></td></tr>
            <tr><td><input type="text" placeholder="&#128274;Contraseña"name="txtpassword2"></td></tr>
                <tr><td align="center">
                    <input type="submit" value="Registrarse" name="btnregistro">
                    <form action="registro.php" method="post"><input type="submit" name="btnregresar" style="width: 20%;" value="R"></form>
                </td></tr>
            </div>

        </table>
        </form>
</body>
<?php
    include "conexion.php";

    if(isset($_POST['btnregresar']))
    {
        header("Location:index.html");
    }

if(isset($_POST["btnregistro"]))
{

$nombre = $_POST["txtusuario2"];
$pass = $_POST["txtpassword2"];
$pass=md5($pass);
$pater = $_POST["txtApPaterno"];
$mater = $_POST["txtApMaterno"];

    
    $result=mysqli_query($conn,"SELECT * FROM usuarios where login = '$nombre'");
    $nrr=mysqli_num_rows($result);
    if($nrr==0)
    {
        $sqlgrabar = "INSERT INTO usuarios(login,password,nombre,apPaterno,apMaterno) values ('$nombre','$pass','$nombre','$pater','$mater')";
	
	    if(mysqli_query($conn,$sqlgrabar))
	    {
		    echo "<script> alert('Usuario registrado con exito: $nombre');  </script>";
	    }else 
	    {
		    echo "Error: ".$sql."<br>".mysql_error($conn);
	    }

        
    }
    else
    {
        echo "<script> alert('Usuario ya existente: $nombre'); window.location='registro.php' </script>";

    }
	
} 
?>
<?php 

?>

