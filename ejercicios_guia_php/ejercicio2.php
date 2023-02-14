<?php
/**Crear una clase abstracta Persona que tenga como atributos el nombre y la edad.
 *
Definir como responsabilidades un método que cargue los datos personales y otro que los imprima.
Plantear una segunda clase Empleado que herede de la clase Persona.
Añadir un atributo sueldo y los métodos de cargar el sueldo e imprimir su sueldo.
Definir un objeto de la clase Persona y ver que error produce. También crear un objeto de la clase Empleado
 y llamar a sus métodos
 */
 abstract class Persona {
    public $nombre;
    public $edad;
    public function getDatosPersonales($nombre, $edad){
        $this->nombre =$nombre;
        $this->edad =$edad;
    }
    public function imprimirDatosPersonales(){
       return"Mi nombre es"." ". $this->nombre. "\n" .
        "Mi edad es". " " .$this->edad . "\n";
    }
}
 class Empleado extends Persona{
    public $sueldo;
    public function cargarSueldo($sueldo){
        $this->sueldo =$sueldo;
    }
    public function imprimirSueldo(){
        return "Mi sueldo es de". " ". $this->sueldo. " " . "dolares". "\n";
    }
    }
//$Sujeto = new Persona();
//echo $Sujeto-> getDatosPersonales("Jorge",24);
//echo $Sujeto->imprimirDatosPersonales();
/**El error que produce el objeto de la clase persona dice que hay un error de syntaxis ya
 * que no se puede hacer una instancia de una clase abstracta */

 $objeto = new Empleado();
 $objeto->getDatosPersonales("Leo",35);
 echo $objeto->cargarSueldo(900);
 echo $objeto->imprimirDatosPersonales();
 echo $objeto->imprimirSueldo();
?>