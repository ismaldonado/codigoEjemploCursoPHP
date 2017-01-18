<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mostrar los jugadores</title>
  </head>
  <body>
    <?php
    //Crear el objeto de conexion
    $mysqli = new mysqli("localhost", "root", "", "equipobaloncesto");
    if ($mysqli->connect_errno) {
      //Ha habido error
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else{
      echo "<h3>Conexion realizada</h3><br><hr>";
      $resultado = $mysqli->query("SELECT id,nombre,equipo FROM jugadores");
      ?>
      <table border="1">
        <tr>
          <th>id</th>
          <th>nombre</th>
          <th>equipo</th>
        </tr>
      <?php
      while($fila=$resultado->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$fila['id']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['equipo']."</td>";
        echo "</tr>";
        //echo $fila['id']." ".$fila['nombre']." ".$fila['equipo']."<br>";
      }
      echo "</table>";
    }
     ?>
  </body>
</html>
