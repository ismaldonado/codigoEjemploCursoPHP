<?php
//Definir un array vacio
$equiposBasket=[];

//Añadir nuevo elemento
$equiposBasket[]="Valencia Basket";

//Mostrar todos
print_r($equiposBasket);
echo "<br>";

//Añadir segundo elemento
$equiposBasket[]="Baskonia";

//Mostrar todos otra vez
print_r($equiposBasket);
echo "<br>";

//Recorrer con for teniendo en cuenta la funcion count
for ($i=0; $i < count($equiposBasket) ; $i++) {
  echo $equiposBasket[$i].",";
}
echo "<br>";
echo "------------------ERROR -------------";
echo "<br>";
//Genero un error
for ($i=0; $i < 4 ; $i++) {
  echo $equiposBasket[$i].",";
}
echo "------------------ERROR -------------";
echo "<br>";

//Añadir tercer elemento
$equiposBasket["tercer"]="Estudiantes";
//Añadir cuarto elemento con push
array_push($equiposBasket, "Gran Canaria");

//Mostrar todos otra vez
print_r($equiposBasket);
echo "<br>";

//Recorrer con foreach
foreach ($equiposBasket as $key => $value) {
  echo $value.",";
}
echo "<br>";
//Mostrar un elemento en concreto
echo $equiposBasket["tercer"];
echo "<br>";

//Modificar un valor de un elemento
$equiposBasket["tercer"]="Estudiantes Basket";
echo $equiposBasket["tercer"];
echo "<br>";

 ?>
