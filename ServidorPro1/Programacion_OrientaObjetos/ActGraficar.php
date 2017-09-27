<html> 
<head> 
<title>Pruebas</title> 
</head> 
<body> 
<?php 
class CabeceraPagina { 
  private $titulo; 
  private $ubicacion; 
  
  public function __construct ($tit,$ubi) {
    $this->titulo=$tit; 
    $this->ubicacion=$ubi; 
  }
  
  public function inicializar($tit,$ubi) 
  { 
    $this->titulo=$tit; 
    $this->ubicacion=$ubi; 
  } 
  public function graficar() 
  { 
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">'; 
    echo $this->titulo; 
    echo '</div>'; 
  } 
} 
//Inicializado sin constructor
$cabecera=new CabeceraPagina(); 
$cabecera->inicializar('El blog del programador','center'); 
$cabecera->graficar(); 
//Inicializado con constructor
$cabecera2 = new CabeceraPagina("El blog del isidre","center");
$cabecera2->graficar(); 
?> 
</body> 
</html>  