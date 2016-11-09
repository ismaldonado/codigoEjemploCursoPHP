<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Estructura For con HTML</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <ul>
      <?php
      $menu=[
        "Home",
        "Nosotros",
        "Productos",
        "Contactar"
      ];
      for ($i=0; $i<count($menu); $i++) {
        echo "<li class=\"menu\">".$menu[$i]."</li>";
      }
      ?>
    </ul>
  </body>
</html>
