<?php

class BDD {

    private $con;
    private $host;
    private $user;
    private $passwd;
    private $db;

    function __construct($host = "localhost", $user = "root", $passwd = "", $db = "noticias") {
        $this->host = $host;
        $this->user = $user;
        $this->passwd = $passwd;
        $this->db = $db;
        $this->conectar();
    }

    private function conectar() {
        $this->con = mysqli_connect($this->host, $this->user, $this->passwd, $this->db);
        if (mysqli_connect_errno($this->con)) {
            echo "FALLO AL CONECTAR A MYSQL";
            mysqli_connect_error();
        }
        mysqli_set_charset($this->con, 'utf8');
    }

    public function consultar($consulta) {
        return mysqli_query($this->con, $consulta);
    }

    function modificar($query, $redirect) {
        if (!mysqli_query($this->con, $query)) {
            die("Error" . mysqli_error($this->con));
        } else {
            echo "Noticia eliminada";
            header("Location: $redirect");
        }
    }

    function __destruct() {
        mysqli_close($this->con);
    }

}
