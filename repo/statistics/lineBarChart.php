<?php
$sql="SELECT COUNT(rez.DateRez) AS TOTAL, 
DATE_FORMAT(rez.DateRez,'%M') AS ReservationDate FROM rezervari AS rez WHERE rez.IDRestaurant='$idUserRest'
GROUP BY MONTH(rez.DateRez)";

$result=mysqli_query($conn,$sql);

$months=array();
$total=array();
while($row=$result->fetch_assoc()){
    $total[]= $row['TOTAL'];
    $months[] = $row['ReservationDate'];
}



?>

<div class="myBox">
  <canvas id="myChart"></canvas>
</div>



<script>

    
    const months=<?php echo json_encode($months);?>;
    console.log(months);
    const total=<?php echo json_encode($total);?>;
    console.log(total);
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: months,
      datasets: [{
        label: 'No. Reservations',
        data: total,
        borderWidth: 1
      }]   
    },
    options: {
        plugins:{
            title:{display:true,
            text:"Reservation Graphic",
            font:{
              size:20
            }
            }
        },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
 