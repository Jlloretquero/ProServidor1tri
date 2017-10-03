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
   
    private $db;
    function __construct($DB_con){
        $this->db = $DB_con;
    }
    function insertar($apellidos,$nombre,$poblacion){
        try{
            $sql="INSERT INTO participantes(Apellidos,Nombre,Poblacion) VALUES(:poblacion)";
        } catch (Exception $ex) {
            echo $ex->getPrevious();
            return FALSE;
        }
    }
}
