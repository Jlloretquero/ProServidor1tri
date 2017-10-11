<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "noticias";

$dsn = "mysql:host=$db_host;dbname=$db_name";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $db_con = new PDO($dsn, $db_user, $db_pass, $options);
} catch (Exception $ex) {
    echo $ex->getMessage();
}
include('class_crud.php');
$crud = new Crud($db_con);