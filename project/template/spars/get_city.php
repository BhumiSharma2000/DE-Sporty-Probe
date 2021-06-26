<?php
include_once "abc.php";
	require "lib/model.php";
	require "lib/validation.php";
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
		$q = "select * from city_master where state_id = '$state_id'";
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