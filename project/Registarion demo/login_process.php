<?php
session_start();

require("connection.php");
  extract($_POST);
$email = '';
        $pass='';
 if(isset($btnInsert)){
    
      $email = $txtemail;
        $pass=$txtpass;
   


   $sql = "SELECT * FROM register WHERE email= '$email' AND password= '$pass'";
  $q1 = mysqli_query($con, $sql);
  $data = mysqli_fetch_assoc($q1);

 
if(!empty($data))
{
  echo "login successfully";
  
  $_SESSION["login"]["username"] = $data['email'];
  $_SESSION["login"]["pass"]= $data['password'];
  $_SESSION['login']['user']=true; 

  header("Location:d2.php");
}
else
{
  echo "Wrong Credetials";

}
}
?>