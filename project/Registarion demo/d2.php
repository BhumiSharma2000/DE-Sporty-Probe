

  <?php
session_start();
echo "your name is " . $_SESSION["login"]["username"] . ".<br>";
?>
 <div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
  <?php  if($_SESSION['login']==1)
    {
    echo "dhbidov";
     ?>
     <li><a href="d2.php">Logout</a></li>
      <li><a href="#">Profile</a></li>
    <?php 
} else { ?>
      
      <li><a href="login.php">Login</a></li>
      <li><a href="#">Contact us</a></li>
    <?php } ?>
     <li><a href="#">Contact us</a></li>
       </ul>
</div>x  X
 