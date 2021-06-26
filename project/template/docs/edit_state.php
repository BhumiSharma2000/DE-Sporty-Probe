<?php
session_start();
  include "lib/dbconnect.php";
  require 'lib/dao.php';
  $d = new dao();
  require 'adloginvalidation.php';
include 'header.php';

  extract($_GET);
  
?>

      <main class="app-content" style="background-color: #FFFFFF; ">
         <div class="app-title" style="background-color: #FFFFFF">
           
      
      
        <form method="POST" action="lib/controller_state.php" enctype="multipart/form-data">
          <input type="hidden" name="editID" value="<?php echo $id; ?>"><br>
         <h2>Edit State</h2>
          <div class="form-group">
            <label class="control-label">State</label>
            <input class="form-control" type="text" name="statename" placeholder=" Enter State" value="<?php echo $data['state_name'];?>">
   <?php
       if(isset($_SESSION['nameError'])){
        echo "<span style='color:red'>".$_SESSION['nameError']."</span>";
        unset($_SESSION['nameError']);
       }
         if(isset($_SESSION['exist'])){
        echo "<span style='color:red'>".$_SESSION['exist']."</span>";
        unset($_SESSION['exist']);
       }
      
   ?>
          </div>
          <div class="form-group">
         
           <input type="submit" name="btnupdate" class="btn btn-primary btn-block" i>
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
      <script type="text/javascript">
      function f1(){
       
        swal("State Entered Successfully ","");
    
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