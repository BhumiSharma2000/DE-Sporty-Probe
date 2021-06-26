<?php
   session_start();
   ?>
<?php
include "lib/dbconnect.php";
require 'lib/dao.php';
$d = new dao();
require 'adloginvalidation.php';
include 'header.php';

extract($_GET);

?>

<main class="app-content" style="background-color: #FFFFFF;">
 <div class="app-title" style="background-color: #FFFFFF">
  <div class="login-box" style="height: 1400px; width:350px;" >
   <!--  <img src="img/logo1.png" style="height: 150px; margin-left:180px;"> -->
   <form class="login-form"  method="POST" action="lib/controller_reg.php" enctype="multipart/form-data">
                  <!--  <br>
                     <br>
                     <br> -->
                     <input type="hidden" name="editID" value="<?php echo $id; ?>"><br>
                     <h3 style="margin-left: 100px;"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP
                     </h3>
                     <hr style="border:2px solid #007065;">
                     <div class="form-group">
                       <label class="control-label">First Name</label>
                       <input class="form-control" type="text" id="fname" placeholder="First Name" autofocus name="fn" value="<?php echo $data['u_fname'];?>">
                         <?php
                        if (isset($_SESSION['fnerr']))
                          {
                          echo "<span style='color:red'>" . $_SESSION['fnerr'] . "</span>";
                          unset($_SESSION['fnerr']);
                          }
                        
                        ?>

                       </div>
                     <div class="form-group" >
                       <label class="control-label">Last Name</label>
                       <input class="form-control" type="text" id="lname" placeholder="Last Name" name="ln" value="<?php echo $data['u_lname'];?>">
                          <?php
                        if (isset($_SESSION['lnerr']))
                          {
                          echo "<span style='color:red'>" . $_SESSION['lnerr'] . "</span>";
                          unset($_SESSION['lnerr']);
                          }
                        
                        ?>
                     </div>
                     <div class="form-group">
                       <label for="exampleSelect1">State</label>
                       <select class="form-control" name="state">
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
                        if (isset($_SESSION['drpdwn']))
                          {
                          echo "<span style='color:red'>" . $_SESSION['drpdwn'] . "</span>";
                          }
                        
                        ?>
                    </div>
                    <div class="form-group">
                     <label for="exampleSelect1">City</label>
                     <select class="form-control" name="city">
                       <?php
                       $con= mysqli_connect('localhost', 'root', '','spars');

                       $sql = "SELECT city_id,city_name FROM city_master";
                       $result = mysqli_query($con,$sql);

                       while ($row = mysqli_fetch_array($result)) {
                        /*echo "<select name='username' class='form-control'>";*/
                        echo "<option value='" . $row['city_id'] ."'>" . $row['city_name'] ."</option>";
                      }
                      /* echo "</select>";*/
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
                   <label class="control-label">Gender</label>
                   <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender" checked=<?php if($row['u_gender'] = "male") { echo "true"; }?>  value="male" required>Male
                    </label>
                    <label class="form-check-label" style="margin-left:25px;">
                      <input class="form-check-input" type="radio" name="gender"  checked=<?php if($row['u_gender'] = "female") { echo "true"; }?>  value="female" required>Female
                    </label>
                  </div>
                </div>
                <div class="form-group">
                 <label class="control-label">Birthdate</label>
                 <input class="form-control" type="Date" name="date" value="<?php echo strftime('%Y-%m-%d',
                 strtotime($data['u_bdate'])); ?>" />
                 <?php
                        if (isset($_SESSION['dateerr']))
                          {
                          echo "<span style='color:red'>" . $_SESSION['dateerr'] . "</span>";
                          unset($_SESSION['dateerr']);
                          }
                        
                        ?>
               </div>
               <div class="form-group">
                 <label class="control-label">Email</label>
                 <input class="form-control" type="Email" placeholder="Email" name="email"value="<?php echo $data['u_email'];?>">
                 <?php
                        if (isset($_SESSION['emailerr']))
                          {
                          echo "<span style='color:red'>" . $_SESSION['emailerr'] . "</span>";
                          unset($_SESSION['emailerr']);
                          }
                        
                        ?>
               </div>
                 <div class="form-group">
           <label class="control-label">Contact No (format: xxxxxxxxxx)</label>
            <input class="form-control" type="text" required placeholder=" Enter Contact No" name="cn" pattern="^\d{10}$" value="<?php echo $data['u_contactno'];?>" required >
          </div>
                 <div class="form-group">
                   <label for="exampleSelect1">Authority</label>
                   <select class="form-control" name="ar">
                     <?php
                     $con= mysqli_connect('localhost', 'root', '','spars');

                     $sql = "SELECT ar_id,ar_name FROM authority_master";
                     $result = mysqli_query($con,$sql);

                     /*echo "<select name='username' class='form-control'>";*/
                     while ($row = mysqli_fetch_array($result)) {
                      echo "<option value='" . $row['ar_id'] ."'>" . $row['ar_name'] ."</option>";
                    }
                    /* echo "</select>";*/
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
                 <label for="exampleSelect1">Sport</label>
                 <select class="form-control" name="sport">
                   <?php
                   $con= mysqli_connect('localhost', 'root', '','spars');

                   $sql = "SELECT s_id,s_name FROM sport_master";
                   $result = mysqli_query($con,$sql);

                   /*echo "<select name='username' class='form-control'>";*/
                   while ($row = mysqli_fetch_array($result)) {
                    echo "<option value='" . $row['s_id'] ."'>" . $row['s_name'] ."</option>";
                  }
                  /* echo "</select>";*/
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
               <label for="exampleSelect1">Category</label>
               <select class="form-control" name="cat">
                 <?php
                 $con= mysqli_connect('localhost', 'root', '','spars');

                 $sql = "SELECT s_id,cat_name FROM sport_category";
                 $result = mysqli_query($con,$sql);

                 /*echo "<select name='username' class='form-control'>";*/
                 while ($row = mysqli_fetch_array($result)) {
                  echo "<option value='" . $row['s_id'] ."'>" . $row['cat_name'] ."</option>";
                }
                /* echo "</select>";*/
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
            <input type="submit" name="btnupdate" class="btn btn-primary btn-block">
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
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript">
   function f1(){
     window.stop();
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