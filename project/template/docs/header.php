<?php

require 'adloginvalidation.php';

session_start();
$dt = $_SESSION['user_id'];


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
      <title>City</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Main CSS-->
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <!-- Font-icon css-->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                  <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
               </ul>
            </li>
         </ul>
      </header>
      <!-- Sidebar menu-->
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <aside class="app-sidebar">
         <div class="app-sidebar__user" >
            <img class="app-sidebar__user-avatar" style="height: 40px" src="img/dp.jpg " alt="User Image">
             <div><?php     $con = mysqli_connect('localhost', 'root', '', 'spars');
                           $sql = "SELECT * FROM user_master WHERE u_id='$dt'";
                           $result = mysqli_query($con,$sql);
                           $result1 = mysqli_fetch_array($result);
                            ?>
               <p class="app-sidebar__user-name"><?php echo $result1['u_fname']." ". $result1['u_lname']; ?></p>
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