<?php include 'functions.php'?>
<?php include 'db_connection.php'; ?>
<?php $restaurants_array=$conn->Query("SELECT * FROM restaurant ORDER BY IDRestaurant ASC");
?>

<div class="container text-center">
    <div class="row">
            <?php foreach($restaurants_array as $restaurant){?>
                
        <div class="col-4" id="restaurant <?php echo $restaurant['IDRestaurant']; ?>">
                <div class="card" style="width: 18rem ">
               
                  <img src="data:image;base64,<?php echo base64_encode($restaurant["Imagine"]);?>" class="card-img-top" alt="..." height="300.66px">
                 
                  <div class="card-body" style="height:128.02px">
                      <h3 class="card-text"><?php echo $restaurant['Name'];?></h3>
                      
                    </div>
                    <a href="restaurant.php?IDRestaurant=<?php echo $restaurant["IDRestaurant"];?>" class="btn btn-secondary">Details..</a>
                </div>
                <br>
          </div>
  
              <?php } ?>
    </div>
</div> 
