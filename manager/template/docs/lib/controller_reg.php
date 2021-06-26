
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
if (isset($_GET['id'])) {
    extract($_GET);
    $q = $d->delete("user_master", "u_id='$_GET[id]'");
    if ($q > 0) {
        /*$_SESSION['msg'] = "data deleted.";*/
        header("location:../view_sport-manager.php");
        exit();
    } else {
        echo "data not deleted.";
        header("location:../view_sport-manager.php");
        exit();
        
    }
}
extract($_POST);
$counter = 0;
if ($state ==-1 || $city ==-1 || $ar ==-1 || $sport ==-1 || $cat == -1) {
    
    $_SESSION['drpdwn'] = "please Select One Option!!";
}

else {
    $counter++;
}


if ($pass == $cpass) {
    $counter++;
} else {
    $_SESSION['passmatch'] = "Password and Confirm Password don't match...";
}

if ($v->onlychar($fn)) {
    $counter++;
} else {
    $_SESSION['fnerr'] = "only Charcter!!";
}
if ($v->onlychar($ln)) {
    $counter++;
} else {
    $_SESSION['lnerr'] = "only Charcter!!";
}
if ($v->agecheck($date)) {
    $counter++;
} else {
    $_SESSION['dateerr'] = "please select proper date";
    if (isset($_POST['btnupdate'])) {
        //header("location:../edit_sport_manager.php?id=$editID");
        exit();
    } else {
        header("location:../adduser.php");
        exit();
    }
}
if ($v->emailValidation($email)) {
    $counter++;
} else {
    $_SESSION['emailerr'] = "Invalid Email";
    if (isset($_POST['btnupdate'])) {
        header("location:../edit_sport_manager.php?id=$editID");
        exit();
    } else {
        header("location:../adduser.php");
        exit();
    }
}


if ($v->duplicationcheck2("user_master", "u_email='$email' and u_id!='$editID'")) {
    $counter++;
} else {
    $_SESSION['emailerr'] = "already exist!!";
    if (isset($_POST['btnupdate'])) {
        header("location:../adduser.php");
        exit();
    } else {
              header("location:../adduser.php");

        exit();
    }
}

if(isset($_FILES['profilepic'])){
      $file_name = $_FILES['profilepic']['name'];
      $file_size = $_FILES['profilepic']['size'];
      $file_tmp = $_FILES['profilepic']['tmp_name'];
      $file_type = $_FILES['profilepic']['type'];
      $tmp = explode('.',$_FILES['profilepic']['name']);
	  $file_ext = end($tmp);
    /*  $file_ext=strtolower(end(explode('.',$_FILES['profilepic']['name'])));*/
      $expensions= array("jpeg","jpg","png","PNG","JPEG","JPG");
      
      if(in_array($file_ext,$expensions) == false){
          $_SESSION['fmsg']="extension not allowed, please choose a JPEG,JPG or PNG file.";
      } else {
         if($file_size > 2097152) {
          $_SESSION['fmsg'] = "File size must be less than 2 MB" ;
      } else {$counter++;}
        $counter++;}
   } else { $_SESSION['fmsg']="Empty not allowed"; }

if ($counter == 9) {
    if (isset($_POST) && !empty($_POST)) {
        if (isset($_POST['Insert'])) {
        	$file_name = round(microtime(true)).".".$file_name;
	      	move_uploaded_file($file_tmp,"../profilepics/".$file_name);
            $file_name = mysqli_real_escape_string($conn,$file_name);
            $m->set_data("fn", $fn);
            $m->set_data("ln", $ln);
            $m->set_data("file_name", $file_name);
            $m->set_data("city", $city);
            $m->set_data("state", $state);
            $m->set_data("gender", $gender);
            $m->set_data("date", $date);
            $m->set_data("email", $email);
            $m->set_data("cn", $cn);
            $m->set_data("pass", $pass);
            $m->set_data("ar", $ar);
            $m->set_data("sport", $sport);
            $m->set_data("role", $role);
            $m->set_data("cat", $cat);
            
            
            
            $a = array(
                'u_fname' => $m->get_data(test_input('fn')),
                'u_lname' => $m->get_data(test_input('ln')),
                'img_url' => $m->get_data(test_input('file_name')),
                'city_id' => $m->get_data(test_input('city')),
                'state_id' => $m->get_data(test_input('state')),
                'u_gender' => $m->get_data(test_input('gender')),
                'u_bdate' => $m->get_data(test_input('date')),
                'u_email' => $m->get_data(test_input('email')),
                'u_contactno' => $m->get_data(test_input('cn')),
                'u_password' => $m->get_data(test_input('pass')),
                'ar_id' => $m->get_data(test_input('ar')),
                's_id' => $m->get_data(test_input('sport')),
                'role_id' => $m->get_data(test_input('role')),
                'sc_id' => $m->get_data(test_input('cat'))
                
                
            );
            $q = $d->insert("user_master", $a);
            if ($q > 0) {
                //echo "data is inserted";
                //header("Location:view.php");        
                echo "Inserted ";
            } else {
                echo "Something is wrong";
            }
        }
        
        
        if (isset($_POST['btnupdate'])) {
            
            $m->set_data("fn", $fn);
            $m->set_data("ln", $ln);
            $m->set_data("city", $city);
            $m->set_data("state", $state);
            $m->set_data("gender", $gender);
            $m->set_data("date", $date);
            $m->set_data("email", $email);
            $m->set_data("cn", $cn);
            $m->set_data("ar", $ar);
            $m->set_data("sport", $sport);
            $m->set_data("role", $role);
            $m->set_data("cat", $cat);
            
            
            
            $a = array(
                'u_fname' => $m->get_data(test_input('fn')),
                'u_lname' => $m->get_data(test_input('ln')),
                'city_id' => $m->get_data(test_input('city')),
                'state_id' => $m->get_data(test_input('state')),
                'u_gender' => $m->get_data(test_input('gender')),
                'u_bdate' => $m->get_data(test_input('date')),
                'u_email' => $m->get_data(test_input('email')),
                'u_contactno' => $m->get_data(test_input('cn')),
                'ar_id' => $m->get_data(test_input('ar')),
                's_id' => $m->get_data(test_input('sport')),
                'role_id' => $m->get_data(test_input('role')),
                'sc_id' => $m->get_data(test_input('cat'))
                
                
            );
            $q = $d->update("user_master", $a, "u_id='$editID'");
            
            if ($q > 0) {
                echo "updated ";
            } else {
                echo "Something is wrong";
            }
            
        }
    }
} else {
    if (isset($_POST['btnupdate'])) {
        /*header("location:../edit_sport_manager.php?id=$editID");*/
        exit();
    } else {
            header("location:../adduser.php");

        exit();
    }
}

?>
