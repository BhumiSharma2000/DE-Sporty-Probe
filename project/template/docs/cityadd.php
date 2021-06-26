<?php

session_start();
require 'adloginvalidation.php';
include 'header.php'


?>

     <main class="app-content" style="background-color: #FFFFFF; ">
         <div class="app-title" style="background-color: #FFFFFF">
           
      
      
        <form method="POST" action="lib/controller_city.php" enctype="multipart/form-data">
         <h2>Entry Of city</h2>
         <div class="form-group">
                    <label for="exampleSelect1">State</label>
                    <select class="form-control" name="State">

                      <option value="0">Select State</option>
                      <?php
                $con= mysqli_connect('localhost', 'root', '','spars');
                
                  $sql = "SELECT state_id,state_name FROM state_master";
                  $result = mysqli_query($con,$sql);

                  /*echo "<select name='username' class='form-control'>";*/
                  while ($row = mysqli_fetch_array($result)) {
                      echo "<option value='" . $row['state_id'] ."'>" . $row['state_name'] ."</option>";
                  }
                 /* echo "</select>";*/
               ?>
                    </select>
                    <?php
       if(isset($_SESSION['stateerr'])){
        echo "<span style='color:red'>".$_SESSION['stateerr']."</span>";
        unset($_SESSION['stateerr']);
       }
   ?>
                  </div>
          <div class="form-group">
            <label class="control-label">City</label>
            <input class="form-control" type="text" required placeholder="city" name="city" required>
              <?php
       if(isset($_SESSION['cityerr'])){
        echo "<span style='color:red'>".$_SESSION['cityerr']."</span>";
        unset($_SESSION['cityerr']);

       }

     if(isset($_SESSION['exist'])){
        echo "<span style='color:red'>".$_SESSION['exist']."</span>";
        unset($_SESSION['exist']);
       }
   ?>
  
          </div>
          <div class="form-group">
         
           <input type="submit" name="Insert" class="btn btn-primary btn-block">
          </div>
        </form>

         </div>
         
      </main>
      <!-- Essential javascripts for application to work-->
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
      <!-- The javascript plugin to display page loading on top-->
      <script src="js/plugins/pace.min.js"></script>
      <!-- Page specific javascripts-->
      <script type="text/javascript" src="js/plugins/chart.js"></script>
       <script type="text/javascript" src="js/alert.js"></script>
      <?php if(isset($_SESSION['city'])){?>
        <script>
          swal("City Entered Successfully ","");
         
        </script>   
    <?php }
     unset($_SESSION['city']);?>
       
   </body>
</html>