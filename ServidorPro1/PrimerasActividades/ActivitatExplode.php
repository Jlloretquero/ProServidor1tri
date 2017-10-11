<?php



$fecha = date("d/m/Y H:i:s");

echo $fecha;

//El que fa el explode es tirarmeu tot a un array que cada element estara delimitat per /


$fecha2 = explode("/", $fecha);

//Ara fecha2 es un array [15,09,2017,,,]
echo "<br>---VISUALIZANDO ARRAY FECHA2: <br>";
print_r($fecha2);

$dia = $fecha2[0];
$mes = $fecha2[1];
$anyo = $fecha2[2];

echo "<br>El dia es ".$dia." el mes es: ".$mes." el año es: ".$anyo;