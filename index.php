<?php session_start() ?>

<?php include "config.php"?>
<?php include "header.php"?>


 <?php

  

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usernamee = $_POST['username'];
    $passwordd = $_POST['password'];
    $check = $connect->prepare("SELECT * FROM `users` WHERE `name`= ? AND `password`= ? ");
    $check->execute([$usernamee,$passwordd]);
    $user = $check->fetch();
 
    // rowCount method returns number of rows returned from database, in this case either 1 or none(0)
    if($check->rowCount() == 1){
        $_SESSION['userid'] = $user['id'];
        $_SESSION['username'] = $user['name'];
        header("location:home.php");
    }else {
        echo "user doesn't exist";
    }

    echo "<pre>";
    print_r($user);
    echo "</pre>";
  }

?>
 
 

<div class="container">
 <!-- $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form. -->
 <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>

<p><a href="Users/register.php" class="stretched-link text-danger">Register here</a></p>



 <?php include "footer.php"?>
