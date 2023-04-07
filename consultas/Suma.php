<?php

class Suma{

    public $numero1;
    public $numero2;
    public $resultadoS;

    public function __construct($numero1,$numero2,$resultadoS)
    {
       $this->numero1 = $numero1;
       $this->numero2 = $numero2;
       $this->resultadoS = $resultadoS;
    }
    public function SUMAR()
    {
      $this->resultadoS = $this->numero1 + $this->numero2;
      return $this->resultadoS;
    }
    public function ResultadoSuma()
    {
        echo "El primer numero es :".$this->numero1;
        echo "<br>";
        echo "El segundo numero es: ".$this->numero2;
        echo "<br>";
        echo "El resultado es: ".$this->resultadoS;
    }
}
$suma = new Suma($_POST['numero1'],$_POST['numero2'],$_POST['resultadoS']);
$suma->SUMAR();
$suma->ResultadoSuma();

?>


