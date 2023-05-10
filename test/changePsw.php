<?php include "db_connection.php";
include "checkPsw.php"; ?>
<link rel="stylesheet" href="styles1.css">
<div class="container" id="container">
    <?php include "udpatePsw.php"; ?>
        <div class="form-container sign-in-container">
            <form action="#" method="POST" id="form">
                <h1>Change Password</h1>
                <div class="infield">
                    <input type="password" id="password" placeholder="Password" name="password" required>
                    <small>Error Message</small>
                </div>
                <div class="infield">
                    <input type="password" id="password" placeholder="Confirmation Password" name="Confirmationpassword" required>
                    <small>Error Message</small>
                    <button type="submit">Send</button>
                </div>
                </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Insert your new password.</h1>

                </div>
            </div>
        </div>
    </div>
        </form>


