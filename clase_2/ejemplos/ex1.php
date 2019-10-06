<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario con Vectores</title>
</head>
<body>
  <?php
   if (isset($_POST['vec'])) {
     var_dump($_POST['vec']);
     echo $_POST['vec'];
     $arreglo = $_POST['vec'];
     echo "<br>";
     echo "Opcion1: La suma de mi arreglo es igual a: ".array_sum($arreglo);
     $suma = 0;
     foreach ($arreglo as $key) {
       $suma = $suma+$key;
     }
     echo "<br>";
     echo "Opcion2: La suma de mi arreglo es igual a: ".$suma;
     $suma = 0;
     for ($i=0; $i < 9 ; $i++) {
       $suma += $arreglo[$i];
     }
     echo "<br>";
     echo "Opcion3: La suma de mi arreglo es igual a: ".$suma;
     echo "<br>";

     // Ejemplo foreach
     $names = array('omar', 'raul', 'ana');
     var_dump($names);
     foreach ($names as $name) {
       echo "Hola ".$name."<br>";
     }
   }
  ?>
  <form action="ex1.php" method="POST">
    <?php
      // $n = 8;
      for ($i=0; $i < 8; $i++) {
        echo "<input type='text' name='vec[]' size='15'/> <br><br>";
      }
    ?>
    <input type="submit" name="submit" value="Enviar">
  </form>
</body>
</html>
