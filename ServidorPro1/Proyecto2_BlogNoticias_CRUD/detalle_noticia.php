<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "dbconfig.php";
include_once "header.php";

$id = $_GET["post_id"];

$query = "SELECT  post_title, post_body FROM gnr_post WHERE post_id = $id";
$crud->dataviewDetall($query);

include_once "footer.php";
?>