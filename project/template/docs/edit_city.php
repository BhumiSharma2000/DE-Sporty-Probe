
<?php


session_start();

  include "lib/dbconnect.php";
  require 'lib/dao.php';
  $d = new dao();
  error_reporting(0);
  extract($_GET);

session_start();
require 'adloginvalidation.php';
include 'header.php';

?>
     <main class="app-content" style="background-color: #FFFFFF; ">
         <div class="app-title" style="background-color: #FFFFFF">
           
      
      
        <form method="POST" action="lib/controller_city.php" enctype="multipart/form-data">
           <input type="hidden" name="editID" value="<?php echo $id; ?>"><br>
         <h2>Entry Of city</h2>
         <div class="form-group">
                    <label for="exampleSelect1">State</label>
                    <select class="form-control" name="State"  >
  <option value="<?php echo $data1['state_id'];?>"><?php echo $data1['state_name'];?></option>

                      <?php
                $con= mysqli_connect('localhost', 'root', '','spars');
                
                  $sql = "SELECT state_id,state_name FROM state_master";
                  $result = mysqli_query($con,$sql);
                  /*echo "<select name='username' class='form-control'>";*/
                  while ($row = mysqli_fetch_array($result)) {?>
                    <option value="<?php echo $row['state_id'];?>"><?php echo $row['state_name'];?></option>
                  <?php }
                 /* echo "</select>";*/
               ?>

                    </select>
                  </div>
          <div class="form-group">
            <label class="control-label">City</label>
            <input class="form-control" type="text" required placeholder="city" name="city" value="<?php echo $data['city_name'];?>">
          </div>
          <div class="form-group">
         
           <input type="submit" name="btnupdate" class="btn btn-primary btn-block">
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
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
      
      <!-- Google analytics script-->
      <script type="text/javascript">
        function f1(){
        
        swal("City Entered Successfully ","");
    
}
         if(document.location.hostname == 'pratikborsadiya.in') {
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-72504830-1', 'auto');
          ga('send', 'pageview');
         }
      </script>
   </body>
</html>