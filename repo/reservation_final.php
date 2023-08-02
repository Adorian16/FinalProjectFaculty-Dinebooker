<?php 

    if(isset($_POST)){
    if(isset($_SESSION['IDUser'])){ 
         $_SESSION['IDUser'];
        $SIDUser=$_SESSION['IDUser'];
    }
        
         
        if(isset($_SESSION['FirstName'])){
             $_SESSION['FirstName'];
            $firstname=$_SESSION['FirstName'];
        }
            

            if(isset($_SESSION['LastName'])){
                 $_SESSION['LastName'];
                $lastname=$_SESSION['LastName'];
            }

                $period='';
                if(isset($_POST['select']))
                    {
                        $period=$_POST['select'];
                    }

                    $date='';
                    if(isset($_POST['date']))
                        {
                            $date=$_POST['date'];
                        }
                        $obs='';
                        if(isset($_POST['obs']))
                            {
                                $obs=$_POST['obs'];
                            }

                            if(isset($_GET['Table']))
                                {
                                    $table=$_GET['Table'];
                                }

                                if(isset($_GET['IDRestaurant']))
                                    {
                                        $rest=$_GET['IDRestaurant'];
                                    }

                                    if(isset($_GET['Description']))
                                        {
                                            $desc=$_GET['Description'];
                                        }

                if(reservation_already_in_db($rest,$date,$period,$table)==TRUE){?>
                <div id="rezAlert" class="alert alert-danger" role="alert">
                    We're sorry but this reservation is already taken. Please try another table or hour !
                </div>
                    
                <?php }else{
                    $sqlIn="INSERT INTO `rezervari`(`IDRestaurant`, `IDUser`, `FirstName`, `LastName`, `DateRez`, `PeriodRez`, `NrMasa`, `Description`,`Observations`) VALUES ('$rest','$SIDUser','$firstname','$lastname','$date','$period','$table','$desc','$obs')";
                    $result=mysqli_query($conn,$sqlIn);
                   if($result){?><div id="rezAlert" class="alert alert-success" role="alert">
                    <strong>Your reservation has been successfully booked. We look forward to welcoming you on <?php echo $date." ".$period;?> </strong>
                </div>
                    <?php $to=$_SESSION['Email'];
                           
?>
                
<?php 
                   }
                   
                }

            }         
                
        
?>







