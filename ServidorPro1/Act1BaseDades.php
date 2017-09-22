

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <a href="Act1BaseDades.html">Insertar participant</a>
        
        </form>
    </body>
</html>

<?php
//credencials per a entrar a la bd
$host = "localhost";
$user = "root";
$password = "qqQQ@_1718";
$bd = "carreras";

//Crear conexio amb mysql
$con = mysqli_connect($host, $user, $password, $bd);
mysqli_set_charset($con,"utf8");
//comprovar connexio

if (mysqli_connect_errno($con)){
    echo "Failed to connect to MYSQL: ";
    mysqli_connect_error();
    exit();
}

//echo "Conexio correcta";
//Com fer una consulta
$sql= "SELECT * FROM participantes ORDER BY Apellidos";
//Aço retorna una array de la consulta
$result = mysqli_query($con,$sql);

//print_r($result);

//COMO IMPRIMIR EL RESULTADO SIN TABLAS
$fila = mysqli_fetch_array($result);
//print_r($fila);

/*while($fila = mysqli_fetch_array($result)){
echo "Nombre: ".$fila["Nombre"]." , Apellidos: ".$fila["Apellidos"];
echo "<br>";
}*/

//Com possaro en una taba :
echo "<table border='1'>";
echo "<tr><td></td><td></td><td>Apellidos</td><td>Nombre</td><td>Poblacion</td><td>CLub</td></tr>";
while($fila = mysqli_fetch_array($result)){
$id = $fila["IdParticipante"];
echo "<tr>"; 
echo "<td> <a href='Act1BaseDadesEditar.php?id=$id'>Editar</a></td> ";
echo "<td> <a href='Act1BaseDadesBorrar.php?id=$id'>Borrar</a></td> ";
echo "<td>".$fila["Nombre"]."</td>";
echo "<td>".$fila["Apellidos"]."</td>";
echo "<td>".$fila["Poblacion"]."</td>";
echo "<td>".$fila["CLUB"]."</td>";
echo "</tr>";
}
echo "</table>";

//Tancar la conexio
mysqli_close($con);
?>

