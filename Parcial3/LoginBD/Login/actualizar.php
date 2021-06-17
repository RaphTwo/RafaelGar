<?php
include('conexion.php');
session_start();
if(isset($_POST['btnactualizacion']))
{
    $us=$_POST['txtusuario4'];
    $pass=$_POST['txtpassword4'];
    $pass=md5($pass);
    $nus=$_POST['txtusuario5'];
	
    $sql=mysqli_query($conn,"SELECT * FROM usuarios where login='$us'");
    $nurs=mysqli_num_rows($sql);
    
    if($nurs==0)
    {
        echo "<script> alert('Usuario no existe');";
    }
    else
    {
        $quer="UPDATE usuarios
        SET login = '$nus',
            password = '$pass' 
            WHERE login = '$us'";
        if(mysqli_query($conn,$quer))
	    {
		    echo "<script> alert('Usuario actualizado con exito: $us'); window.location= 'listar.php'  </script>";
	    }
    }
	
}

if(isset($_POST['btnregresar']))
{
    header("Location:listar.php");
}
?>  
<link rel="stylesheet" href="login.css">
    <title>Actualizar</title>

<body>
    <form action="actualizar.php" method="post">

        <table>
        <tr><td style="background-color:#264ac1c4;" align="center"><label >Actualizar</label></td></tr>
            <div>
            <tr><td><input type="text" placeholder="Usuario"name="txtusuario4"></td></tr>
            
            <tr><td><input type="text" placeholder="Nuevo Usuario"name="txtusuario5"></td></tr>
            <tr><td><input type="text" placeholder="Nueva Contraseña"name="txtpassword4"></td></tr>
                <tr><td align="center">
                    <input type="submit" value="Actualizar" name="btnactualizacion">
                    <form action="listar.php" method="post"><input type="submit" name="btnregresar" id="btnregresar"style="width: 20%;" value="R"></form>
                </td></tr>
            </div>

        </table>
        </form>
</body>

