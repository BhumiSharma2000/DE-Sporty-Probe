<?php
	require("connection.php");
	extract($_POST);
	if(isset($btnInsert)){
		$name = $txtname;
    	$email = $txtemail;
        $pass = $txtpass;
    	$phone = $txtph;
    	$gender = $gen;
    	$address = $txtaddress;
    	$country1 = $txtcountry;
    	$hobby = implode(',',$_POST["in"]);
    	// print_r($_POST);
    	// exit();
    	$q = "INSERT INTO register(name,email,password,phone,gender,address,country,interest) VALUES('$name','$email','$pass','$phone','$gender','$address','$country1','$hobby')";
    	// print_r($q);
    	// exit();
    	$data = mysqli_query($con,$q);
    	// print_r($data);
    	// exit();
        if($data == true){
            header("Location:view.php");
        }
	}
?>