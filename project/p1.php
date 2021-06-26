<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$a=0;
	if(filter_var($a,FILTER_VALIDATE_INT)===0)
	{
		echo "valid";
	}
	else
	{

		echo "not valid";
    }


	?>

</body>
</html>