<?php
	require("connection.php");
	extract($_GET);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$sql = "SELECT * FROM register WHERE id = '$id'";
	$q1 = mysqli_query($con, $sql);
	$data = mysqli_fetch_array($q1);
?>
<form action="updateController.php" method="POST">
	<input type="hidden" name="editID" value="<?php echo $id; ?>"><br>
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="txtname" value="<?php echo $data['name'];?>"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="txtemail" value="<?php echo $data['email'];?>"></td>
		</tr>
		<tr>
			<td>Phone No.</td>
			<td><input type="text" name="txtph" value="<?php echo $data['phone'];?>"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
<input type="radio" name="gen" value="Male" <?php if($data['gender']=="Male"){ echo "checked";}?>/>Male
<input type="radio" name="gen" value="female" <?php if($data['gender']=="female"){ echo "checked";}?>/>Female
			</td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><textarea cols="20" name="txtaddress">
				<?php echo trim($data['address']);?>
			</textarea></td>
		</tr>
		<tr>
			<td>Country:</td>
			<td><select name="txtcountry">
				<option value="<?php echo $data['country'];?>"><?php echo $data['country'];?></option>
				<option value="India">India</option>
				<option value="USA">USA</option>
				<option value="Australia">Australia</option>
				<option value="Canada">Canada</option>
			</select></td>
		</tr>
		<tr>
			<td>Interest:</td>
			<td>
				<?php $chk=$data['interest'];
					  $in=explode(",",$chk);
				?>
				<input <?php if(in_array("chess",$in)){echo "checked";}?> type="checkbox" name="in[]" value="chess">Chess
				<input <?php if(in_array("cricket",$in)){echo "checked";}?> type="checkbox" name="in[]" value="cricket">Cricket
				<input <?php if(in_array("football",$in)){echo "checked";}?> type="checkbox" name="in[]" value="football">Football
				<input <?php if(in_array("basketball",$in)){echo "checked";}?> type="checkbox" name="in[]" value="basketball">Basketball</td>
		</tr>
		<tr>
			<td><input type="submit" name="btnUpdate" value="Submit"></td>
			<td><input type="reset" name="reset" value="Reset"></td>
		</tr>
</form>
</body>
</html>