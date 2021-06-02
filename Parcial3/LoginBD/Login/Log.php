<?php
include('conexion.php');

session_start();
if(isset($_SESSION['nombredelusuario']))
{
	header('location: listar.php');
}

if(isset($_POST['btningresar']))
{
	
$nombre = $_POST["txtusuario"];
$pass =md5($_POST["txtpassword"]);



	

	
$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE login = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	$_SESSION['nombredelusuario']=$nombre;
	header("Location: listar.php");
}
else if ($nr == 0) 
{
	echo "<script> alert('Usuario no existe');window.location= 'index.html' </script>";
}

} 
?>