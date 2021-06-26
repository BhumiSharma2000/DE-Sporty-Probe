<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$a = "<h1>Hello !</h1>";
$b = filter_var($a, FILTER_SANITIZE_STRING);
echo $b;
                                                         //filter_var(variable,filte,option)

?>
</body>
</html>