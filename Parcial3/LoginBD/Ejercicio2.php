<?php
include('conexion.php');

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