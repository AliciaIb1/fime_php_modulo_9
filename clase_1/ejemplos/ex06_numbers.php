<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Numbers</title>
</head>
<body>
  <?php
    $x = 5985;
    var_dump(is_int($x));

    $x = 59.85;
    var_dump(is_float($x));

    $x = 5985;
    var_dump(is_numeric($x));

    $x = "5985";
    var_dump(is_numeric($x));

    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));
  ?>
</body>
</html>
