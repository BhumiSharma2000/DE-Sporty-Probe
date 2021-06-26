<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="trim.php">
<label>Data:</label>
<input type="text" name="name">
<br>
<input type="submit" name="btnInsert" value="Submit">
</form>
</body>
</html>
<?php
$name1='';
     

$name1="dvk///";
$h = stripslashes($name1);
echo $h;

/*$str = trim($name,'vi');
echo $str;*/

?>
