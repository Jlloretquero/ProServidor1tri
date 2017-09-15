<?php


include "Funciones.php";

$aa = $_POST["a"];
$bb = $_POST["b"];
$cc = $_POST["c"];

$soluciones=calcularEc2grado($aa, $bb, $cc, $sol1, $sol2);

echo "El numero de soluciones: ".$soluciones;


