<?php 
function username_already_in_db($username) {
    $conn = new mysqli("localhost", "root", "","gamecorrner");
    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
  }

  function email_already_in_db($email) {
    $conn = new mysqli("localhost", "root", "","gamecorrner");
    $query = "SELECT * FROM user WHERE Email='$email'";
    $result = mysqli_query($conn, $query);
   
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
  }
?>