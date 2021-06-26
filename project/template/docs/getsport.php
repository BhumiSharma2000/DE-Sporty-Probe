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
			?><option>Select Sport</option><?php 
		$q = "SELECT sport_master.s_name FROM sport_master,authority_master WHERE sport_master.s_id = authority_master.s_id AND authority_master.ar_id='$ar_id'";

		$result = mysqli_query($conn,$q);
		// print_r($result);
		// exit();
		if(mysqli_num_rows($result) > 0)
		{
			while($data = mysqli_fetch_array($result)){
				?>
				<option value="<?php echo $data["s_id"];?>"><?php echo $data["s_name"];?></option>
				<?php 
			}	
		}

?>
		
		
	

</body>
</html>