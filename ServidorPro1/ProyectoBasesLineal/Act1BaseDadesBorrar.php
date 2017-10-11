<?php

$id = $_GET["id"];

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

$sql = "DELETE FROM participantes WHERE IdParticipante = $id";
        
if (!mysqli_query($con, $sql))
{
    die("Error". mysqli_error($con));
}
else {
   echo "Usuario eliminado correctamente de usuario satisfactorio";
   header("Location: Act1BaseDades.php");
}

mysqli_close($con);     
