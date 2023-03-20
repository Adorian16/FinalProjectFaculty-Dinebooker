<?php include "db_connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up from</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src=
"https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap-alert.js">
    </script>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <?php include "logIN.php"; ?>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="#" method="POST" id="form">
                <h1>Sign in</h1>
                <div class="infield">
                    <input type="email" id="email" placeholder="Email" name="email">
                    <small>Error Message</small>
                </div>
                <div class="infield">
                    <input type="password" id="password" placeholder="Password" name="password" >
                    <small>Error Message</small>
                </div>
                <a href="#" class="forgot">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Don't have an account ?</h1>
                    <p>Click down below to create an account !</p>
                    <button>Sign Up</button>
                </div>
            </div>
            <a href="sign_up_formular.php"><button id="overlayBtnSignIn"></button></a>
        </div>
    </div>
   
    <script src="scriptLogIn.js"></script>


</body>
</html>

