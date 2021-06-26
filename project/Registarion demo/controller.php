<?php
	require 'dao.php';
	require 'model.php';
	$d = new dao();
	$m = new model();
	extract($_POST);
	
	if (isset($_POST) && !empty($_POST)){
		$m->set_data("txtname",$txtname);
		$m->set_data("txtemail",$txtemail);
		$m->set_data("txtpass",$txtpass);
		$m->set_data("txtph",$txtph);
		$m->set_data("gen",$gen);
		$m->set_data("txtaddress",$txtaddress);
		$m->set_data("txtcountry",$txtcountry);
		$hobby = implode(',', $_POST["in"]);
		$m->set_data("hobby",$hobby);
		$a = array('name'=>$m->get_data(test_input('txtname')),
				   'email'=>$m->get_data(test_input('txtemail')),
				   'password'=>$m->get_data(test_input('txtpass')),
				   'phone'=>$m->get_data(test_input('txtph')),
				   'gender'=>$m->get_data(test_input('gen')),
				   'address'=>$m->get_data(test_input('txtaddress')),
				   'country'=>$m->get_data(test_input('txtcountry')),
				   'interest'=>$m->get_data(test_input('txtemail')),
				);
		$q = $d->insert("register",$a);
		if ($q>0) {
			//echo "data is inserted";
			header("Location:view.php");		}
		
		else{
			echo "Something is wrong";
		}

		}
?>