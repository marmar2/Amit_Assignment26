<?php
try {
    $connect = new PDO('mysql:host=localhost;dbname=social_media', "root", "");
    //echo "connected";
} catch (PDOException $e) {
    // attempt to retry the connection after some timeout for example
    //echo mysqli_error();
}

?>