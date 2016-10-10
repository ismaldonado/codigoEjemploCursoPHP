<?php
/**
 * Clase Silla corrección de la actividad voluntaria A04
 */
class Silla
{
  //Atributos de la Mesa
  public $material="";
  public $color="";

    //GETTERS
    public function getMaterial()
    {
        return $this->material;
    }
    public function getColor()
    {
        return $this->color;
    }


    //SETTER
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

}

 ?>
