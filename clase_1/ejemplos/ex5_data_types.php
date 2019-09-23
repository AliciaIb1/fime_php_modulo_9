<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data types</title>
</head>
<body>
  <?php
   // Can use var_dump to know the type of the data.
    // Boolean -------
    $x = true;
    // Boolean -------
    // Array -------
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
    echo strlen($cars[0]);
    echo '<br>';
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old.";
    echo '<br>';
    // Array -------
    // Object -------
    class Car {
      function Car($model = 'VW') {
          $this->model = $model;
      }
    }

    // create an object
    $test = new Car('Suzuki');

    // show object properties
    echo $test->model;
    // Object ------
  ?>
</body>
</html>
