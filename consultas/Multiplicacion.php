<?php

class Multiplicacion{

    public $numero1;
    public $numero2;
    public $resultadoM;

    public function __construct($numero1,$numero2,$resultadoM)
    {
       $this->numero1 = $numero1;
       $this->numero2 = $numero2;
       $this->resultadoM = $resultadoM;
    }
    public function MULTIPLICACION()
    {
      $this->resultadoM = $this->numero1 * $this->numero2;
      return $this->resultadoM;
    }
    public function ResultadoMultiplicacion()
    {
        echo "El primer numero es :".$this->numero1;
        echo "<br>";
        echo "El segundo numero es: ".$this->numero2;
        echo "<br>";
        echo "El resultado es: ".$this->resultadoM;
    }
}
$multiplicacion = new Multiplicacion($_POST['numero1'],$_POST['numero2'],$_POST['resultadoS']);
$multiplicacion->MULTIPLICACION();
$multiplicacion->ResultadoMultiplicacion();

?>
