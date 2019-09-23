<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulario</title>
</head>
<body>
  <?php
    if (isset($_POST['a']) && isset($_POST['b'])) {
      $x = $_POST['a'];
      $y = $_POST['b'];      
    }
    if (isset($_POST['suma'])) {
      echo $x+$y;
    }
  ?>
  <form action="<?php $_PHP_SELF ?>" method="POST">
  a: <input type="text" name="a"/>
  b: <input type="text" name="b"/>
  <input type="submit" value="Enviar" name="suma">
  </form>
</body>
</html>
