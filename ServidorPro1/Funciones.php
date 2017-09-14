<?php

//Per tal de no tindre que repetir el codi moltes vegades el que fem es crear una funcion

//Ejemple de crear l'area d'un triange


//Pasar parametros por valor
function areaTriangle ($base,$altura){
    $area = ($base * $altura)/2;
    return $area;
}

//& Per a pasar el valor per referencia i que el modifique
function incrementNumero (&$numero){
    $numero++;
    
}

//Pasar parametros por defecto, els valor per defecte sempre deuen de ser els ultims parametres

function muestraNombre($titulo="Sr."){
    echo "Estimado $titulo : Jesus <br>";
}

//Ejercicio 5

function promedio($num1,$num2){
    $resultado = ($num1 + $num2) /2;
    return $resultado;
}

//Ejercicio 6

function cuadrado_cubo($num,&$cua,&$cub){
    $cua = $num*$num;
    $cub = $num*$num*$num;
}


//Ejercicio 7

function calcularEc2grado($a,$b,$c,&$sol1,&$sol2){
    
    $disc = $b*$b - (4*$a*$c);
    
    if ($disc <0){
        //No tiene solucion
        echo "No existe solucion";
        
        return 0;
    }
    
    else if ($dis == 0){
        //unica solucion
        $sol1= -$b/(2*$a);
        return 1;
    }
    
    else {
        $sol1= (-$b + sqrt($disc))/(2*$a);
        $sol2= (-$b - sqrt($disc))/(2*$a);
        return 2;
    }
}
