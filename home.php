
<?php session_start() ?>

<?php include "config.php"?>
<?php include "header.php"?>
<?php include "navbar.php"?>


<?php
$pst = $connect->prepare("SELECT posts.* , users.id , users.name FROM `posts`  INNER JOIN `users` ON posts.user_id = users.id WHERE `status`= 'active' ");
$pst->execute();
$posts = $pst->fetchAll();


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['content'] = $_POST['content']; 
}



//    echo "<pre>";
//     print_r($posts);
//     echo "</pre>";

?>

<div class="conainer">
 
 <a href="posts/create.php" class="btn btn-dark">Create Post</a>

  <?php foreach($posts as $post): ?>
  
     <div class="card">
       <div class="card-body" name='content'>
         <?= $post['content'] ?>
       </div>

       <div>
         Created By : <?= $post['name'] ?><br>
         Created on: <?= $post['created_at'] ?><br>  
       </div>
     </div>
  <?php endforeach ?>
</div>

<?php include "footer.php"?>