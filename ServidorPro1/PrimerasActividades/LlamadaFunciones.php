<?php
//Amb el include fem referencia al archiu on estan les funciones
include "Funciones.php";

//Aquesta manera de pasar les dades es per valor
$base= 5;
$altura = 3;
$area = areaTriangle($base, $altura);

echo $area;

echo "<hr>";

//D'aquesta manera es per referencia

incrementNumero($altura);

echo "<br> El valor de b es : $altura <br>";

echo "<hr>";

//Per defecte

muestraNombre();
muestraNombre("Señor");

echo "<hr>";
//Ejercicio 5

$num1=5;
$num2=5;
$resultado = promedio($num1, $num2);

echo "<br> El promedio de $num1 y $num2 es $resultado";
echo "<hr>";

//Ejercicio 6

$e =3;
cuadrado_cubo($e, $cua, $cub);
echo "El cuadrado es: $cua El cubo es $cub";
echo "<hr>";

//Ejercicio 7

