<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

try{
$dbname= "carreras";
$username = "root";
$passwd = "qqQQ@_1718";        

$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

$dsn= "mysql:host=localhost;dbname=$dbname";

$db = new PDO($dsn, $username, $passwd, $options);
 
$sql = "SELECT * FROM participantes ORDER BY Apellidos";

/*foreach ($db->query("SELECT * FROM participantes ORDER BY Apellidos") as $fila){
    print_r($fila);
    echo "<hr>";
}*/



/*$stmt = $db->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();

//Mostrar los resultados

while($fila = $stmt->fetch()){
    echo "Nombre: ".$fila["Nombre"],",".$fila["Apellidos"]."<br>";
    //echo "Apellidos: ".$fila["Apellidos"],"<br>";
    
    
}*/

/*
$stmt = $db->prepare($sql);
$stmt->execute();
while ($fila = $stmt->fetch(PDO::FETCH_OBJ)){
    echo "Nombre:".$fila->Apellidos.",".$fila->Nombre.",".$fila->Poblacion."<br>";
}
*/


/*$sql= "SELECT * FROM participantes WHERE poblacion= ?";
$sentencia =$db->prepare($sql);
if($sentencia ->execute(array($_GET["poblacion"]))){
    while($fila = $sentencia->fetch()){
        //print_r($fila);
         echo "Nombre: ".$fila["Nombre"],",".$fila["Apellidos"].","."$fila[poblacion]"."<br>";
    }
}
*/

/*$poblacion = $_GET["poblacion"];
$sql= "SELECT * FROM participantes WHERE poblacion =:poblacion ORDER BY Apellidos";
$sentecia = $db->prepare($sql);
$sentencia->execute(array(":poblacion" => $poblacion));
 while($fila = $sentencia->fetch()){
        //print_r($fila);
         echo "Nombre: ".$fila["Nombre"],",".$fila["Apellidos"].","."$fila[poblacion]"."<br>";
    }
*/

$insert="INSERT INTO participantes(Nombre,Apellidos,Poblacion,Velocidad) VALUES(?,?,?,?) ";
$sentencia = $db->prepare($insert);
$nombre ="pepito";
$apellidos = "perez perez";
$poblacion = "OTOS";
$velocidad = 5;

$sentencia->bindParam(1,$nombre);
$sentencia->bindParam(2,$apellidos);
$sentencia->bindParam(3,$poblacion);
$sentencia->bindParam(4,$velocidad);

$sentencia->execute();


$insert="INSERT INTO participantes(Nombre,Apellidos,Poblacion,Velocidad) VALUES(:nombre,:apellidos,:poblacion,:velocidad) ";
$sentencia = $db->prepare($insert);
$nombre ="pepito";
$apellidos = "perez perez";
$poblacion = "OTOS";
$velocidad = 5;

//$sentencia->bindParam(":nombre",$nombre);
//$sentencia->bindParam(":apellidos",$apellidos);
//$sentencia->bindParam(":poblacion",$poblacion);
//$sentencia->bindParam(":velocidad",$velocidad);

$sentencia->execute(array(":nombre" => $nombre, ":apellidos" => $apellidos, ":poblacion" => $poblacion, ":velocidad" => $velocidad ));


} catch (Exception $ex) {
    $ex->getMessage();
    echo $ex;
}
$db=NULL;
