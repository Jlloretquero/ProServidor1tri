<?php

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$poblacion = $_POST["poblacion"];
$club = $_POST["club"];

//credencials per a entrar a la bd
$host = "localhost";
$user = "root";
$password = "qqQQ@_1718";
$bd = "carreras";

//Crear conexio amb mysql
$con = mysqli_connect($host, $user, $password, $bd);
mysqli_set_charset($con,"utf8");
//comprovar connexio

if (mysqli_connect_errno($con)){
    echo "Failed to connect to MYSQL: ";
    mysqli_connect_error();
    exit();
}

$sql = "INSERT INTO participantes (Nombre,Apellidos,Poblacion,CLUB,Velocidad)
     VALUES ('$nombre','$apellidos','$poblacion','$club',0)";
        
if (!mysqli_query($con, $sql))
{
    die("Error". mysqli_error($con));
}
echo "Registro de usuario satisfactorio";
mysqli_close($con);        

?>
<a href="Act1BaseDades.php">Tornar al llistat de corredors</a>