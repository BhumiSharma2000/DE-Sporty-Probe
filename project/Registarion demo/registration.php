<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
<div align="center" style="margin: center;">
<fieldset>
<legend>Fill the Form!!!</legend>
<form action="controller.php" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="txtname"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="txtemail"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="Password" name="txtpass"></td>
		</tr>
		<tr>
			<td>Phone No.</td>
			<td><input type="text" name="txtph"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gen" checked="checked" value="Male">Male
			    <input type="radio" name="gen" value="female">Female</td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><textarea cols="20" name="txtaddress"></textarea></td>
		</tr>
		<tr>
			<td>Country:</td>
			<td><select name="txtcountry">
				<option value="India">India</option>
				<option value="USA">USA</option>
				<option value="Australia">Australia</option>
				<option value="Canada">Canada</option>
			</select></td>
		</tr>
		<tr>
			<td>Interest:</td>
			<td><input type="checkbox" name="in[]" value="chess">Chess
				<input type="checkbox" name="in[]" value="cricket">Cricket
				<input type="checkbox" name="in[]" value="football">Football
				<input type="checkbox" name="in[]" value="basketball">Basketball</td>
		</tr>
		<tr>
			<td><input type="submit" name="btnInsert" value="Submit"></td>
			<td><input type="reset" name="reset" value="Reset"></td>
		</tr>
	</table>
</form>
</fieldset>
</div>
</body>
</html>