<?php
    session_start();
    
    echo "La variable de sesion es ".$_SESSION["user"]."<br>";
    echo "La otra variable de sesion es ".$_SESSION["passwd"];
?>

<a href="ActVariablesSesio.php">Cerrar sesion</a>