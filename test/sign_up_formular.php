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
<?php include "insertDB.php";?>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="" id="form" method="POST" >
            
                <h1>Create Account</h1>
                <div class="infield ">
                    <input type="text" id="firstname" placeholder="FirstName" name="firstname">
                    
                    <small>Error Message</small>
                    
                </div>
                <div class="infield">
                    <input type="text" id="lastname" placeholder="LastName" name="lastname">
                    
                    <small>Error Message</small>
                </div>
                <div class="infield">
                    <input type="text" id="phone" placeholder="Phone" name="phone">
                    
                    <small>Error Message</small>
                </div>
                <div class="infield">
                    <input type="email" id="email" placeholder="Email" name="email">
                   
                    <small>Error Message</small>
                </div>
                <div class="infield">
                    <input type="password" id="password" placeholder="Password" name="password">
                    
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
    
   
    
    <script src="script3.js"></script>
    

</body>
</html>