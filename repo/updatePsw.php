<?php include "db_connection.php";

$psw='';
    if( isset($_POST['password'])){
        $psw = $_POST['password'];
    }

    $psw2='';
    if( isset($_POST['Confirmationpassword'])){
        $psw2 = $_POST['Confirmationpassword'];
    }

    $sql="UPDATE "