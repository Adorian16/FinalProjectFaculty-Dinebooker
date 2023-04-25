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

 function description($item){
    if(strlen($item['Descriere'])<100)
    {
      echo substr($item['Descriere'],0,100);
    }
    else if (strlen($item['Descriere'])>=100){
      echo substr($item['Descriere'],0,100).'...';
    }
  }

  
function find_restaurant_by_name($item)
{ if(is_array($item) && isset($item)){
    if(strpos(strtolower($item["Name"]),strtolower($_GET['Search']))!== false){
        return true;
        echo $item["Name"];
    }
    else
    {
        return false;

    }
} 
}
?>