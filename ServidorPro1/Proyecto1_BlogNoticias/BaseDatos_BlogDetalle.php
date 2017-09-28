<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
        
    </body>
</html>
<?php
$id = $_GET["id"];
include("BaseDatos.php");
        $db = new BDD();
        $query = "SELECT post_id, post_title, post_abstract, post_image, post_body FROM gnr_post WHERE post_id = $id";
        $result = $db->consultar($query);
        
echo "<table border='1'>";
while($fila = mysqli_fetch_array($result)){
$id = $fila["post_id"];
echo "<tr>"; 
echo "<td><h1>".$fila["post_title"]."</h1></td>";
echo "</tr>";
echo "<tr>"; 
echo "<td>".$fila["post_body"]."</td>";
echo "</tr>";
}
echo "</table>";
