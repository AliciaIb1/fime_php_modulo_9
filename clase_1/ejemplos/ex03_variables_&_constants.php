<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Variables & Constants</title>
</head>
<body>
  <?php
    $txt = "Hello Variables!";
    $x = 5;
    $y = 10.5;
    echo $txt;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    define("HELLO", "Hello Constant");
    echo HELLO;
    echo "<br>";
    define("HELLO", "Hello Constant", true);
    echo hello;
  ?>
</body>
</html>
