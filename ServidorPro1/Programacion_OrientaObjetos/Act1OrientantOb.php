<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class persona {
    private $nombre; //Aço es un atribut i pot ser private, public o protected
    
    function inicializar($nom){
        $this->nombre= $nom;
    }
    
    function imprimir(){
        echo "Hola, tu nombre es ".$this->nombre."<br>";
    }
}

//Vamos a utilizar la classe se llama instanciar
$persona1 = new persona();
$persona1->inicializar("Jesus");
$persona1->imprimir();

$persona2 = new persona();
$persona2->inicializar("Isidro");
$persona2->imprimir();