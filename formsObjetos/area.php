<?php
/**
 *
 * Clase que permite calcular el area de un rectangulo
 *
 */
class area
{

  //atributos privados
  private $base=0;
  private $altura=0;



    /**
     * Get the value of Base
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set the value of Base
     *
     * @param mixed base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }

    /**
     * Get the value of Altura
     *
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of Altura
     *
     * @param mixed altura
     *
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /*
    * Calculo de area
    */
    public function calculoArea(){
      return $this->altura*$this->base;
    }
}


 ?>
