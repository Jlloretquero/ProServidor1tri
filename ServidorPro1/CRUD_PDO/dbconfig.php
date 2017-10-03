<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$db_host = "localhost";
$db_user = "root";
$db_pass = "qqQQ@_1718";
$db_name = "carreras";

$dsn = "mysql:host=$db_host;dbname=$db_name";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $db_con = new POD($dsn,$db_user,$db_pass,$options);
            
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

