<?php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "dbconfig.php";
include_once "header.php";

?>

<div class="clearfix"></div>
<div class="container">
    
    <table class="table table-bordered table-responsive">
        
        <tr>
            <th>#</th>
            <th>Apellidos</th>
            <th>Nombre</th>
            <th>Poblacion</th>
            <th colspan="2" align="center">Acciones</th>
            
        </tr>
        <?php
        $query = "SELECT * FROM participantes ORDER BY Apellidos";
        $crud->dataview($query);
        ?>
        
    </table>
    
    
</div>

<?php
include_once "footer.php";
?>