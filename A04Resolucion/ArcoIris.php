<?php
/**
 * Clase Arcoiris corrección de la actividad voluntaria A04
 */
class ArcoIris
{
  //Definición de los atributos
  //Definición de los colores
  public $rojo="rojo";
  public $azul="azul";
  public $amarillo="amarillo";
  public $verde="verde";
  public $naranja="naranja";
  public $indigo="indigo";
  public $violeta="violeta";


    //GETTERS
    public function getRojo()
    {
        return $this->rojo;
    }
    public function getAzul()
    {
        return $this->azul;
    }
    public function getAmarillo()
    {
        return $this->amarillo;
    }
    public function getVerde()
    {
        return $this->verde;
    }
    public function getNaranja()
    {
        return $this->naranja;
    }
    public function getIndigo()
    {
        return $this->indigo;
    }
    public function getVioleta()
    {
        return $this->violeta;
    }

    //SETTERS
    public function setRojo($rojo)
    {
        $this->rojo = $rojo;

        return $this;
    }
    public function setAzul($azul)
    {
        $this->azul = $azul;

        return $this;
    }
    public function setAmarillo($amarillo)
    {
        $this->amarillo = $amarillo;

        return $this;
    }
    public function setVerde($verde)
    {
        $this->verde = $verde;

        return $this;
    }
    public function setNaranja($naranja)
    {
        $this->naranja = $naranja;

        return $this;
    }
    public function setIndigo($indigo)
    {
        $this->indigo = $indigo;

        return $this;
    }
    public function setVioleta($violeta)
    {
        $this->violeta = $violeta;
 
        return $this;
    }

}

 ?>
