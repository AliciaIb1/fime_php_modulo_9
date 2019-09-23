<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario Vectores</title>
</head>
<body>
  <?php
    if (isset($_POST['vec'])) {
      $vector = $_POST['vec'];
      $n = count($vector);
      $suma = 0;
      echo "El vector tiene $n elementos <br>";
      for ($i=0; $i < $n; $i++) {
        echo "$i = $vector[$i] <br>";
        $suma = $suma + $vector[$i];
      }
      echo "La suma es $suma <br>";
    }
  ?>
  <h2>Vectores</h2>
  <form action="ex14.php" method="POST">
    <?php
      $n = 8;
      for ($i=0; $i < $n; $i++) {
        echo $i;
        echo "<input type='text' name='vec[]' size=10>";
        echo "<br>";
        echo "<br>";
      }
    ?>
    <input type="submit" value="Enviar"/>
  </form>
</body>
</html>
