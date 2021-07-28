<?php
  $hostname = "localhost";
  $username = "mysql";
  $password = "mysql";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection error".mysqli_connect_error());
?>
