<?php
   session_start();
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
      <!-- Twitter meta-->
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:site" content="@pratikborsadiya">
      <meta property="twitter:creator" content="@pratikborsadiya">
      <!-- Open Graph Meta-->
      <meta property="og:type" content="website">
      <meta property="og:site_name" content="Vali Admin">
      <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
      <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
      <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
      <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
      <title>Registration</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Main CSS-->
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <!-- Font-icon css-->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


       <script type="text/javascript">
   
    function getCity(val){
      /* alert("Hi"); */
      $.ajax({
        url: "get_city.php",
        type: "POST",
        data: {'state_id': val},
        success: function(data){
          $("#city-list").html(data);
        }
      });

    }

     function getsport(val){
      /* alert("Hi"); */
      $.ajax({
        url: "getsport.php",
        type: "POST",
        data: {'ar_id': val},
        success: function(data){
          $("#sport-list").html(data);
        }
      });
    }

  function getcat(val){
      /* alert("Hi"); */
      $.ajax({
        url: "getcat.php",
        type: "POST",
        data: {'s_id': val},
        success: function(data){
          $("#cat-list").html(data);
        }
      });
    }
       
    


  </script>

   </head>
   <body class="app sidebar-mini rtl">
      <!-- Navbar-->
      <header class="app-header" style="background-color: #66b2cc">
         <a class="app-header__logo" href="index.php" style="background-color: #66b2cc; font-family: Georgia;">SPARS</a>
         <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
         <!-- Navbar Right Menu-->
         <ul class="app-nav">
            <li class="app-search">
               <input class="app-search__input" type="search" placeholder="Search">
               <button class="app-search__button"><i class="fa fa-search"></i></button>
            </li>
            <!--Notification Menu-->
            <li class="dropdown">
               <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
               <ul class="dropdown-menu settings-menu dropdown-menu-right">
                  <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
               </ul>
            </li>
         </ul>
      </header>
      <!-- Sidebar menu-->
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <aside class="app-sidebar">
         <div class="app-sidebar__user" >
            <img class="app-sidebar__user-avatar" style="height: 40px" src="img/dp.jpg " alt="User Image">
            <div>
               <p class="app-sidebar__user-name">Dhrumil Parikh</p>
               <p class="app-sidebar__user-designation">System admin </p>
            </div>
         </div>
         <ul class="app-menu">
            <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
            <li class="treeview">
               <a class="app-menu__item" href="#" data-toggle="treeview"></i><span class="app-menu__label">City</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
                  <li><a class="treeview-item" href="cityadd.php"> Add City</a></li>
                  <li><a class="treeview-item" href="view_city.php">Show City</a></li>
               </ul>
            </li>
            <li class="treeview">
               <a class="app-menu__item" href="#" data-toggle="treeview"></i><span class="app-menu__label">State</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
                  <li><a class="treeview-item" href="stateadd.php"> Add State</a></li>
                  <li><a class="treeview-item" href="view_state.php">Show State</a></li>
               </ul>
            </li>
            <li class="treeview">
               <a class="app-menu__item" href="#" data-toggle="treeview"></i><span class="app-menu__label">Sport</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
                  <li><a class="treeview-item" href="Sport.php"> Add Sport</a></li>
                  <li><a class="treeview-item" href="view_sport.php">Show Sport</a></li>
               </ul>
            </li>
            <li class="treeview">
               <a class="app-menu__item" href="#" data-toggle="treeview"></i><span class="app-menu__label">Sport Category</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
                  <li><a class="treeview-item" href="sport-cat.php"> Add Category</a></li>
                  <li><a class="treeview-item" href="view_sport-cat.php">Show Category</a></li>
               </ul>
            </li>
            <li class="treeview">
               <a class="app-menu__item" href="#" data-toggle="treeview"></i><span class="app-menu__label">Sport Manager</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
                  <li><a class="treeview-item" href="reg-final.php"> Add Sport Manager</a></li>
                  <li><a class="treeview-item" href="view_sport-manager.php">Show Sport Manager</a></li>
               </ul>
            </li>
            <li class="treeview">
               <a class="app-menu__item" href="#" data-toggle="treeview"></i><span class="app-menu__label">Sport Authority</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
                  <li><a class="treeview-item" href="sport-autho.php"> Add Authoprity</a></li>
                  <li><a class="treeview-item" href="view_sport-autho.php">Show Authority</a></li>
               </ul>
            </li>
            <li class="treeview">
               <a class="app-menu__item" href="#" data-toggle="treeview"></i><span class="app-menu__label">Role</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
                  <li><a class="treeview-item" href="Role.php"> Add Role</a></li>
                  <li><a class="treeview-item" href="view_role.php">Show Role</a></li>
               </ul>
            </li>
         </ul>
      </aside>
      <main class="app-content" style="background-color: #FFFFFF; ">
         <div class="app-title" style="background-color: #FFFFFF">
            <div class="login-box" style="height: 1400px; width:350px;" >
               <!--  <img src="img/logo1.png" style="height: 150px; margin-left:180px;"> -->
               <form class="login-form"  method="POST" action="lib/controller_reg.php" enctype="multipart/form-data">
                  <!--  <br />
                     <br />
                     <br /> -->
                  <h3 style="margin-left: 100px;"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP
                  </h3>
                  <hr style="border:2px solid #007065;">
                  <div class="form-group">
                     <label class="control-label">First Name</label>
                     <input class="form-control" type="text" id="fname" placeholder="First Name" autofocus name="fn">
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
                     <input class="form-control" type="text" id="lname" placeholder="Last Name" name="ln">
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
                     <select class="form-control" name="state" id="state_list" onchange="getCity(this.value);">
                        <option value="-1">Select State</option>
                        <?php
                           $con = mysqli_connect('localhost', 'root', '', 'spars');
                           $sql = "SELECT state_id,state_name FROM state_master";
                           $result = mysqli_query($con, $sql);
                           while ($row = mysqli_fetch_array($result))
                             {
                             echo "<option value='" . $row['state_id'] . "'>" . $row['state_name'] . "</option>";
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
                     <label for="exampleSelect1">City</label>
                     <select class="form-control" name="city" id="city-list">
                        <option value="-1">Select city</option>
                        <?php
                           $con = mysqli_connect('localhost', 'root', '', 'spars');
                           $sql = "SELECT city_id,city_name FROM city_master";
                           $result = mysqli_query($con, $sql);
                           
                           while ($row = mysqli_fetch_array($result))
                             {
                             /*echo "<select name='username' class='form-control'>";*/
                             echo "<option value='" . $row['city_id'] . "'>" . $row['city_name'] . "</option>";
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
                        <input class="form-check-input" type="radio" name="gender" value="male" required>Male
                        </label>
                        <label class="form-check-label" style="margin-left:25px;">
                        <input class="form-check-input" type="radio" name="gender" value="female" required>Female
                        </label>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label">Birthdate</label>
                     <input class="form-control" type="Date" name="date">
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
                     <input class="form-control" type="Email" placeholder="Email" name="email">
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
                     <input class="form-control" type="text" required placeholder=" Enter Contact No" name="cn" pattern="^\d{10}$" required >
                  </div>
                  <div class="form-group">
                     <label for="exampleSelect1">Authority</label>
                     <select class="form-control" name="ar" onchange="getsport(this.value);"  id="autho_list" >
                        <option value="-1">Select Authority</option>
                        <?php
                           $con = mysqli_connect('localhost', 'root', '', 'spars');
                           $sql = "SELECT ar_id,ar_name FROM authority_master";
                           $result = mysqli_query($con, $sql);
                           /*echo "<select name='username' class='form-control'>";*/
                           
                           while ($row = mysqli_fetch_array($result))
                             {
                             echo "<option value='" . $row['ar_id'] . "'>" . $row['ar_name'] . "</option>";
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
                     <select class="form-control" name="sport" id="sport-list" onchange="getcat(this.value);"  >
                        <option value="-1">Select Sport</option>
                        <?php
                           $con = mysqli_connect('localhost', 'root', '', 'spars');
                           $sql = "SELECT s_id,s_name FROM sport_master";
                           $result = mysqli_query($con, $sql);
                           /*echo "<select name='username' class='form-control'>";*/
                           
                           while ($row = mysqli_fetch_array($result))
                             {
                             echo "<option value='" . $row['s_id'] . "'>" . $row['s_name'] . "</option>";
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
                     <select class="form-control" name="cat" id="cat-list">
                        <option value="-1">Select Category</option>
                        <?php
                           $con = mysqli_connect('localhost', 'root', '', 'spars');
                           $sql = "SELECT s_id,cat_name FROM sport_category";
                           $result = mysqli_query($con, $sql);
                           /*echo "<select name='username' class='form-control'>";*/
                           
                           while ($row = mysqli_fetch_array($result))
                             {
                             echo "<option value='" . $row['sc_id'] . "'>" . $row['cat_name'] . "</option>";
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
                     <label class="control-label">Password</label>
                     <input class="form-control" type="Password" id="pass" placeholder="Password" autofocus name="pass" required>
                  </div>
                  <div class="form-group" >
                     <label class="control-label">Confirm Password</label>
                     <input class="form-control" type="Password" id="cpass" placeholder="Conf Your Password " name="cpass" required>
                     <?php
                        if (isset($_SESSION['passmatch']))
                          {
                          echo "<span style='color:red'>" . $_SESSION['passmatch'] . "</span>";
                          unset($_SESSION['passmatch']);
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
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script type="text/javascript" src="js/alert.js"></script>
      <?php if(isset($_SESSION['city'])){?>
        <script>
          swal("User Entered Successfully ","");
         
        </script>   
    <?php }
     unset($_SESSION['city']);?>
  
   </body>
</html>
<!-- <div class="form-group">
   <label for="exampleSelect1">Role</label>
   <select class="form-control" name="role" >
   <?php
      $con = mysqli_connect('localhost', 'root', '', 'spars');
      $sql = "SELECT role_id,role_name FROM role_master";
      $result = mysqli_query($con, $sql);
      /*echo "<select name='username' class='form-control'>";*/
      
      while ($row = mysqli_fetch_array($result))
        {
        echo "<option value='" . $row['role_id'] . "'>" . $row['role_name'] . "</option>";
        }
      
      /* echo "</select>";*/
      ?>
   </select>
   </div> -->