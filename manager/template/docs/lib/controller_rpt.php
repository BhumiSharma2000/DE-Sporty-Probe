
<?php
session_start();
/*error_reporting(0);*/
require("dbconnect.php");
require 'dao.php';
require 'model.php';
require 'validation.php';
require '../abc.php';


$d = new dao();
$m = new model();
$v = new Validation();


    if (isset($_POST) && !empty($_POST)) {
        if (isset($_POST['Generate'])) {
        	
header("location:../report_type.php");
exit();
}}

           ?>