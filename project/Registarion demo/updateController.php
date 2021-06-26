<?php
	require("connection.php");
	extract($_POST);

	if(isset($btnUpdate)){
		$hobby = implode(',',$_POST["in"]);
		$sql = "UPDATE register SET
				name = '$txtname',
				email = '$txtemail',
				phone = '$txtph',
				gender = '$gen',
				address = '$txtaddress',
				country = '$txtcountry',
				interest = '$hobby' WHERE id = '$editID'";
		$q1 = mysqli_query($con, $sql);
		if($q1>0){
			header("Location:view.php");
		}else
		{
			echo "Data is not Updated.";
		}
	}
?>