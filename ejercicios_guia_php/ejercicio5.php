<?php
//*Crear una clase Persona que tenga como atributos protegidos, el nombre y la edad. Definir como responsabilidades un método que cargue los datos personales y otro que los imprima. //
//*Plantear una segunda clase Empleado que herede de la clase Persona.
//*Añadir un atributo sueldo y los métodos de cargar el sueldo e imprimir su sueldo. Definir un objeto de la clase Empleado y tratar de modificar el atributo edad.
  class Persona {
  protected $nombre;
  protected $edad;
  public function cargarDatosPersonales($nombre,$edad)
  {
    $this->nombre=$nombre;
    $this->edad=$edad;
  }
  public function imprimirDatosPersonales()
  {
    echo 'Nombre:'.$this->nombre.'\n';
    echo 'Edad:'.$this->edad.'\n';
  }
}
class Empleado extends Persona{
  protected $sueldo;
  public function cargarSueldo($sueldo)
  {
    $this->sueldo=$sueldo;
  }
  public function imprimirSueldo()
  {
    echo "\nSueldo:".$this->sueldo;
  }

  public function imprimirDatosPersonales()
  {
    return "Datos personales y sueldo del empleado:".
    "\nNombre:".$this->nombre .
     "\nEdad:". $this->edad ;
  }
}

$empleado1 = New Empleado();
$empleado1->cargarDatosPersonales('flor chevez',18);
$empleado1->cargarSueldo(2400);
echo  $empleado1->imprimirDatosPersonales();
echo $empleado1->imprimirSueldo();
?>