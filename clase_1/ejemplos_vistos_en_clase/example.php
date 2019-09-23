<?php
  if (isset($_GET["name"]) || isset($_GET["age"])) {
    echo "Bienvenido".$_GET["name"]."<br>";
    echo "Edad: ".$_GET["age"];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulario</title>
</head>
<body>
  <?php
    echo "<h1>Get</h1>";
    echo '<form action="example.php" method="GET">';
  ?>
  Name: <input type="text" name="name"/>
  Age: <input type="text" name="age"/>
  <input type="submit" value="Enviar">
  <?php
    echo '</form>';
  ?>
  <form action="<?php $_PHP_SELF ?>" method="GET">
  Name: <input type="text" name="name"/>
  Age: <input type="text" name="age"/>
  <input type="submit" value="Enviar">
  </form>
</body>
</html>
