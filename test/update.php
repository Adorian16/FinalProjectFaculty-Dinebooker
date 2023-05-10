<?php include "db_connection.php";
      include "headerAdmin.php";
      include "functions.php";

      $id=$_GET['id'];
      
    
      $sql="SELECT * FROM rezervari WHERE IDRezervare=$id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);


      
        if(isset($_GET)){
          $id='';
          if(isset($_GET['id'])){$id=$_GET['id'];}
        
          $date='';
          if(isset($_GET['date'])){$date=$_GET['date'];}
        
          $period='';
          if(isset($_GET['select'])){$period=$_GET['select'];}
        
          $table='';
          if(isset($_GET['table'])){ $table=$_GET['table'];}

          $rest='';
          if(isset($_GET['idRest'])){
            $rest=$_GET['idRest'];
          }
       
          $obs='';
          if(isset($_GET['obs'])){$obs=$_GET['obs'];}
        
    
        if(reservation_already_in_db($rest,$date,$period,$table)==TRUE)
        {?>
          <div id="rezAlert" class="alert alert-danger" role="alert">
                    There's already a reservation with the same informations. Lookup for another one.
                </div>
      <?php  }else
            {
              $sql="UPDATE `rezervari` SET `IDRezervare`='$id',`DateRez`='$date',`PeriodRez`='$period',`NrMasa`='$table',`Observations`='$obs' WHERE IDRezervare=$id";
               
              $result=mysqli_query($conn,$sql);

                  if($result)
                    {
                      header("Location:admin.php"); 
                        echo"  <div class='alert alert-success alert-dismissible fade show' role='alert'>
                          <strong>Changed successfuly!</strong>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div> ";

                   }else

                    {
                      echo "not updated"; 
                    }
            }
   
    
          }else{
            echo "gogule nu merge";
                }


      
?>
<form method="GET" action="">
        <input type="hidden" name="id" value="<?php echo $row['IDRezervare'];?>">
        <input type="hidden" name="idRest" value="<?php echo $row['IDRestaurant'];?>">
        <dt class="text-info">FirstName<dt>
        <dd class="ps-4"><?php echo $row['FirstName'];?></dd>
        <dt class="text-info">LastName<dt>
        <dd class="ps-4"><?php echo $row['LastName'];?></dd>
        <div class="form-group">
      <label for="message-text" class="col-form-label">Table:</label>
      <input type="text" class="form-control" name="table" value="<?php echo $row['NrMasa'];?>">
      </div>
      <div class="form-group">
      <label for="message-text" class="col-form-label">Date:</label>
      <input type="date" class="form-control" name="date" value="<?php echo $row['DateRez'];?>">
      </div>
      <div class="form-group">
      <label for="message-text" class="col-form-label">Period of time:</label>
      <select class="form-control" aria-label="Select the period" name="select">
        <option selected><?php echo $row['PeriodRez'];?></option>
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
        <input type="text" class="form-control" id="message-text" name="obs" value="<?php echo $row['Observations'];?>"></input>
      </div>
      <button onclick="alert('Are you sure ?')" type="submit" class="btn btn-primary">Submit</button>
</form>