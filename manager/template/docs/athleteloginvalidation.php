<?php 
require "connection.php";
// error_reporting(~E_NOTICE);
session_start();
if (!isset($_SESSION['logged']) or $_SESSION['role_m']!='manager') {
header("location:../../../project/template/spars/login.php");
exit();
}
 ?>	