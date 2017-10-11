<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of crud
 *
 * @author lloret244
 */
class crud {
/* @var $db PDO */

private $db;

function __construct($DB_con) {
$this->db = $DB_con;
}

public function insertar($titol, $text, $imagen) {
try {
$sql = "INSERT INTO gnr_post (post_title,post_body,post_image) VALUES(:titol,:text,:imagen)";
$sentencia = $this->db->prepare($sql);
$sentencia->bindparam(":titol", $titol);
$sentencia->bindparam(":text", $text);
$sentencia->bindparam(":imagen", $imagen);
$sentencia->execute();
return true;
} catch (Exception $ex) {
echo $ex->getPrevious();
return FALSE;
}
}

public function getID($id) {
$sql = "SELECT * FROM gnr_post WHERE post_id =:id";
$sentencia = $this->db->prepare($sql);
$sentencia->execute(array(":id" => $id));
$editRow = $sentencia->fetch(PDO::FETCH_ASSOC);
return $editRow;
}

public function update($id, $titol, $text, $imagen) {

try {
echo $id;
$sql = "UPDATE gnr_post SET post_title=:titul,post_body=:text,"
. "post_image=:imagen"
. " WHERE post_id=:id";
$sentencia = $this->db->prepare($sql);
$sentencia->bindparam(":titul", $titol);
$sentencia->bindparam(":text", $text);
$sentencia->bindparam(":imagen", $imagen);
$sentencia->bindparam(":id", $id);

$sentencia->execute();
return true;
} catch (Exception $ex) {
echo $ex->getMessage();
return false;
}
}

public function borrar($id) {

try {
$sql = "DELETE FROM gnr_post WHERE post_id =:id";
$sentencia = $this->db->prepare($sql);
$sentencia->bindparam(":id", $id);
$sentencia->execute();
return true;
} catch (Exception $ex) {
echo $ex->getMessage();
return false;
}
}

public function dataview($query) {
$sentencia = $this->db->prepare($query);
$sentencia->execute();


if ($sentencia->RowCount() > 0) {
while ($fila = $sentencia->fetch(PDO::FETCH_ASSOC)) {
$id = $fila["post_id"];
?>
<tr>
    <td><a href="detalle_noticia.php?post_id=<?php echo $fila["post_id"]; ?>"><?php echo $fila["post_title"]; ?></a></td>                    
    <td><img style="width: 200px; height: 100px;" src="blog/<?php echo $fila["post_image"]; ?>"></td>                    
    <td align='center'>
        <a href="edit_data.php?edit_id=<?php echo $fila["post_id"]; ?>">
            <i class="glyphicon glyphicon-edit"></i>
        </a>
    </td>

    <td align='center'>
        <a href="delete_data.php?delete_id=<?php echo $fila["post_id"]; ?>">
            <i class="glyphicon glyphicon-remove-circle"></i>
        </a>
    </td>
</tr>


<?php
}
} else {
echo "<tr><td>No hay registros</td></tr>";
}
}

public function dataviewDetall($query){
$sentencia = $this->db->prepare($query);
$sentencia->execute();


if ($sentencia->RowCount() > 0) {
while ($fila = $sentencia->fetch(PDO::FETCH_ASSOC)) {
?>
<tr>
    <td><h1><?php echo $fila["post_title"]; ?></h1>
    </td>               
</tr>
<tr>
    <td><?php echo $fila["post_body"]; ?>
    </td>               
</tr>


<?php
}
} else {
echo "<tr><td>No hay registros</td></tr>";
}
}
}


