<?php

$nombre = $_POST["nombre"];
$comentarios = $_POST["comentarios"];

$fp = fopen("archivos/cometarios.txt", "a") or
    die("Problemas en la creacion");

fputs($fp,$nombre."\n");
fputs($fp,$comentarios."\n");
fclose($fp);

