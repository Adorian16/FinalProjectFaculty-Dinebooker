<?php 
   if(isset($_REQUEST['email'])){
    $email='';
    if( isset($_POST['email'])){
        $email = $_POST['email'];
    }

        $password='';
        if( isset($_POST['password'])){
            $password = $_POST['password'];
        }
    
            $firstname='';
            if( isset($_POST['firstname'])){
                $firstname = $_POST['firstname'];
            }

                $lastname='';
                if( isset($_POST['lastname'])){
                    $lastname = $_POST['lastname'];
                }

                    $phone='';
                    if( isset($_POST['phone'])){
                        $phone = $_POST['phone'];
                    }
    
    
    
                       

        if(email_already_in_db($email)==TRUE)
        {
            exit("<div class='form-container'>
            <h3>Email already registered.Try another email.</h3>
            <h3>Click here to go <a href='sign_up_formular.php'> BACK </a></h3>
                </div>");
        }
        else
        { 
        
            $sql="INSERT INTO user(FirstName,LastName,Email,PhoneNumber,Password,usertype) VALUES 
            ('$firstname','$lastname','$email','$phone','".md5($password)."','user')";
            $account_result=$conn->query($sql);
            if (!mysqli_query($conn, $sql)) {
                echo "Error: " . mysqli_error($conn);
            }if($account_result){
                exit("<div class='form-container'>
                <h3>You are registered successfully.</h3><br/>
                <p class='link'>Click here to <a href='sign_in_formular.php'>Login</a></p>
                </div>");
        }}
    }

?>