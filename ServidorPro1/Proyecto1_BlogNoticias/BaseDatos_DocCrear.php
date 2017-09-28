<?php

$titulo= $_POST["titol"];
$texto= $_POST["text"];
$imagen= $_POST["imagen"];


include("BaseDatos.php");
$db = new BDD();
$sql = "INSERT INTO gnr_post (post_title, post_body, post_image)
     VALUES ('$titulo','$texto','$imagen')";
$db->modificar($sql, "index.php");
