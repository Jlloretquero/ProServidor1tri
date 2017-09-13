<?php

$aleatorio= rand(1,100);

echo $aleatorio;

if ($aleatorio < 10 ){
    echo "<br>El numero tiene una cifra";
}

else if ($aleatorio <100){
    echo"<br>El numero tienes dos cifras";
}

else {
    echo"<br>El numero tiene tres cifras";
}
echo "<br>";
$numero= 1;
while ($numero <100){
    echo $numero++;
    echo "<br>";
}