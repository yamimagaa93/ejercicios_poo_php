<?php
/**INDICACIONES
* Plantear una clase Calculadora que contenga 4 métodos (sumar, restar, multiplicacion, division)
* estos métodos recibirán dos parámetros.
*/
 class Calculadora{
    public $numero1;
    public $numero2;
    function sumar($numero1, $numero2){
        $resultado = $numero1 + $numero2;
        echo "El resultado de la suma es: " . $resultado . "\n";
    }
    function restar($numero1, $numero2){
        $resultado = $numero1 - $numero2;
        echo "El resultado de la resta es: " . $resultado . "\n";
    }
    function multiplicar($numero1, $numero2){
        $resultado = $numero1 * $numero2;
        echo "El resultado de la multiplicacion es: " . $resultado . "\n";
    }
    function dividir($numero1, $numero2){
        $resultado = $numero1 / $numero2;
        echo "El resultado de la division es: " . $resultado . "\n";
    }
 }
 $operacion = new Calculadora();
 echo $operacion->sumar(25, 10);
 echo "<br />";
 echo $operacion->restar(20, 13);
 echo "<br />";
 echo $operacion->multiplicar(5, 3);
 echo "<br />";
 echo $operacion->dividir(10, 5);
?>