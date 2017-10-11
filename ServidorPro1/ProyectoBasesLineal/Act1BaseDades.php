

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="" method="POST">
            <a href="Act1BaseDades.html">Insertar participant</br></a>
        Buscar participante poblacion
        <input type="text" name="poblacion" value="" />
        <input type="submit" name="Buscar" value="Buscar" />
        <hr>
        </form>
    </body>
</html>

<?php


$limit="";

$where= $_POST["poblacion"]; 
$order="";
$campo_a_ordenar = $_GET["order"];
echo "Campo a ordenar: $campo_a_ordenar";

if (empty($campo_a_ordenar)){
    $order ="ORDER BY Apellidos";
}
else {
    $order ="ORDER BY $campo_a_ordenar";
}



//Aço es per a buscar per poblacions dins la taula
if($_POST["Buscar"]){
    $poblacion = $_POST["poblacion"];
    $where= "WHERE Poblacion LIKE '%$poblacion'";
    echo "Listado de inscritos en $poblacion :";
}

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
$sql= "SELECT * FROM participantes $where $order";
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

//Limito la busqueda
$TAMANO_PAGINA = 50;
;
//examino la página a mostrar y el inicio del registro a mostrar
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina = 1;
}
else {
$inicio = ($pagina -1) * $TAMANO_PAGINA;
}
$num_total_registros = mysqli_num_rows($result);
echo "<br>Total Registros:".$num_total_registros."<br>";
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);
echo "Paginas[$total_paginas]<br>";
$limit = "LIMIT $inicio , $TAMANO_PAGINA";
echo $limit;


$sql= "SELECT * FROM participantes $where $order $limit";
//Aço retorna una array de la consulta
$result = mysqli_query($con,$sql);








//Com possaro en una taba :
echo "<table border='1'>";
echo "<tr><td></td><td></td>"
        . "<td><a href='Act1BaseDades.php?order=Nombre'>Nombre</a></td>"
        . "<td><a href='Act1BaseDades.php?order=Apellidos'>Apellido</a></td>"
        . "<td><a href='Act1BaseDades.php?order=Poblacion'>Poblacion</a></td>"
        . "<td><a href='Act1BaseDades.php?order=CLUB'>CLUB</a></td>"
        . "</tr>";
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

for ($pagina = 1 ; $pagina <= $total_paginas ; $pagina++){
   echo "<a href='Act1BaseDades.php?pagina=$pagina'>$pagina</a> , "; 
}
//Tancar la conexio
mysqli_close($con);
?>

