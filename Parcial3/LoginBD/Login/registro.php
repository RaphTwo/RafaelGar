<?php

?>  
<link rel="stylesheet" href="login.css">
    <title>Registro</title>

<body>
    

        <table>
            <tr><td colspan="1" align="center"><h1>Registro</h1></td></tr>
            <div>
            <tr><td><input type="text" placeholder="Nombre"name="Nombre"></td></tr>
            <tr><td><input type="text" placeholder="Apellido Paterno"name="ApPaterno"></td></tr>
            <tr><td><input type="text" placeholder="Apellido Materno"name="ApMaterno"></td></tr>
            <tr><td><input type="text" placeholder="&#128273;Usuario"name="txusuario"></td></tr>
            <tr><td><input type="text" placeholder="&#128274;Usuario"name="txpassword"></td></tr>
            <form action="insertar.php" method="post">
                <tr><td>
                    <input type="submit" value="Registrarse" name="btnregistro">
                </td></tr>
            </form>
            </div>

        </table>
   
</body>
<?php 

?>

