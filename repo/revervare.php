
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/maphilight/1.4.0/jquery.maphilight.min.js"></script>
<link rel="stylesheet" href="styles9.css">
</head>
<body>
<img src="img/rezervari/plan.png" usemap="#image-map" class="maparea">


<?php 

$table=$conn->query("SELECT * from restaurantmasa AS ra INNER JOIN masa AS m ON ra.IDMasa=m.IDMasa WHERE IDRestaurant='$restaurantID' ORDER BY ID");
$arr=mysqli_fetch_all($table,MYSQLI_ASSOC);


?>
<?php
foreach($arr as $t){
 
 
    ?>

<map name="image-map">
<a class ="s" type="submit">
  <area target="" alt="" title="<?php echo $t["NRMasa"];?>" href="reservation.php?Table=<?php echo $t["NRMasa"];?>&IDRestaurant=<?php echo $restaurantID?>&Description=<?php echo $t['Descriere'];?>" coords="<?php echo $t["Coords"];?>" shape="rect"></a>




<?php 


}

?>

</map>


 

<script>$(function() {
    $('.maparea').maphilight();
}); 

</script>
</body>
</html>
