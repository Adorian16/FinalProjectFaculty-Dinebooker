<section class="coloare">
<?php include('header.php');
include 'db_connection.php';

$restaurant_array=$conn->Query("SELECT * FROM restaurant");

$restaurantID=$_GET['IDRestaurant'];
foreach($restaurant_array as $restaurant){
    $rest=$restaurant['IDRestaurant'];
    if($rest == $restaurantID ){
?>
<br>

<div class="container">
    <h1><?php echo $restaurant['Name'];?></h1>
</div>

<div class="container">
            <div class="row">
                <div class="col-4">
<br>
                <img src="data:image;base64,<?php echo base64_encode($restaurant["Imagine"]);?>" class="card-img-top" alt="..." weight="300px"height="482.66px">
                
                </div>

                <div class="col-8">
        <br>
                <div class="text-start">
                    
                    <h2>Data Inregistrare: <?php echo $restaurant['DataInregistrare'];?></h2><br>
                    <h3> Descriere: <?php echo $restaurant['Descriere'];?></h3><br>
                    <h3> Capacitate: <?php echo $restaurant['Capacitate'];?> persoane</h3>
                    <br>
                </div>
                
         
        </div>
        </div>
        <br>
       <?php if($_SESSION){?>
        <div class="container">
            <div class="row">
                <h1>Rezervare</h1>
                
        <div class="rezervare">
        <br>
                <br>
           <?php include 'revervare.php';}else{
            
            ?><div class="alert alert-warning">
            <strong>Warning!</strong>
            For reservations you must be<strong><a href="sign_in_formular.php"> Logged in</a></strong>, or <strong><a href="sign_in_formular.php">Registered</a></strong>.
          </div> <?php }?>
                </div>
            </div>
        </div>
</div>     
  
<?php 
}

} ?>
</section> 
