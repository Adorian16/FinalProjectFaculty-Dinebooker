<?php include 'header.php'; ?>
        <section class="s1">
            <div id="info">
           <h1>Welcome, dear <?php if($_SESSION){
  echo  $_SESSION['FirstName'].' '.$_SESSION['LastName'];
      }elseif(!$_SESSION){
        echo 'client';
      } ?> !</h1>
           <h2><b>Here you can search for a restaurant and make a table reservation.</b></h2>

           <?php include "search-form.php";?>
            
            </div>

           
           
             <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,288L30,277.3C60,267,120,245,180,208C240,171,300,117,360,117.3C420,117,480,171,540,170.7C600,171,660,117,720,133.3C780,149,840,235,900,256C960,277,1020,235,1080,224C1140,213,1200,235,1260,256C1320,277,1380,299,1410,309.3L1440,320L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
               
          </section>
</div>    

  <section class="s2">
    <svg class="wave2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#343A40" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,224C384,213,480,139,576,101.3C672,64,768,64,864,96C960,128,1056,192,1152,202.7C1248,213,1344,171,1392,149.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

      <div class="title">

          <h1>How to use our site ?</h1>


      </div>


    <img class="steps" src="img/create_account/Steps.png" >

</section>

<section class="s3">


</section>

</body>

</html>