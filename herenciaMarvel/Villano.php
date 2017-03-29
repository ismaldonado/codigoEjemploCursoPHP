<?php
include "Personaje.php";
/**
 *
 */
class Villano extends Personaje
{
  private $maldad; //String de el poder del villano
  private $locura; //Boolean true o false


  function __construct($nombre="Paco")
  {
    parent::__construct();
    $this->maldad="";
    $this->setNombre($nombre);
    echo "<br>Esta es la clase del villano<br>";
  }

    /**
     * Get the value of Maldad
     *
     * @return mixed
     */
    public function getMaldad()
    {
        return $this->maldad;
    }

    /**
     * Set the value of Maldad
     *
     * @param mixed maldad
     *
     * @return self
     */
    public function setMaldad($maldad)
    {
        $this->maldad = $maldad;

    }

    /**
     * Get the value of Locura
     *
     * @return mixed
     */
    public function getLocura()
    {
        return $this->locura;
    }

    /**
     * Set the value of Locura
     *
     * @param mixed locura
     *
     * @return self
     */
    public function setLocura($locura)
    {
        $this->locura = $locura;
    }

}


 ?>
