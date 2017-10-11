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
            
            <th>Titol</th>
            <th>Imagen</th>            
            <th colspan="2" align="center">Acciones</th>
            
        </tr>
        <?php
        $query = "SELECT post_id, post_title, post_abstract, post_image FROM gnr_post";
        $crud->dataview($query);
        ?>
        
    </table>
    
    
</div>

<?php
include_once "footer.php";
?>