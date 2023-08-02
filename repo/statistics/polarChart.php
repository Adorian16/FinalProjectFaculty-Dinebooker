
<?php 

$sql="SELECT COUNT(*) AS TOTAL,NrMasa AS Tables FROM `rezervari` WHERE IDRestaurant='$idUserRest' GROUP BY NrMasa LIMIT 4;";

$result=mysqli_query($conn,$sql);

$tablePC=array();
$totalPC=array();
while($row=$result->fetch_assoc()){
    $totalPC[]= $row['TOTAL'];
    $tablePC[] = $row['Tables'];
}

?>
<div class="myPolarChart1">
    <canvas id="myPolarChart"></canvas>
</div>
<script>

const tablePolarChart=<?php echo json_encode($tablePC);?>;
    console.log(tablePolarChart);
    const totalPolarChart=<?php echo json_encode($totalPC);?>;
    console.log(totalPolarChart);

const dataPolarChart = {
  labels: tablePolarChart,
  datasets: [{
    label: 'Reservation times',
    data: totalPolarChart,
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(75, 192, 192)',
      'rgb(255, 205, 86)',
      'rgb(201, 203, 207)',
      'rgb(54, 162, 235)'
    ]
  }]
};
// </block:setup>

// <block:config:0>
const configPolarChart = {
  type: 'polarArea',
  data: dataPolarChart,
  options: { 
    plugins:{
    title:{
        display:true,
        text:"Prefered tables",
        font:{
            size:20
        }
    }
   
  }}
};

const myPolarChart= new Chart(
    document.getElementById('myPolarChart'),
    configPolarChart
);
</script>