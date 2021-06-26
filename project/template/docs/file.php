<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="fie.php">
	upload:
	<input type="file" name="img">
	<br>
	<input type="submit" name="Click">
</form>
</body>
</html>

<?php
$host = 'localhost';
$user = 'root';
$pass = ' ';
$db='img'

$con=mysqli_connect($host, $user, $pass,$db);



$upload_image=$_FILES[" myimage "][ "img" ];

$folder="/xampp/htdocs/project/";

move_uploaded_file($_FILES[" myimage "][" tmp_name "], "$folder".$_FILES[" myimage "][" img"]);

$insert_path="INSERT INTO img_master VALUES('$folder','$upload_image')";

$var=mysqli_query($con,$inser_path);
?>


