<?php include "header.php";
        include "db_connection.php";
?>

<h1> My reservations </h1>

<?php 
$idUser=$_SESSION['IDUser'];
    $reservations_array=$conn->Query("SELECT * FROM rezervari AS rez INNER JOIN restaurant AS rest ON rez.IDRestaurant=rest.IDRestaurant WHERE IDUser='$idUser' 
     ");

  ?>

  <table class="table table-striped">
    <thead>
    <tr>
            <th scope="col">Restaurant</th>
            <th scope="col">Date</th>
            <th scope="col">Period</th>
            <th scope="col">Table Nr.</th>
            <th scope="col">Description</th>
            <th scope="col">Observations</th>
    </tr>
    </thead>
    <tbody>
  <?php foreach($reservations_array as $reservation){?>
          
            <tr>
                <td><?php echo $reservation['Name'];?></td>
                <td><?php echo $reservation['DateRez'];?></td>
                <td><?php echo $reservation['PeriodRez'];?></td>
                <td><?php echo $reservation['NrMasa']; ?></td>
                <td><?php echo $reservation['Description'];?></td>
                <td><?php echo $reservation['Observations'];?></td>
            </tr>
            
  <?php } ?> 
  </tbody>
</table>