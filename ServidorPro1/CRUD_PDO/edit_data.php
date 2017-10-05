<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "dbconfig.php";
include_once 'header.php';


if(isset($_POST["boton"])){
    echo "Has pulsado el boton actualizar";
    $id=$_GET["edit_id"];
    $apellidos=$_POST["apellidos"];
    $nombre=$_POST["nombre"];
    $poblacion=$_POST["poblacion"];
    
    echo $id;
    
    echo "Los campos son [$apellidos] [$nombre] [$poblacion] <br>";
    
    if ($crud->update($id, $apellidos, $nombre, $poblacion)){
        $msg= "<div class='alert alert-info'>"
                . "Registro fue actualizado con exito"
                . "<a href='index.php'>Volver a la pagina HOME</a>"
                . "";
    }
    
    else{
        $msg= "<div class='alert alert-warning'>"
                . "Error actualizando el registro"
                . "<a href='index.php'>Volver a la pagina HOME</a>"
                . "";
        
    }
    
    
    
    
    
}


if (isset($_GET["edit_id"])){
    $id = $_GET["edit_id"];
    echo "La id es: $id";
    //print_r(extract($crud->getID($id)));
    //Necessario para recojer los datos en variables
    extract($crud->getID($id));
    
    //echo "Apelldios[$Apellidos] Nombre[$Nombre] Poblacion[$Poblacion] <br>";
    
}
?>
<div class="clearfix"></div><br>
<div class="container">
    
    <?php
    if (isset($msg)){
    echo $msg;
    }
    ?>
    
    <form method="post">
        <table class="table-bordered">
            <tr>
                <td>Apellidos</td>
                <td><input type="text" class="form-control" name="apellidos" value="<?php echo $Apellidos; ?>" /></td>
            </tr>
            
            <tr>
                <td>Nombre</td>
                <td><input type="text" class="form-control" name="nombre" value="<?php echo $Nombre; ?>" /></td>
            </tr>
            
            <tr>
                <td>Poblacion</td>
                <td><input type="text" class="form-control" name="poblacion" value="<?php echo $Poblacion; ?>" /></td>
            </tr>
            
              <tr>
                
                  <td colspan="2">
                      <button type="submit" name="boton" value="btn-update" class="btn-primary" />
                      <span class="glyphicon glyphicon-edit"></span>
                      Actualizar Registro
                      </button>
                  </td>
            </tr>
        </table>
        <br>
        
        
    </form>
    
</div>
<?php

include_once "footer.php";