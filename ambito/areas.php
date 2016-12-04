<?php
/**
 * Clase que nos permite calcular areas
 */
class areas
{
  //Variables e inicializacion
  public $area=0;
  private $lado=0;

  function __construct()
  {
  }

    /*
    * calculo del area del cuadrado
    */
    public function calcularAreaCuadrado(){
      $this->area=$this->lado*$this->lado;
      return $this->area;
    }
    /**
     * Get the value of Clase que nos permite calcular areas
     *
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the value of Clase que nos permite calcular areas
     *
     * @param mixed area
     *
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * Get the value of Lado
     *
     * @return mixed
     */
    public function getLado()
    {
        return $this->lado;
    }

    /**
     * Set the value of Lado
     *
     * @param mixed lado
     *
     */
    public function setLado($lado)
    {
        if($lado<0)$this->lado = 0;
        else $this->lado=$lado;
    }

}

 ?>
