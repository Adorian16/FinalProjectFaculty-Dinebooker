
<?php 
 include "headerAdmin.php";

 



 $numberOfReservation=05;

if(isset($_GET["page"])){

  $page=$_GET["page"];
}else{
  $page=1;
}
$display=($page-1)*$numberOfReservation;

$reservations_array=$conn->Query("SELECT rez.IDRezervare AS ID,rez.FirstName AS ReservationFirstName,rez.LastName AS ReservationLastName,
rez.DateRez AS ReservationDate,rez.PeriodRez AS PeriodOfTime,
rez.NrMasa AS ReservationTable, rez.Description AS ReservationDescription, rez.Observations AS ReservationObservations
FROM rezervari AS rez INNER JOIN user AS us ON
rez.IDRestaurant=us.IDRestaurant WHERE rez.IDRestaurant='$idUserRest'
ORDER BY rez.DateRez DESC limit $display,$numberOfReservation");

?>

   

<table class="table table-striped">
<thead>
<tr>
        <th scope="col" hidden>Id</th>
        <th scope="col">FirstName</th>
        <th scope="col">LastName</th>
        <th scope="col">Date</th>
        <th scope="col">Period</th>
        <th scope="col">Table Nr.</th>
        <th scope="col">Description</th>
        <th scope="col">Observations</th>
        <th scope="col">Operations</th>
</tr>
</thead>
<tbody>
<?php foreach($reservations_array as $reservation){
   
    ?>
      
        <tr>
            <td hidden><?php echo $reservation['ID'];?></td>
            <td><?php echo $reservation['ReservationFirstName'];?></td>
            <td><?php echo $reservation['ReservationLastName'];?></td>
            <td><?php echo $reservation['ReservationDate'];?></td>
            <td><?php echo $reservation['PeriodOfTime'];?></td>
            <td><?php echo $reservation['ReservationTable']; ?></td>
            <td><?php echo $reservation['ReservationDescription'];?></td>
            <td><?php echo $reservation['ReservationObservations'];?></td>
            <td style="width:17%;"><button class="btn btn-primary"><a class="text-light" href="update.php?id=<?php echo $reservation['ID'];?>">Update</a></button>
                <button onclick="alert('Are you sure ?')" class="btn btn-danger"><a class="text-light" href="delete.php?id=<?php echo $reservation['ID'];?>">Delete</a></button>
            </td>
            
        </tr>
        
<?php } ?>
</tbody>
</table>

<?php $reservations_array=$conn->Query("SELECT rez.FirstName AS ReservationFirstName,rez.LastName AS ReservationLastName,
rez.DateRez AS ReservationDate,rez.PeriodRez AS PeriodOfTime,
rez.NrMasa AS ReservationTable, rez.Description AS ReservationDescription, rez.Observations AS ReservationObservations
FROM rezervari AS rez INNER JOIN user AS us ON
rez.IDRestaurant=us.IDRestaurant WHERE rez.IDRestaurant='$idUserRest'
ORDER BY rez.DateRez DESC");

$totalResults=mysqli_num_rows($reservations_array); 

$pages=ceil($totalResults/$numberOfReservation);   ?>


  <ul class="pagination">
   <?php
for($i=1;$i<=$pages;$i++){?>
    
    <li class="page-item"><a class="page-link" href="admin.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
  
<?php } 

?>
</ul>

