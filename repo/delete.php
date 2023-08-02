<?php include "db_connection.php";
include "headerAdmin.php";

if(isset($_GET['id'])){

    $deleteId=$_GET['id'];

    $result=$conn->Query("DELETE FROM rezervari where IDRezervare='$deleteId'");
   
    if($result){
        header("Location:admin.php"); ?>
        <div class="alert alert-success" role="alert">
        <strong>Reservation successfuly deleted.</strong>
      </div>
    <?php  }else{
        die(mysqli_error($conn));
      }
}



?>