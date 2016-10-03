<?php
/**
 * Clase creada por Paco Gómez
 * clase ejemplo de definicion
 */
class ClaseCoche
{

  // Declaración de una propiedad
  public $color = 'Verde';
  public $tipo = 'turismo';

  // Declaración de un método
  public function mostrarColor() {
      echo '<br>';
      echo 'El color del coche es:';
      echo $this->color;
      echo '<br>';
  }
  //Setter
  public function setColor($cambiarColor){
    $this->color=$cambiarColor;
  }
  //Getters
  public function getColor(){
    return $this->color;
  }
  public function mostrarTipo() {
      echo $this->tipo;
  }
}

?>
