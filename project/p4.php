<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="p4.php" method="POST">
	<input type="text" name="name">
	<input type="submit" name="sb">
	</form>

	<?php
if((isset($_POST['name'])))
{
    $n = $_POST['name']; 
    echo $n;
}


	?>

</body>
</html>