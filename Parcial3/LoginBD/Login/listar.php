<link rel="stylesheet" href="login.css">

<table>
<?php
include('conexion.php');
session_start();

if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];
	echo "<tr><td colspan='5' style='background-color:#264ac1c4;' align='center'><label>Listado de Usuarios</label></td></tr>";
}
else
{
	header('location: index.php');
}
?>

<?php
echo"<tr><td colspan='5' align='center'><h1>Bienvenido, $usuarioingresado</h1></td></tr>";
?>
<div class="container">
<tr>
<td><label>ID</label></td>
<td><label>Nombre</label></td>
<td><label>A.Paterno</label></td>
<td><label>A. Materno</label></td>
	<td><label>Usuario</label></td>
	
</tr>
</div>

<?php 

if(isset($_POST['btneliminar']))
{
	$us=$_POST['txtUsuario3'];
	$result=mysqli_query($conn,"SELECT * FROM usuarios where login = '$us'");
    $nrr=mysqli_num_rows($result);
    if($nrr==1)
	{
		$sql="DELETE FROM usuarios where login='$us'";
		if(mysqli_query($conn,$sql))
		{
			echo "<script> alert('Usuario eliminado con exito: $us');  </script>";
		}
	}
	else
	{
		echo"<script> alert('Usuario no existe: $us');  </script>";
	}
	
	

}
if(isset($_POST['btnactualizar']))
{
	header('location: actualizar.php');
}

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: index.html');
}
	
$sql="SELECT * FROM usuarios";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
echo'
	


<tr> 
	<td>', $mostrar['idUsuario'], 
	'<td>', $mostrar['nombre'], 
	'<td>', $mostrar['apPaterno'], 
	'<td>', $mostrar['apMaterno'],
	'<td>', $mostrar['login'], 
	
'</tr>

'
?>

<form method="POST">
<tr><td '><input type="text" placeholder="Usuario a Eliminar"name="txtUsuario3"></td></tr>
<td  align="left"><input type="submit" value="Eliminar" name="btneliminar"></td>
<td  align="center"><input type="submit" value="Cerrar sesión" name="btncerrar" /></td>
<td  align="right"><input type="submit" value="Actualizar" name="btnactualizar"></td>
</form>
</table>
















