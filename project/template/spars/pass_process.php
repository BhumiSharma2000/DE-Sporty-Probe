<?php 
session_start();
include_once "abc.php";
require "lib/model.php";
require "lib/validation.php";
extract($_POST);
trim($pass);
trim($cpass);
$pass = mysqli_real_escape_string($conn,$pass);
$cpass = mysqli_real_escape_string($conn,$cpass);
	if (isset($submit)) {
		$uid = $_SESSION['uid'];
		if ($pass == $cpass) {
			$str = "update user_master set u_password = '$pass' where u_id='$uid'";
			$q1= mysqli_query($conn,$str);
			if ($q1==1) {		
			$_SESSION['spass']="Congratulations!!! Password Changed...";		
			header("Location:login.php");
			exit();
			session_unset();
		}
		else
		{
			$_SESSION['cpass']="Both Password doesnt match";		
			header("Location:login.php");
		
		}
		}
	}
	else {
		header("Location:forgot.php");
	}
 ?>