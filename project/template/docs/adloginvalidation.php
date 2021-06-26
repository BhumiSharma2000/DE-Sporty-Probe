<?php 
require "connection.php";
error_reporting(~E_NOTICE);
session_start();
if (!isset($_SESSION['logged']) or $_SESSION['role_ad']!='admin') {
header("location:../spars/login.php");
exit();
}
 ?>	