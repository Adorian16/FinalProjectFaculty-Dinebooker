

<?php
$sql="SELECT COUNT(*) AS TOTAL,PeriodRez AS PeriodTime,DATE_FORMAT(DateRez,'%a') AS DaysFormat FROM `rezervari` WHERE IDRestaurant=$idUserRest GROUP BY DAYOFWEEK(DateRez) ORDER BY DAYOFWEEK(DateRez)";

$result=mysqli_query($conn,$sql);

$monthsLC=array();
$totalMLC=array();
$periodMLC=array();
while($row=$result->fetch_assoc()){
    $totalMLC[]= $row['TOTAL'];
    $daysMLC[] = $row['DaysFormat'];
    $periodMLC[]=$row['PeriodTime'];
}

?>
<div class="myMixedLineChart">
    <canvas id="myMixedLineChart"></canvas>
</div>


<script>

    const daysMixedLineChart=<?php echo json_encode($daysMLC);?>;
        console.log(daysMixedLineChart);
    const totalMixedLineChart=<?php echo json_encode($totalMLC);?>;
        console.log(totalMixedLineChart);
    const periodMixedLineChart=<?php echo json_encode($periodMLC);?>;
        console.log(periodMixedLineChart);    


const dataMixedLineChart = {
  labels:daysMixedLineChart,
  datasets: [{
    type: 'bar',
    label: 'Bar Dataset',
    data: totalMixedLineChart,
    borderColor: 'rgb(255, 99, 132)',
    backgroundColor: 'rgb(255, 0, 0)'
  }, {
    type: 'line',
    label: 'Line Dataset',
    data: totalMixedLineChart,
    fill: false,
    borderColor: 'rgb(54, 162, 235)'
  }]
};
// </block:setup>

// <block:config:0>
const configMixedLineChart = {
  type: 'scatter',
  data: dataMixedLineChart,
  options: {
    scales: {
      y:{beginAtZero:true
        }
    }
  }
};

const myMixedLineChart= new Chart(
    document.getElementById('myMixedLineChart'),
    configMixedLineChart
)
</script>