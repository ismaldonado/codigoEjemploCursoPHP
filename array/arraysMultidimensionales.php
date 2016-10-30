<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Arrays multidimensionales</title>
  </head>
  <body>
    <?php
    $pais=[
      "CValenciana"=>array(
        "prov1"=>"Castellon",
        "prov2"=>"Valencia",
        "prov3"=>"Alicante"
      ),
      "Murcia"=>array(
        "prov1"=>"Murcia"),
      "Cataluña"=>array(
        1=>"Girona",
        2=>"Lerida"
      )
    ];
    print_r($pais["Cataluña"]);
     ?>
  </body>
</html>
