<?php

if (isset($_POST['submit'])) {



  require "dbConnect.php";

    

  $userEmail = $_POST['userEmail'];

  $pwd = $_POST['password'];
  
 

  if (empty($userEmail) || empty($pwd)) {
    header("Location: ./index.php?emptyfields");
    exit();
  }

  $query = "select * from login where username = '$userEmail' and password = '$pwd'";

  $result = mysqli_query($con, $query);

  $count = mysqli_num_rows($result);

  if ($count > 0) {
    session_start();
    $_SESSION['userEmail'] = $userEmail;
    header("Location: ./services.php?You_are_now_logged_in_".$_SESSION['userEmail']);
    
  }
  else {
    header("Location: ./index.php?wrong_passowrd or user_email");
    exit();
  }

} 

else {
  header("Location: ./index.php");
  exit();
}


?>