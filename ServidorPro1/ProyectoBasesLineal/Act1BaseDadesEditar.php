<?php

$id = $_GET["id"];

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
if($_POST["actualizar"]){
    echo "Has pulsado el boton actualizar";
    $nombre_post = $_POST["nombre"];
    $apellidos_post = $_POST["apellidos"];
    $poblacion_post = $_POST["poblacion"];
    $club_post = $_POST["club"];
    //echo "PoBLACION MODIFICIADA: [$poblacion_post]";
    
    $update = "UPDATE participantes SET Nombre = '$nombre_post',
        Apellidos = '$apellidos_post',CLUB = '$club_post',
        Poblacion = '$poblacion_post'
        WHERE IdParticipante = $id ";
    echo $update;
    echo $id;
    if (!mysqli_query($con, $update))
{
    die("Error". mysqli_error($con));
}
else {
   echo "Usuario modificado correctamente de usuario satisfactorio";
   header("Location: Act1BaseDades.php");
}
            
}

else {
$sql = "SELECT * FROM participantes WHERE IdParticipante = $id";
$result = mysqli_query($con, $sql);

$fila = mysqli_fetch_array($result);

$nombre=$fila["Nombre"];
$apellidos=$fila["Apellidos"];
$club=$fila["CLUB"];
$poblacion=$fila["Poblacion"];
}


mysqli_close($con);     

?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form method="POST">
            Nombre: <input type="text" name="nombre" value="<?php echo $nombre ?>" />
            Apellidos <input type="text" name="apellidos" value="<?php echo $apellidos ?>" />
            Poblacion: <input type="text" name="poblacion" value="<?php echo $club ?>" />
            Club: <input type="text" name="club" value="<?php echo $poblacion ?>" />
            <input type="submit" value="actualizar" name="actualizar" />
            </form>
           
        </div>
    </body>
</html>
