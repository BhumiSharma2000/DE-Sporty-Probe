<?php
session_start();

require("dbconnect.php");	
require 'dao.php';
require 'model.php';
require 'validation.php';
$d = new dao();
$m = new model();
$v=new Validation();

if(isset($_GET['id']))
{
	extract($_GET);
	$q = $d->delete("authority_master","ar_id='$_GET[id]'");
	if($q>0)
	{
		/*$_SESSION['msg'] = "data deleted.";*/
		header("location:../view_sport-autho.php");
		exit();
	}
	else
	{
		echo "data not deleted.";
		header("location:../view_sport-autho.php");
			exit();
	} 
}
extract($_POST);
$counter = 0;

if (strlen($expense) > 0 && strlen(trim($expense)) == 0)
{
	$_SESSION['saerr'] = "no white space";

	  if (isset($_POST['btnupdate']))
		{
	header("location:../edit_sport-autho.php?id=$editID");
		exit();
		}
	  else
		{
		header("location:../sport-autho.php");

		exit();
		}

}
 if($athlete!=0){
       $counter++;
   }
   else{
     $_SESSION['sporterr'] = "please Select State";
   
   }


if($counter==0)
{

if (isset($_POST) && !empty($_POST)){
	if(isset($_POST['Insert'])){
		$m->set_data("etype",$etype);
		$m->set_data("athlete",$athlete);
		$m->set_data("sdate",$sdate);
		$m->set_data("edate",$edate);
		$m->set_data("expense",$expense);
		
		$a = array('ex_type_id'=>$m->get_data(test_input('etype')),
			'u_id'=>$m->get_data(test_input('athlete')),
			'from_date'=>$m->get_data(test_input('sdate')),
			'to_date'=>$m->get_data(test_input('edate')),
			'expense'=>$m->get_data(test_input('expense')),

		);
		$q = $d->insert("expense_master",$a);
		if ($q>0) {
			echo "data is inserted";
		
			// header("location:../view_sport-autho.php");
		}
		else{
			echo "Something is wrong";
		}
	}
}

if(isset($_POST['btnupdate'])){

	$m->set_data("sa",$sa);
	$m->set_data("sport",$sport);
	$m->set_data("add",$add);
	$m->set_data("cn",$cn);
	$m->set_data("email",$email);

	$a = array('ar_name'=>$m->get_data(test_input('sa')),
		's_id'=>$m->get_data(test_input('sport')),
		'off_add'=>$m->get_data(test_input('add')),
		'ar_contact'=>$m->get_data(test_input('cn')),
		'ar_email'=>$m->get_data(test_input('email')),

	);
	$q = $d->update("authority_master",$a,"ar_id='$editID'");

	if ($q>0) 
	{
		echo "updated ";
	}
	else{
		echo "Something is wrong";
	}

}	 }
  else{
  	header("location:../sport-autho.php");
  }




?>