<?php

require("conn.php")

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	fill form
	<form action="form.php" method="post">
		<table>
			<tr>
				<td>
			name:<input type="text" name="txt_name"></td></tr>
			<tr>
				<td>
			email:<input type="email" name="txtemail"></td></tr>
			<tr>
				<td>
			gender:<input type="radio" value="male" name="gen"><input type="radio" name="gen" value="female">
		</td></tr>
			<tr>
				<td>
			contact:<input type="text"name="textbox" name="contact">
		</td></tr>
		
		<tr>
				<td>
			Interest:<input type="checkbox" name="chk" value="cricket">Cricket
			
			<input type="checkbox" name="chk" value="hockey">hockey
			<input type="checkbox" name="chk" value="football">football</td>
		</tr>
		<td>
			Contry:<select>
				  <option value="india">india</option>
				  <option value="aus">Australia</option>
				  <option value="eng">England</option>
</select></td>
		</tr>
			<tr>
				<td>Address: s<textarea rows="4" cols="50" name="address">

</textarea></td>
			<tr>
				
					<tr><td>
			<input type="submit" name="submit">
		</td></tr>
		</table>


	</form>

<?php

	
	$name = '';
	$email='';
	$contact="";
	$hobby="";
	$address="";
	$Contry = '';
	$gender="";


	if(isset($_POST["submit"]))
	{
	$id=  $_POST['deptid'];
	$name = $_POST['name'];
	$code = $_POST['code'];
}

	
	$sql="INSERT INTO branch_master(banme,b_code,dept_id) values('$name','$code','$id')";


	if (!mysqli_query($con,$sql))
	 {

	 		echo "not inserted";
		
	}
	else
	{
		echo "inserted";
	}
	#header("refresh:2 url=branch.html");



	?>

</body>
</html>