<link rel="stylesheet" href="login.css">

<table>
<?php
include('conexion.php');
session_start();

if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];
	echo "<tr><td colspan='5' align='center'><h1>Bienvenido: $usuarioingresado </h1></td></tr>";
}
else
{
	header('location: index.php');
}
?>


<tr><td colspan="5" align="center"><h1>Listado de usuarios</h1></td></tr>
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

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: index.html');
}
	
$sql="SELECT * FROM usuarios";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
	
?>

<tr> 
	<td><?php echo $mostrar['idUsuario'] ?>
	<td><?php echo $mostrar['nombre'] ?>
	<td><?php echo $mostrar['apPaterno'] ?>
	<td><?php echo $mostrar['apMaterno'] ?>
	<td><?php echo $mostrar['login'] ?>
</tr>
<?php
}
?>
<form method="POST">
<tr><td colspan='5' align="center"><input type="submit" value="Cerrar sesión" name="btncerrar" /></td></tr>
</form>
</table>
















