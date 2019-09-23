<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Loops</title>
</head>
<body>
  <?php
    //  While
    $x = 1;

    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
    echo "while <br><br>";
    //  DO While
    $x = 1;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
    echo "do while <br><br>";

    // For
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    echo "for <br><br>";

    // Foreach
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }
    echo "foreach <br><br>";

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
  ?>
</body>
</html>
