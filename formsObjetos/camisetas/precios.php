<?php
/**
 * Calculador de precios de camisetas
 */
class Precios
{
  private $tipo=0;


    /**
     * Get the value of Calculador de precios de camisetas
     *
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of Calculador de precios de camisetas
     *
     * @param mixed tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    //CAlculo de precio
    public function precio(){
      if($this->tipo==1){
        return 45;
      }else if($this->tipo==2){
        return 25;
      }else{
        return 30;
      }

    }

}

 ?>
