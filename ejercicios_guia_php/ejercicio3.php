<?php
/**Crear una clase Persona que tenga como atributos el nombre y la edad. 
Definir como responsabilidades un método que cargue los datos personales y otro que los imprima. Plantear una segunda clase Empleado que herede de la clase Persona. 
Añadir un atributo sueldo y los métodos de cargar el sueldo e imprimir todos los datos del empleado (sobrescribir el método imprimir de la clase Persona). 
Definir un objeto de la clase Persona y llamar a sus métodos. También crear un objeto de la clase Empleado y llamar a sus métodos.
 */

 class Persona{
    public $nombre;
    public $edad;

    public function ObtenerDatosPersonales($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function imprimir(){
        return "Informacion Personal: " . "\nNombre Completo: " . $this->nombre .
                "\nEdad: " . $this->edad;
    }

}

//utilizando herencia
class Empleado extends Persona{
    public $sueldo;

 public function ObtenerDatosPersonales($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
 }
    public function ObtenerSueldo($sueldo){
      $this->sueldo=$sueldo;
    }

    //sobreescribiendo al metodo imprimir de la clase Padre (Persona)
    public function imprimir()
    {
        return "Informacion del Empleado: " . "\nNombre: " . $this->nombre .
                "\nEdad: " . $this->edad . "\nSueldo: $ " . $this->sueldo;
    }

}

//$persona = new Persona();
//echo $persona->ObtenerDatosPersonales("Samuel",32);
//echo $persona->imprimir();

$empleado = new Empleado();
echo $empleado->ObtenerDatosPersonales("Samuel",32);
echo $empleado->ObtenerSueldo(600);
echo $empleado->imprimir();


?>


