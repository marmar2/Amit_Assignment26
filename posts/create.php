<?php session_start() ?>
<?php include "../config.php"?>
<?php include "../header.php"?>
<?php include "../navbar.php"?>


<?php 

  

?>

<div class="container">
  <form action="store.php" method="POST">
     <div class="mb-3">
       <label  class="form-label">Write you post here</label>
       <textarea class="form-control"  rows="3" name="content"></textarea>
     </div>
  
     <button type="submit" class="btn btn-dark">Post</button>
     </form>
</div>

<?php include "../footer.php"?>