<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <?php include "checkPsw.php"; ?>
<div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="#" method="POST" id="form">
                <h1>Sign in</h1>
                <div class="infield">
                    <input type="email" id="email" placeholder="Email" name="email">
                    <small>Error Message</small>
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Enter your email to change your password.</h1>

                </div>
            </div>
        </div>
    </div>
</body>
</html>