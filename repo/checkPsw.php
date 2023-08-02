<?php include "db_connection.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST['email'];
    $sql="SELECT * FROM user WHERE Email='$email'";

    $result=$conn->query($sql);

    if($result->num_rows>0){

        $row = mysqli_fetch_array($result);
                

        if($email==$row['Email']){
            header("Location:changePsw.php");
        }else{?>
           <div class="alert alert-warning">
        <strong>Warning!</strong>
       The email <strong><?php echo $email; ?></strong> is not registered. Please provide the correct email.
      </div>
       <?php } 
    }
}
?>