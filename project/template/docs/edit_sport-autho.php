<?php
  include "lib/dbconnect.php";
  require 'lib/dao.php';
  $d = new dao();
  session_start();
  extract($_GET);
  require 'adloginvalidation.php';
include 'header.php';

  
?>

      <main class="app-content" style="background-color: #FFFFFF; ">
         <div class="app-title" style="background-color: #FFFFFF">
       <form method="POST" action="lib/controller_sport-autho.php" enctype="multipart/form-data">
         <input type="hidden" name="editID" value="<?php echo $id; ?>"><br>
         <h2>Entry Of Sport Authority</h2>
           <div class="form-group">
            <label class="control-label">Name of Authority</label>
            <input class="form-control" type="text" required placeholder=" Enter Sport Authority " name="sa" value="<?php echo $data['ar_name'];?>">
               <?php
       if(isset($_SESSION['saerr'])){
        echo "<span style='color:red'>".$_SESSION['saerr']."</span>";
        unset($_SESSION['saerr']);
       }
                          
       if(isset($_SESSION['exist'])){
        echo "<span style='color:red'>".$_SESSION['exist']."</span>";
        unset($_SESSION['exist']);
       }
   
   ?>
          </div>
          <div class="form-group">
                    <label for="exampleSelect1">Sport</label>
                    <select class="form-control" name="sport">
                       <?php
                $con= mysqli_connect('localhost', 'root', '','spars');
                
                  $sql = "SELECT s_id,s_name FROM sport_master";
                  $result = mysqli_query($con,$sql);

                  while ($row = mysqli_fetch_array($result)) {
                      echo "<option value='" . $row['s_id'] ."'>" . $row['s_name'] ."</option>";
                  }
           
               ?>

                    </select>
                         <?php
       if(isset($_SESSION['sporterr'])){
        echo "<span style='color:red'>".$_SESSION['sporterr']."</span>";
        unset($_SESSION['sporterr']);
       }
   ?> 
                  </div>
         <div class="form-group row">
                  <label class="control-label col-md-3"> Office Address<br></label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" placeholder="Enter your address" name="add" ><?php echo trim($data['off_add']);?>
                    </textarea>
                      <?php
       if(isset($_SESSION['add'])){
        echo "<span style='color:red'>".$_SESSION['add']."</span>";
        unset($_SESSION['add']);
       }
       ?>
                  </div>
                </div>
                 <div class="form-group">
            <label class="control-label">Contact No</label>
            <input class="form-control" type="text" required placeholder=" Enter Contact No" name="cn"  value="<?php echo $data['ar_contact'];?>">
          </div>
           <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" type="Email" required placeholder=" Enter Email" name="email"  value="<?php echo $data['ar_email'];?>">
              <?php
       if(isset($_SESSION['email'])){
        echo "<span style='color:red'>".$_SESSION['email']."</span>";
        unset($_SESSION['email']);
       }
        if(isset($_SESSION['emailexist'])){
        echo "<span style='color:red'>".$_SESSION['emailexist']."</span>";
        unset($_SESSION['emailexist']);
       }
   ?>   
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
      <script type="text/javascript">
        
      <script type="text/javascript">
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