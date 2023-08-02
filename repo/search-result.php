<?php include "header.php";
    include "functions.php";
    include "db_connection.php"?>
<?php $search=$_GET['Search'];?>
<br>
<?php include "search-form.php";?>
<h2>Search results for: <?php echo $_GET['Search']; ?></h2> 

<?php $restaurants=$conn->Query("SELECT * FROM restaurant");
$arr=mysqli_fetch_all($restaurants,MYSQLI_ASSOC);
 

$restaurant_search=array_filter($arr,'find_restaurant_by_name');

?>
<h2>Results:</h2> 
<div class="container text-center">
<div class="row">
        <?php
        foreach($restaurant_search as $restaurant){?> 
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