<?php
   // GET
   if( $_GET["name"] || $_GET["age"] ) {
      echo "<h2>GET</h2> <br>";
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
   }
   // POST
   if( $_POST["name"] || $_POST["age"] ) {
      echo "<h2>POST</h2> <br>";
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['age']. " years old.";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Get & Post</title>
</head>
<body>
  <!-- $_PHP_SELF La variable php_self refiere a llamar el mismo archivo -->
  <h2>Get</h2>
  <form action="<?php $_PHP_SELF ?>" method="GET">
    Name: <input type="text" name="name" />
    Age: <input type="text" name="age" />
    <input type="submit" />
  </form>
  <h2>Post</h2>
  <form action="<?php $_PHP_SELF ?>" method = "POST">
     Name: <input type="text" name="name" />
     Age: <input type="text" name="age" />
     <input type="submit" />
  </form>
</body>
</html>
