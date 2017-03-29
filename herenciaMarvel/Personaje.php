<?php
/**
 *
 */
class Personaje
{
  private $nombre;

  function __construct()
  {
    $this->nombre="";
    echo "Esta es la clase Personaje";
  }

    /**
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @param mixed nombre
     *
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

}


 ?>
