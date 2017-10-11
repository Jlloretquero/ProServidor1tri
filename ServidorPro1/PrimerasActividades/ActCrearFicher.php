<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Esta primera opcion es para crear el archivo, el atributo w indica que si existe lo sobrescrivira
        $fp = fopen("archivos/prueba.txt", "w");
        
        //Con esto introducimos texto al archivo
        fputs($fp,"HOLA ESTO ES UNA PRUEBA.LINEA 1\n");
        fputs($fp,"HOLA ESTO ES UNA PRUEBA.LINEA 2\n");
        fputs($fp,"HOLA ESTO ES UNA PRUEBA.LINEA 3\n");
        fputs($fp,"HOLA ESTO ES UNA PRUEBA.LINEA 4\n");
        fputs($fp,"HOLA ESTO ES UNA PRUEBA.LINEA 5\n");
        
        fclose($fp);
        
        //Per tal de llegir un fitxer
        $fp = fopen("archivos/prueba.txt", "r");
        echo "Mostrando las lineas del fichero <br>";
        while (!feof($fp)){
            $linea = fgets($fp);
            echo $linea."<br>";
        }
        fclose($fp);
        ?>
    </body>
</html>
