<?php 
	include_once "sbc.php";
require "lib/model.php";
require "lib/validation.php";
	extract($_GET);
	if (isset($id)) {
	if ($action=="Active") {
	$q="update user_master set isactive = 1 where u_id='$id'";
	$data = mysqli_query($conn,$q);
	if ($data=1) {
		header("Location:view_sport-manager.php");
	}
	else {
		echo mysqli_error($data);
	}
}
	else
	{
	$q="update user_master set isactive = 0 where u_id='$id'";
	$data = mysqli_query($conn,$q);
	if ($data=1) {
		header("Location:view_sport-manager.php");
		
	}
	else {
		echo mysqli_error($data);
	}
}
}
else {
		header("Location:view_sport-manager.php");
	
}
 ?>