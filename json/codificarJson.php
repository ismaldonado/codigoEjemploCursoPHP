<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo codificacion JSON</title>
  </head>
  <body>
    <?php
    //Multi array asociativo de ejemplo de comunidades
    $comunidades=[
      "Comunidad Valenciana"=>[
        "num provincias"=>3,
        "Valencia"=>"Valencia",
        "Alicante"=>"Alicante",
        "Castellón"=>"Castellón"
      ],
      "Murcia"=>[
        "num provincias"=>1,
        "Murcia"=>"Murcia"
      ],
      "Cataluña"=>[
        "num provincias"=>4,
        "Barcelona"=>"Barcelona",
        "Lérida"=>"Lérida",
        "Tarragona"=>"Tarragona",
        "Gerona"=>"Gerona"
      ]
    ];
    //Conversión a Json
    $msgJson=json_encode($comunidades);
    echo $msgJson;
    //Decodificar Json
    $arrayDecodificado=json_decode($msgJson,true);
    echo "<br>";
    print_r($arrayDecodificado);
    ?>
  </body>
</html>
