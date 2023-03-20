<?php 

  function email_already_in_db($email) {
    $conn = new mysqli("localhost", "root", "","licenta");
    $query = "SELECT * FROM user WHERE Email='$email'";
    $result = mysqli_query($conn, $query);
   
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
  }

  function match_password($password){

    $conn=new mysqli("localhost", "root", "","licenta");

    $query="SELECT Password from user WHERE Password='".md5($password)."'";

    if($query>1){

      return true;
    }else{
      return false;
    }

  }
?>