<?php
session_start();
$usuario = $_POST["campousuario"];
$clave = $_POST["campoclave"];
echo $usuario;
echo $clave;
//Variables de sesio vol dir que es guarden en memoria
//Como se almacenan:

$_SESSION["user"] = $usuario;
$_SESSION["passwd"] = $clave;

?>

<a href="ActVariablesSesio2.php">Pincha aqui</a>