<!DOCTYPE html>
<html lang="en">
   <head>
    <title>Expenditure</title>
<?php
session_start();
include 'header.php';

?>

     <main class="app-content" >
       <div class="row" style="margin-left: 250px; margin-top:120px;">
        <div class="col-md-6">
          <div class="tile">
             <form class="login-form"  method="POST" action="report-type.php" enctype="multipart/form-data">
                  <!--  <br />
                     <br />
                     <br /> -->
                  <h4 style="margin-left: 60px">Generate Expense Report</h4>
                  <hr style="border:2px solid #007065;">
                     <div class="form-group">
                     <label for="exampleSelect1">Athlete</label>
                     <select class="form-control" name="athlete" required>
                        <option value="-1">Select Athlete</option>
                        <?php
                           $con = mysqli_connect('localhost', 'root', '', 'sportyprobe');
                           $sql = "SELECT * FROM user_master WHERE role_id=9";
                           $result = mysqli_query($con, $sql);
                           while ($row = mysqli_fetch_array($result))
                             {
                             echo "<option value='" . $row['u_id'] . "'>" . $row['u_fname'] . "</option>";
                             }
                           
                           ?>
                     </select>
                     <?php
                        if (isset($_SESSION['err']))
                          {
                          echo "<span style='color:red'>" . $_SESSION['err'] . "</span>";
                          unset($_SESSION['err']);
                          }
                        
                        ?>
                  </div>    

<br>
                
                  <div class="form-group btn-container">
                     <input type="submit" name="Generate" class="btn btn-primary btn-block">
                     <?php unset($_SESSION['drpdwn']); ?>
                  </div>
               </form>
          </div>
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
      
      </script>
      <!-- Google analytics script-->
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
<?php






?>