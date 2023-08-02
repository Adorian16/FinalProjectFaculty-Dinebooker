<?php
$sql="SELECT COUNT(*) AS TOTAL,CONCAT(FirstName,' ',LastName) AS UNAME FROM `rezervari` WHERE IDRestaurant='$idUserRest' GROUP BY UNAME LIMIT 3;";

$result=mysqli_query($conn,$sql);

$user=array();
$totalRez=array();
$userName=array();



while($row=$result->fetch_assoc()){
    $userName[]=$row['UNAME'];
    $totalRez[]=$row['TOTAL'];
   
}

?>

<div class="pieChart">
    
<canvas id="myChartPie"></canvas>
</div>
<script>

const totalRez=<?php echo json_encode($totalRez);?>;
console.log(totalRez);
const UName=<?php echo json_encode($userName);?>;
console.log(UName);


const data = {
  labels: UName,
  datasets: [{
    label:0,
    data: totalRez,
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};

const config = {
  type: 'pie',
  data: data,
    options:{
        plugins:{
            title:{display:true,
            text:"TOP 3 Clients",
            font:{
                size:20
            }
        }

        }
    }
};


const myChart=new Chart(

    document.getElementById('myChartPie'),
    config
);
</script>
