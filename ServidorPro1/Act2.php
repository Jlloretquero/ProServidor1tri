<?php

//Arreplegar variables 
$numero = $_POST["Numero"];

echo "El valor del numero es : $numero";


if ($numero % 2 == 0) {
    echo "<br> El numero es par";
} 

else {
    echo "<br>El numero es impar";
}