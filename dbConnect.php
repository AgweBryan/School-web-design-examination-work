<?php

  $serverName = "localhost";
  $userName = "root";
  $password = "";
  $dbName = "elementor";

  // Create Connection

  try {

    $con = new PDO("mysql:host=$serverName;dbName=$dbName", $userName, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Success";

  }
  catch (PDOException $e) {
    echo "Error in connection " . $e->getMessage();
  }

  $con = mysqli_connect($serverName, $userName, $password, $dbName);
  
  ?>