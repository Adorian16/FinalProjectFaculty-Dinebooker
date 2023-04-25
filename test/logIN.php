<?php 
include "functions.php";
include "db_connection.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
   $email=$_POST['email'];
   $password=$_POST['password'];

            $sql="SELECT * FROM user WHERE Email='$email' AND Password='".md5($password)."'";

            $result=$conn->query($sql);
    
            if($result->num_rows>0){session_start();
              
            $row = mysqli_fetch_array($result);
                
           
           
        
            if(md5($password)==$row['Password']){
              
              
                    if($row["usertype"]=="admin"){
                        header("Location:admin.php");
                        
                    }elseif($row["usertype"]=="user"){ $_SESSION['FirstName']=$row['FirstName']; 
                        $_SESSION['LastName']=$row['LastName'];
                        header("Location:index.php");
                    }
           
                    
                    }
                }else{?>
      <div class="alert alert-warning">
        <strong>Warning!</strong>
        You didn't enter the correct <strong>email or password</strong>, or <strong>the user dosen't exists</strong>.
      </div>

            <?php    }
                }
                        
                    
                    
            
      
            
    
       
?>