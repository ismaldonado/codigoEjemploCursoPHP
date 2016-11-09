<?php
/**
 *
 */
class Areas
{
  public $radio=0;
  public $lado=0;

  //Esta seria la funcion constructor
  function __construct($lado)
  {
    echo "----CREADO EL OBJETO EN EL COSTRUCTOR----";
    $this->lado=$lado;
    if($this->lado>3){
      $this->radio=2;
    }
  }

  //Getters y setters
  public function getLado(){
    return $this->lado;
  }
  public function setLado($lado){
    $this->lado=$lado;
  }
  //Calcular el area de un rectangulo
  public function areaRectangulo($base,$altura){
    return $base*$altura;
  }
  public function areaCirculo($radio){
    $area=2*pi()*$radio;
    echo "<br> El area de un circulo es "+$area;
  }
  public function areaCuadrado(){
    return $this->lado*$this->lado;
  }
}

 ?>
