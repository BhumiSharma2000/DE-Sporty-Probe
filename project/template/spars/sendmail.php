<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
include_once "abc.php";
require "lib/model.php";
require "lib/validation.php";
extract($_POST);
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
$o = new model();
$v = new validation();
if (isset($submit)) {
trim($username);
$username = mysqli_real_escape_string($conn,$username);
$str = "select * from  user_master where  u_email = '$username'";
$result = mysqli_query($conn,$str);
if (mysqli_num_rows($result)==1) {
    

$data = mysqli_fetch_array($result);
    $generator = "1357902468"; 
    $ans = ""; 
    for ($i = 1; $i <= 6; $i++) { 
        $ans .= substr($generator, (rand()%(strlen($generator))), 1); 
    }  // Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sparstechnology123@gmail.com';                 // SMTP username
    $mail->Password = 'Sparsdjv9067';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // enablesble TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
     $mail->setFrom('sparstechnology123@gmail.com', 'Sparsdjv9067');
    $em = $data['u_email'];
    $nm = $data['u_fname'];
    $mail->addAddress("$em", "$nm");     // Add a recipient
        
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Forgot Password OTP';
    $mail->Body    = "Hello $nm, Your OTP for SPARS SYSTEM is $ans";
    $mail->AltBody = "Hello $nm, Your OTP for SPARS SYSTEM is $ans";
    $mail->send();
    echo 'Message has been sent';
    $_SESSION['otp']= "$ans";
    $_SESSION['uid']=$data['u_id'];
    $_SESSION['name']=$data['u_fname'];
    header("location:otp.php"); 
    exit();
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}
else {
    $_SESSION['loginerror'] = "Data doesn't exist";
        header("location:forgot.php"); 
}
}
else {
    header("location:forgot.php"); 
}
?>