<?php
require "connection.php";
session_start();
extract($_POST);
if (isset($submit))
{
$username=$_POST['username'];
$password=$_POST['password'];
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);
$str = "select * from user_master where u_password='$password' && u_email='$username'";
    $result = mysqli_query($conn,$str);
  $result1 = mysqli_fetch_array($result);
 $data = mysqli_num_rows($result);
 $role = $result1['role_id'];
if ($data == 1)
 {

$_SESSION['logged'] = 1;
$_SESSION['login_user']=$username; 
$_SESSION['user_id']=$result1['u_id']; 

if($role==12)

{
	$_SESSION['role_coach'] = 'coach';
	header("location:../../../coach/docs/index.php"); 
	exit();
}
if($role==13)
{$_SESSION['role_ad'] = 'admin';
	header("location:../docs/index.php");  
	exit();
}
if($role==7)
{$_SESSION['role_m'] = 'manager';
	header("location:../../../manager/template/docs/index.php"); 
	exit();
}
if($role==8)
{$_SESSION['role_p'] = 'Physio';
	header("location:../../../physio/index.php"); 
	exit();
}
if($role==9)
{$_SESSION['role_athlete'] = 'Athlete';
	header("location:../../../athlete/index.php"); 
	exit();
}
if($role==10)
{$_SESSION['role_nr'] = 'Nutritionist';
	header("location:../../../nr/docs/index.php"); 
	exit();
}
if($role==11)
{$_SESSION['role_tr'] = 'Trainer';
	header("location:../../../trainer/index.php"); 
	exit();
}
} else {
	$_SESSION['data'] = "Wrong crendentails!";
	header("location:login.php"); 
}
mysqli_close($connection); // Closing Connection
}


?>
 

