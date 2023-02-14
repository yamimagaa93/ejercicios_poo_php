<?php
class CabeceraPagina {
    private $titulo;
    private $color;
    private $fuente;
    private $alineacionTitulo;
    public function definirPropiedades($titulo, $color, $fuente) {
      $this->titulo = $titulo;
      $this->color = $color;
      $this->fuente = $fuente;
    }
    public function definirAlineacionTitulo($alineacionTitulo) {
      $this->alineacionTitulo = $alineacionTitulo;
    }
    public function imprimirPropiedades() {
      return "Título: " . $this->titulo . "\n" .
        "Color: " . $this->color . "\n" .
        "Fuente: " . $this->fuente . "\n" .
        "Alineación del título: " . $this->alineacionTitulo ;
    }
  }
  $cabecera = new CabeceraPagina();
  echo $cabecera->definirPropiedades("Mi página web", "azul", "Arial");
  echo $cabecera->definirAlineacionTitulo("centrado");
  echo $cabecera->imprimirPropiedades();
?>