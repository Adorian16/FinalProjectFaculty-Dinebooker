<?php include 'db_connection.php';
    include 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up from</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles1.css">
    
</head>

<body>

<?php 
   if(isset($_REQUEST['email'])){
    $email='';
    if( isset($_POST['email'])){
        $email = $_POST['email'];}

        $password='';
        if( isset($_POST['password'])){
            $password = $_POST['password'];}
    
            $firstname='';
            if( isset($_POST['firstname'])){
                $firstname = $_POST['firstname'];}

                $lastname='';
                if( isset($_POST['lastname'])){
                    $lastname = $_POST['lastname'];}

                    $phone='';
                    if( isset($_POST['phone'])){
                        $phone = $_POST['phone'];}
    
    
    
    

        if(email_already_in_db($email)==TRUE)
        {
            exit("<div class='form-container'>
            <h3>Email already registered.Try another email.</h3>
            <h3>Click here to go <a href='sign_up_formular.php'> BACK </a></h3>
                </div>");
        }
        else
        {
            $sql="INSERT INTO user(FirstName,LastName,Email,PhoneNumber,Password) VALUES 
            ('$firstname','$lastname','$email','$phone','".md5($password)."')";
            $account_result=$conn->query($sql);
            }if($account_result){
                echo "<div class='form-container'>
                <h3>You are registered successfully.</h3><br/>
                <p class='link'>Click here to <a href='sign_in_formular.php'>Login</a></p>
                </div>";
        }}
else{
?>


    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="sign_up_formular.php" id="form" method="POST" onsubmit="return validateForm()">
                <h1>Create Account</h1>
                <div class="infield ">
                    <input type="text" id="firstname" placeholder="FirstName" name="firstname" require>
                    
                    <small>Error Message</small>
                    
                </div>
                <div class="infield">
                    <input type="text" id="lastname" placeholder="LastName" name="lastname" require>
                    
                    <small>Error Message</small>
                </div>
                <div class="infield">
                    <input type="text" id="phone" placeholder="Phone" name="phone" require>
                    
                    <small>Error Message</small>
                </div>
                <div class="infield">
                    <input type="email" id="email" placeholder="Email" name="email" require>
                   
                    <small>Error Message</small>
                </div>
                <div class="infield">
                    <input type="password" id="password" placeholder="Password" name="password" require>
                    
                    <small>Error Message</small>
                </div>
                
                <button type="submit">Sign Up</button>
            </form>
        
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Already got an account ?</h1>
                    <p>Click down below to log in and start booking !</p>
                    <button>Sign In</button>
                </div>
            </div>
            <a href="sign_in_formular.php"><button id="overlayBtn"></button></a>
        </div>

        
    </div>

 
  <?php }?>
  <script src="script.js"></script>
</body>
</html>