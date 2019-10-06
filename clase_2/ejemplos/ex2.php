<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario con Vectores</title>
</head>
<body>
  <h1>Cuantos Valores deseas sumar</h1>
  <form action="ex2.php" method="POST">
    <input type="number" name="test" value="">
    <input type="submit" name="submit" value="Enviar">
  </form>
  <br>
  <h1>Resultado</h1>
  <form action="ex2.php" method="post">
    <?php
     if (isset($_POST['test'])) {
       $n = $_POST['test'];
       for ($i=0; $i < $n; $i++) {
         echo "<input type='text' name='vec[]' size='15'/> <br><br>";
       }
       echo "<input type='submit' name='suma' value='suma'>";
     }
    ?>
  </form>
</body>
</html>
