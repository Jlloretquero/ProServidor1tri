<?php
//Array indexat
$numeros = array(4,5,7,8,2);

echo "Antes de ordenadar <br>: ";

for ($i=0; $i < count($numeros); $i++){
    echo $numeros[$i]."<br>";
}

//Com ordenar la array
echo "Despres de ordenar<br>";
sort($numeros);
print_r($numeros);

//amb ksort ho fariem per keys i rsort ordenariem de manera descendent