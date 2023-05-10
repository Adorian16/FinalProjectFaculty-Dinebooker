<?php include "db_connection.php";
session_start();

$idUser=$_SESSION['IDUser'];

$idUserRest=$_SESSION['IDRestaurant'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="styles24.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
      <button type="button" class="btn btn-light btn-sm ms-2 mr-2 my-2"><?php  if($_SESSION){echo'<a class="nav-link mb-0 h4 text-dark" href="logOUT.php">Log out</a>';} else {echo '<a class="nav-link mb-0 h4 text-dark" href="sign_in_formular.php">Sign In</a>';}?></button>
      </li>
      <li class="nav-item">
      <button type="button" class="btn btn-light btn-sm ms-2 mr-2 my-2"><a class="nav-link mb-0 h4 text-dark" href="admin.php">Reservations</a></button>
      </li>
      <li class="nav-item">
      <button type="button" class="btn btn-light btn-sm ms-2 mr-2 my-2"><a class="nav-link mb-0 h4 text-dark" href="adminStats.php">Statistics</a></button>
      </li>
    </ul>
  </div>
</nav>