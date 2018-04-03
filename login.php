<?php
// Include config file
  session_start();
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['password'] = $_POST['password'];

     $db = mysqli_connect('localhost','pi','Sys@dm1n-18','pi');

    if(isset($_POST['username'])){

     $query = "SELECT * FROM username WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";

        $result = mysqli_query ($db, $query);

    if(mysqli_num_rows($result)){

       header ('location: sistema.php');

    }else{

       header ('location: errorlogueo.php');
    }
  }
?>
