<?php

$id = $_GET["id"];
include("BaseDatos.php");
$db = new BDD();
$sql = "DELETE FROM gnr_post WHERE post_id = $id ";
$result = $db->consultar($sql);
$db->modificar($sql, "index.php");


