<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- 8782144093 -->
</body>
<?php
$a="https://www.google.co.in/search?q=hello&rlz=1C1CHBF_enIN815IN815&oq=hello&aqs=chrome..69i57j0l5.4118j0j7&sourceid=chrome&ie=UTF-8";
$x=filter_var($a,FILTER_SANITIZE_URL);
if(filter_var($x,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED))
{
echo  "valid";
echo $a;
}
else {
echo "not valid";
echo $a;
}


?>

</body>
</html>