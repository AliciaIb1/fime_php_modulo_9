<?php
# Comentario una sola linea
// COmentario de una sola linea
/*
Comentarios de lineas
multiples
 */
// echo "Hola Mundo<br>";
// //   echo "Hola Mundo<br>";
// $txt = "Hello World";
// echo $txt;
// echo "<br>";
// $x = 10;
// $y = 10.5;
// echo $x;
// echo "<br>";
// echo $y;
// echo "<br>";
// // Concatenar
// echo $txt." Class";
// echo "<br>";
// echo "$x Class";
// // Boolean
// $booleanTrue = true;
// $booleanFalse = true;
// echo "<br>";
// echo $booleanTrue;
// echo "<br>";
// echo $booleanFalse;
// echo "<br>";
// var_dump($booleanTrue);
// echo "<br>";
// var_dump($booleanFalse);
// echo "<br>";
// $cars = array("Volvo","BMW","Toyota");
// var_dump($cars);
// echo $cars[1];
// echo "<br>";
// $strreverse = "aloH";
// echo strrev($strreverse);
// $age = array("Jimmy"=>array('test', 100), "Ben"=>"40", "Tiburcio"=>"19");
// echo "<br>";
// echo $age['Jimmy'][1];
// echo "<br>";


// $age = 35;
//
// if ($age > 18 && $age < 30) {
//   echo "Adulto";
// } elseif ($age < 18) {
//   echo "Menor";
// } else {
//   echo "Mayor";
// }


// while
// $a = 1;
// $txt = 'test';
// while (($a <= 10) && ($txt === 'test')) {
//   echo $a."<br>";
//   if ($a >= 5) {
//     $txt = 'prueba';
//   }
//   $a++;
// }
// echo "while";

// do while
// do {
//   echo "Test $a <br>";
//   $a++;
// } while($a <= 10);
// echo "do while";

// foreach
// $colors = array("red", "yellow", "black");
// $colors = array_reverse($colors);
// foreach ($colors as $key) {
//   echo "El color es $key <br>";
// }
// $age = array("Jimmy"=>array('test', 100), "Ben"=>"40", "Tiburcio"=>"19");
//
// foreach ($age as $key => $value) {
//   echo "$key tiene la edad de $value <br>";
// }

function writeMsg($txt = "World") {
  return "Hello $txt";
}

$resultado = writeMsg();
echo $resultado;

?>
