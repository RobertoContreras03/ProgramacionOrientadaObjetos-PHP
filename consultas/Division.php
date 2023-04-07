<?php

class Division{

    public $numero1;
    public $numero2;
    public $resultadoD;

    public function __construct($numero1,$numero2,$resultadoD)
    {
       $this->numero1 = $numero1;
       $this->numero2 = $numero2;
       $this->resultadoD = $resultadoD;
    }
    public function DIVISION()
    {
      $this->resultadoD = $this->numero1 / $this->numero2;
      return $this->resultadoD;
    }
    public function ResultadoDivision()
    {
        echo "El primer numero es :".$this->numero1;
        echo "<br>";
        echo "El segundo numero es: ".$this->numero2;
        echo "<br>";
        echo "El resultado es: ".$this->resultadoD;
    }
}
$division = new Division($_POST['numero1'],$_POST['numero2'],$_POST['resultadoS']);
$division->DIVISION();
$division->ResultadoDivision();

?>
