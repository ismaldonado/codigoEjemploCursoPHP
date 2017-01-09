<?php
/**
 * Clase que nos permite realizar tiradas sobre un dado predefinido
 */
class jugadorDado
{
  //propiedades
  private $minNumDado=0;
  private $maxNumDado=12;

  //getters & setters

    public function getMinNumDado()
    {
        return $this->minNumDado;
    }
    public function setMinNumDado($minNumDado)
    {
      //Comprobamos si está por debajo de 0
      if($minNumDado<0){
        $this->minNumDado = 0;
      }else{
        $this->minNumDado = $minNumDado;
      }

    }
    public function getMaxNumDado()
    {
        return $this->maxNumDado;
    }
    public function setMaxNumDado($maxNumDado)
    {
        //Comprobamos si está por encima de 12
        if($maxNumDado>12){
          $this->maxNumDado = 12;
        }else{
          $this->maxNumDado = $maxNumDado;
        }
    }

    //Funcion que tira Dado
    public function tirarDado(){
      return rand($this->minNumDado,$this->maxNumDado);
    }

}

 ?>
