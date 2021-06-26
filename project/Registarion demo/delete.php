<?php
	require("connection.php");
	extract($_GET);

	$q = "DELETE FROM register where id = '$id'";

	$q1 = mysqli_query($con,$q);
		if($q1 > 0){
			header("Location:view.php");
		}else
		{
			echo "Data is not deleted!";
		}
?>