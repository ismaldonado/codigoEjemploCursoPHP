<?php
/**
 *
 */
class areas
{
  //Variables necesarias para el calculo de las areas
  private $lado=0;
  private $altura=0;

  //areas
  public function areaCuadrado(){
    return $$this->lado*$this->$lado;
  }
  public function areaRectangulo(){
    return $this->lado*$this->altura;
  }

  //Funcion redondeo
  private function redondeo($dato){
    return round($dato);
  }
  //Getters & setters

    public function getLado()
    {
        return $this->lado;
    }

    public function setLado($lado)
    {
        $this->lado = $this->redondeo($lado);

    }

    public function getAltura()
    {
        return $this->altura;
    }


    public function setAltura($altura)
    {
        $this->altura = $this->redondeo($altura);
    }

}

 ?>
