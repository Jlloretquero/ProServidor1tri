<?php

$nombre = $_FILES['fichero']['name'];
$tipo = $_FILES ["fichero"] ["type"];
$tam = $_FILES ["fichero"] ["size"];
$nombre_temporal = $_FILES ["fichero"] ["tmp_name"];
$error = $_FILES ["fichero"] ["error"];
echo "El nombre del fichero es: $nombre <br>";
echo "El fichero es del tipo: $tipo <br>";
echo "El tamaño del fichero es: $tam <br>";
echo "El nombre temporal del fichero es: $nombre_temporal <br>";
echo "El error en la subida es: $error <br>";

//Comprovar si se ha subido el fichero temporal al servidor

if(is_uploaded_file($nombre_temporal)){
    echo "Fichero temporal OK";
    //Indicar donde lo guardaremos
    $carpeta = "archivos/";
    //Indicar el nombre del fichero
    $nombre_fichero = $carpeta.$nombre;
    //Renombar el nombre temporal del fichero
    
    move_uploaded_file($nombre_temporal, $nombre_fichero);
    
}

else {
    echo "Error en la subida del fichero: $error";
}