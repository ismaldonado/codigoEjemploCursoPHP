<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Conexion a jugadores</title>
  </head>
  <body>
    <?php
    //Crear el objeto de conexion
    $mysqli = new mysqli("localhost", "root", "", "equipobaloncesto");
    if ($mysqli->connect_errno) {
      //Ha habido error
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else{
      //No ha habido error
      echo "Conexion realizada<br>";
      //Hacemos una consulta
      $resultado = $mysqli->query("SELECT * FROM jugadores GROUP BY equipo");
      //Cuantas filas nos devuelve
      echo "el numero de jugadores es: ".$resultado->num_rows."<br>";
      while($fila=$resultado->fetch_assoc()){
        echo "El equipo ".$fila['equipo']."<br>";
      }
      /*Otra forma de realizarlo
      for($i=0;$i<$resultado->num_rows;$i++){
        $fila=$resultado->fetch_assoc();

      }
      */
    }
    ?>
  </body>
</html>
