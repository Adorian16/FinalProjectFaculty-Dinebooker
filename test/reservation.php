<?php include 'header.php';
include 'db_connection.php';
include 'functions.php';
$table=$_GET['Table'];
$restuarant=$_GET['IDRestaurant'];
$tableDescriere=$_GET['Description'];


?> <br>
<?php include 'reservation_final.php'; ?>
 <form id="rez-form" method="POST" action="">

<div class="rez">
<div class="container-fluid">
<h5 id="rezTitle" class="modal-title" id="exampleModalLabel">Reservation</h5>
    <dl>
    <dt class="text-info">FirstName<dt>
        <dd class="ps-4"><?php  if(isset($_SESSION['FirstName'])){ echo $_SESSION['FirstName']; }else{ ?> <input type="text" id="firstname" placeholder="FirstName" name="firstname"><?php }?><dd>
        <dt class="text-info">LastName<dt>
        <dd class="ps-4"><?php if(isset($_SESSION['LastName'])){ echo $_SESSION['LastName']; }else{ ?> <input type="text" id="firstname" placeholder="FirstName" name="lastname"><?php }?><dd>
        <dt class="text-info">Table No<dt>
        <dd class="ps-4">#<?php echo isset($table) ? $table : "" ;?><dd>
        <dt class="text-info">Desctiption<dt>
        <dd class="ps-4"><?php echo isset($tableDescriere) ? $tableDescriere  :"" ?><dd>
    <dl>
  
      <div class="modal-body">
        <div class="form-group">
          <label for="message-text" class="col-form-label">Date:</label>
          <input type="date" class="form-control" name="date">
          </div>
          <div class="form-group">
          <label for="message-text" class="col-form-label">Period of time:</label>
          <select class="form-control" aria-label="Select the period" name="select">
              <option>8.00-11.00</option>
              <option>11.00-13.00</option>
              <option>13.00-15.00</option>
              <option>15.00-18.00</option>
              <option>18.00-21.00</option>
              <option>21.00-23.00</option>
          </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Observations:</label>
            <textarea class="form-control" id="message-text" name="obs"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a class="btn btn-secondary"href="javascript:history.back()" style="text-decoration: none;">Back</a>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>
</div>
<script src="rez-form-script.js"></script>
