<?php

$edades = array(
    "pedro" => 35,
    "juan" => 25,
    "andres" => 47,
    
);

echo $edades["pedro"];

//Per afegir un nou element al array
$edades["manuel"] = 13;


echo "PRINT_R DE EDADES <br>";

print_r($edades);

//Recorrer un array asociativa

foreach ($edades as $key => $value){
    echo "KEY = [$key] VALUE = [$value] <br>";
}