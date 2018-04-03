<?php
  $servername = "localhost";
  $username = "pi";
  $password = "Sys@dm1n-18";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
  echo "Connected successfully";
?>
