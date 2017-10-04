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
    /* @var $db PDO */

    private $db;

    function __construct($DB_con) {
        $this->db = $DB_con;
    }

    public function insertar($apellidos, $nombre, $poblacion) {
        try {
            $sql = "INSERT INTO participantes(Apellidos,Nombre,Poblacion) VALUES(:apellidos,:nombre,:poblacion)";
            $sentencia = $this->db->prepare($sql);
            $sentencia->bindparam(":apellidos", $apellidos);
            $sentencia->bindparam(":nombre", $apellidos);
            $sentencia->bindparam(":poblacion", $poblacion);
            $sentencia->execute();
            return true;
        } catch (Exception $ex) {
            echo $ex->getPrevious();
            return FALSE;
        }
    }

    public function getID($id) {
        $sql = "SELECT * FROM participantes WHERE idParticipante =:id";
        $sentencia = $this->db->prepare($sql);
        $sentencia->execute(array(":id" => $id));
        $editRow = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $editRow;
    }

    public function update($id, $apellidos, $nombre, $poblacion) {

        try {

            $sql = "UPDATE participantes SET Apellidos =:apellidos,Nombre=:nombre,"
                    . "Poblacion=:poblacion"
                    . "WHERE IdParticipante =:id";
            $sentencia = $this->db->prepare($sql);
            $sentencia->bindparam(":apellidos,$apellidos");
            $sentencia->bindparam(":nombre,$nombre");
            $sentencia->bindparam(":poblacion,$poblacion");
            $sentencia->bindparam(":id,$id");

            $sentencia->execute();
            return true;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function borrar($id) {

        try {
            $sql = "DELETE FROM participantes WHERE IdParticipante =:id";
            $sentencia = $this->db->prepare($sql);
            $sentencia->bindparam(":id", $id);
            $sentencia->execute();
            return true;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function dataview($query) {
        $sentencia = $this->db->prepare($query);
        $sentencia->execute();

        if ($sentencia->RowCount() > 0) {
            while ($fila = $sentencia->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                    <td><?php echo $fila["IdParticipante"]; ?></td>
                    <td><?php echo $fila["Apellidos"]; ?></td>
                    <td><?php echo $fila["Nombre"]; ?></td>
                    <td><?php echo $fila["Poblacion"]; ?></td>
                </tr>


                <?php

            }
        }
        else{
            echo "<tr><td>No hay registros</td></tr>";
        }
    }

}
