<?php

  $conn= mysqli_connect('localhost', 'root', '','health_city');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php
		
		extract($_POST);
	/*	if($_POST["stateid"] == 0) {
				?><option>Select City</option><?php
			} */
			?><option>Select City</option><?php 
		$q = "select * from city_master where state_id = '$stateid'";
		$result = mysqli_query($conn,$q);
		// print_r($result);
		// exit();
		if(mysqli_num_rows($result) > 0)
		{
			while($data = mysqli_fetch_array($result)){
				?>
				<option value="<?php echo $data["city_id"];?>"><?php echo $data["city_name"];?></option>
				<?php 
			}	
		}

?>
		
		
	

</body>
</html>