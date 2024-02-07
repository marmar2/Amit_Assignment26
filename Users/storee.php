<?php

session_start();

include "../config.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $UserN = $_POST['name'];
  $UserE = $_POST['email'];
  $UserP = $_POST['password'];
  $pst = $connect->prepare(" INSERT INTO `users` (`name`,`email`,`password`,`created_at`) VALUES (? , ?, ?, now())") ;
  $pst->execute([$UserN,$UserE, $UserP]);
  header("location:../index.php");
}


?>