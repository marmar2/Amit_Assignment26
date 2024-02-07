<?php

session_start();

include "../config.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $contentt = $_POST['content'];
  $pst = $connect->prepare(" INSERT INTO `posts` (content,`status`,`user_id`,`created_at`) VALUES (? , 'active', ?, now())") ;
  $pst->execute([$contentt,$_SESSION['userid']]);
  header("location:../home.php");
}


?>