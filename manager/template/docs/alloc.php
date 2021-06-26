<!DOCTYPE html>
<html lang="en">
   <head>
    <title>Allocation</title>
<?php
session_start();
include 'header.php';
include 'connection.php';
  require 'lib/dao.php';
  $d = new dao();

?>

      <main class="app-content" style="background-color: #FFFFFF;">
         <div class="app-title" style="background-color: #FFFFFF">
            <div class="login-box" style="height: 1400px; width:350px;" >
               <form class="login-form"  method="POST" action="lib/controller_alloc.php" enctype="multipart/form-data">
                  <h3 style="margin-left: 100px;"><i class="fa fa-lg fa-fw fa-user"></i>ALLOCATION
                  </h3>
                  <hr style="border:2px solid #007065;">
                  <div class="form-group">
                     <label for="exampleSelect1">Athlete</label>
                     <select class="form-control" name="athlete">
                        <option value="-1">Select Athlete</option>
                          <?php
                              $sql = "SELECT * FROM user_master where role_id='9'";
                              $result = mysqli_query($conn,$sql);
                              while ($row = mysqli_fetch_array($result)) 
                          {?>
                                <option value="<?php echo $row['u_id'];?>"><?php echo $row['u_fname'];?></option>
                          <?php 
                          }
                          ?>
                     </select>
                     <?php
                        if (isset($_SESSION['drpdwn']))
                          {
                              echo "<span style='color:red'>" . $_SESSION['drpdwn'] . "</span>";
                          }
                        ?>
                  </div>
                  <div class="form-group">
                     <label for="exampleSelect1">Coach</label>
                     <select class="form-control" name="coach">
                        <option value="-1">Select Coach</option>
                         <?php
                              $sql = "SELECT * FROM user_master where role_id='12'";
                              $result = mysqli_query($conn,$sql);
                              while ($row = mysqli_fetch_array($result)) 
                              {
                        ?>
                        <option value="<?php echo $row['u_id'];?>"><?php echo $row['u_fname'];?></option>
                        <?php 
                              }
                        ?>
                     </select>
                     <?php
                        if (isset($_SESSION['drpdwn']))
                          {
                          echo "<span style='color:red'>" . $_SESSION['drpdwn'] . "</span>";
                          }
                        
                        ?>
                     </select>
                     <?php
                        if (isset($_SESSION['drpdwn']))
                          {
                          echo "<span style='color:red'>" . $_SESSION['drpdwn'] . "</span>";

                          }
                        
                        ?>
                  </div>
            
                   <div class="form-group btn-container">
                     <input type="submit" name="Insert" class="btn btn-primary btn-block">
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
      <script type="text/javascript" src="js/alert.js"></script>
      <?php if(isset($_SESSION['city'])){?>
        <script>
          swal("Allocation Successfully ","");
         
        </script>   
    <?php }
     unset($_SESSION['city']);?>
   </body>
</html>