<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- 8782144093 -->
</body>
<?phpa="2001:0db8:85a3:0000:0000:8a2e:0370:7334";
//$x=filter_var($a,FILTER_SANITIZE_URL);
if(filter_var($a,FILTER_VALIDATE_IP))
{ 
echo"valid";
echo $a;
}
else {
echo "not valid";
echo $a;
}


?>

</body>
</html>