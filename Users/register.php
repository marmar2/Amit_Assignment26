<?php 

session_start() ;

include "../config.php";
include "../header.php";
include "../navbar.php";






?>

<form action="storee.php" method="post">

<div class="mb-3">
  <label for="basic-url" class="form-label">Enter your Name</label>
  <div class="input-group">
    <span class="input-group-text" id="basic-addon3">Name</span>
    <input type="text" class="form-control" name="name" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
  </div>
</div>

<div class="mb-3">
  <label for="basic-url" class="form-label">Enter your Email</label>
  <div class="input-group">
    <span class="input-group-text" id="basic-addon3">example@gmail.com</span>
    <input type="text" class="form-control" name="email" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
  </div>
</div>

<div class="mb-3">
  <label for="basic-url" class="form-label">Enter your password</label>
  <div class="input-group">
    <span class="input-group-text" id="basic-addon3">Password</span>
    <input type="text" class="form-control" name="password" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
  </div>
</div>

<button type="submit" class="btn btn-dark">Create User</button>

</form>




<?php include "../footer.php"?>