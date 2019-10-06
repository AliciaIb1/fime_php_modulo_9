<?php
$server = "localhost";
$user = "root";
$password = "";
$database = null;
$link = mysqli_connect($server, $user, $password, $database);

if (!$link) {
    echo "Error: Unable to connect to MySQL.";
    exit;
}

echo "Success: A proper connection to MySQL was made! The docker database is great.";

mysqli_close($link);
?>
