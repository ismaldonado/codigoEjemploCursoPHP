<?php
/**
 * Clase de ejemplo para el conrol de valores de los setters
 */
class Banco
{
  //$Atributos
  public $dinero=0;

    //GETTER
    public function getDinero()
    {
        return $this->dinero;
    }

    //SETTER
    public function setDinero($dinero)
    {
        if($dinero<=500){
          $this->dinero = $dinero;
        }elseif($dinero<0){
          $this->dinero = 0;
        }else{
          $this->dinero = 0;
        }
        return $this;
    }

}

 ?>
