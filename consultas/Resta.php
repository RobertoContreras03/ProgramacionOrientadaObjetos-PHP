<?php

class Resta{

    public $numero1;
    public $numero2;
    public $resultadoR;

    public function __construct($numero1,$numero2,$resultadoR)
    {
       $this->numero1 = $numero1;
       $this->numero2 = $numero2;
       $this->resultadoR = $resultadoR;
    }
    public function RESTAR()
    {
      $this->resultadoR = $this->numero1 - $this->numero2;
      return $this->resultadoR;
    }
    public function ResultadoResta()
    {
        echo "El primer numero es :".$this->numero1;
        echo "<br>";
        echo "El segundo numero es: ".$this->numero2;
        echo "<br>";
        echo "El resultado es: ".$this->resultadoR;
    }
}
$resta = new Resta($_POST['numero1'],$_POST['numero2'],$_POST['resultadoR']);
$resta->RESTAR();
$resta->ResultadoResta();

?>