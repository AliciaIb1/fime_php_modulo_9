<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario Suma</title>
</head>
<body>
  <?php
    $x = $_POST['a'];
    $y = $_POST['b'];
    if (isset($_POST['sumar'])) {
      echo $x + $y;
    }    
  ?>
  <h2>Suma</h2>
  <form action="ex13.php" method="POST">
    A: <input type="text" name="a" />
    B: <input type="text" name="b" />
    <input type="submit" value="Enviar" name="sumar"/>
  </form>
</body>
</html>
