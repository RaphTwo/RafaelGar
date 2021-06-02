<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "rafaelgar";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
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