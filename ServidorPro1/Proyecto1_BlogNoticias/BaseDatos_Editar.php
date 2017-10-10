<?php

include("BaseDatos.php");
$db = new BDD();

$query = "SELECT post_id, post_title, post_abstract, post_image FROM gnr_post";
$result = $db->consultar($query);

$id = $_GET["id"];


if(isset($_POST["boton"])){
    echo "Has pulsado el boton actualizar <br>";
      

$titulo= $_POST["titol"];
$texto= $_POST["text"];
//$imagen= $_POST["imagen"];

 echo "Los campos son [$titulo] [$texto]  <br>";
 $sql= "UPDATE gnr_post SET post_title = '$titulo',
        post_body = '$texto'
        WHERE post_id = $id ";
 $db->modificar($sql, "index.php");
}


else{
$query = "SELECT post_id, post_title, post_body, post_image FROM gnr_post WHERE post_id = '$id'";
$result = $db->consultar($query);
$fila = mysqli_fetch_array($result);
$titolf =$fila["post_title"];
$textf =$fila["post_body"];
}

?>

<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="bootstrap.min.css">

    </head>
    <header><h1 style="text-align:center" >EDITAR NOTICIA</h1></header>
    <body>
        <div class="container">
            <form   method="post" enctype="multipart/form-data">
                
               <div class="form-group">
                    <label for="titol">Titol Noticia</label>
                    <input type="text" class="form-control" id="titol" rows="3" name="titol" value="<?php echo $titolf ?>" >
                </div>
                
                <div class="form-group">
                    <label for="text">Text de la noticia</label>
                    <textarea class="form-control" id="text" rows="3" name="text" value="<?php echo $textf ?>"></textarea>
                </div>
                <div class="form-group">
                    <label for="imagen">Selecciona una imatge</label>
                    <input type="file" class="imagen" id="imagen" aria-describedby="fileHelp" name="imagen">
                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                </div>
              
                <button type="submit" class="btn btn-primary" name="boton" value="boton">Editar</button>
                <button type="reset" class="btn btn-primary">Borrar</button>
            </form>
        </div>
        <footer></footer>
    </body>

</html>