<?php
session_start();

require("dbconnect.php");	
require 'dao.php';
require 'model.php';
require 'validation.php';
$d = new dao();
$m = new model();
$v=new Validation();
extract($_POST);
$counter = 0;
if($v->onlychar($role))
{
	$counter++;
}
else{
	$_SESSION['role'] = "only Charcter!!";

		header("location:../role.php");
		exit();


}
if($v->duplicationcheck2("sport_master","s_name='$sport'"))
{
	$counter++;
}
else{

	$_SESSION['exist'] = "already exist!!";
	header("location:../role.php");
		exit();

}
if($counter==2)
{
if (isset($_POST) && !empty($_POST)){
	if(isset($_POST['Insert'])){
		$m->set_data("role",$role);
		
		$a = array('role_name'=>$m->get_data(test_input('role')));
		$q = $d->insert("role_master",$a);
		if ($q>0) {
			//echo "data is inserted";
			//header("Location:view.php");		
			echo "Inserted ";
		}
		else{
			echo "Something is wrong";
		}
	}
}
if(isset($_POST['btnupdate'])){

	$m->set_data("role",$role);

	$a = array('role_name'=>$m->get_data(test_input('role')));
	$q = $d->update("role_master",$a,"role_id='$editID'");

	if ($q>0) 
	{
		echo "updated ";
	}
	else{
		echo "Something is wrong";
	}

}	}
else
{
	header("location:../role.php");
}

if(isset($_GET['id']))
{
	extract($_GET);
	$q = $d->delete("role_master","role_id='$_GET[id]'");
	if($q>0)
	{
		/*$_SESSION['msg'] = "data deleted.";*/
		header("location:../view_role.php");
	}
	else
	{
		/*$_SESSION['msg'] = "data not deleted.";*/
		header("location:../view_role.php");
	} 
}

?>