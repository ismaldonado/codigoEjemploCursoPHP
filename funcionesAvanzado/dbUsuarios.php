<?php
/**
 * Permitir la conexion contra la base de datos
 */
class dbUsuarios
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="usuarios";

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }

  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }
  //Funcion con parametro por defecto
  function devolverUsuarioId($id,$ultimo=false){
    if($this->error==false){
      if($ultimo==true) $resultado = $this->conexion->query("SELECT * FROM usuario ORDER BY id DESC LIMIT 1");
      else $resultado = $this->conexion->query("SELECT * FROM usuario WHERE id=".$id);
      return $resultado;
    }else{
      return null;
    }
  }
  //Devolver arrays
  function devolverUsuarios(){
    $tabla=[];
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT * FROM usuario");
      while($fila=$resultado->fetch_assoc()){
        $tabla[]=$fila;
      }
      return $tabla;
    }else{
      return null;
    }
  }

  //Añadir resultado
  function devolverUsuarioIdMVC($id){
    $tabla=[];
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT * FROM usuario WHERE id=".$id);
      while($fila=$resultado->fetch_assoc()){
        $tabla[]=$fila;
      }
      return $tabla;
    }else{
      return null;
    }
  }
  function añadirUsuario($id,$tabla){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT * FROM usuario WHERE id=".$id);
      while($fila=$resultado->fetch_assoc()){
        $tabla[]=$fila;
      }
      return $tabla;
    }else{
      return null;
    }
  }
  function añadirUsuario($id,$tabla){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT * FROM usuario WHERE id=".$id);
      while($fila=$resultado->fetch_assoc()){
        $tabla[]=$fila;
      }
      return $tabla;
    }else{
      return null;
    }
  }

}


 ?>
