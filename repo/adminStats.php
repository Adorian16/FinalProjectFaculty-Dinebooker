
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php include "db_connection.php";
include "headerAdmin.php";

?>
<div class="lineBar">
<?php
include "statistics/lineBarChart.php";
?>
</div>

<div class="pieBar">
<?php
include "statistics/pieChart.php";
?>
</div>



<div class="polarChart">
<?php
include "statistics/polarChart.php";
?>
</div>


<div class="mixedLineChart">
<?php
include "statistics/mixedLineChart.php";
?>
</div>