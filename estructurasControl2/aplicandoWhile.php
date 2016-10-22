<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aplicando while</title>
  </head>
  <body>
    <?php
      $numNoticias=4;
      while ($numNoticias>0) {
     ?>
      <p>
        <h3>Noticia <?php echo $numNoticias;?></h3>
        <h5>Esta es una noticia interesante</h5>
        <span>Texto de la noticia</span>
      </p>
    <?php
        $numNoticias--;
      } ?>
  </body>
</html>
