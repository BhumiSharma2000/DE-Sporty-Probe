<!DOCTYPE html>
<html lang="en">
   <head>
    <title>Expenditure</title>
<?php
ob_start();
session_start();
include 'header.php';
extract($_POST);
extract($_GET);
error_reporting(0);
$counter=0;
if($athlete==-1){
   $_SESSION['err'] = "please Select One Option";
     header("location:gen_report.php");
     exit();
     
   }
   else{
    
       $counter++;
   }


if ($counter == 1 ) {
    /*if (isset($_POST) && !empty($_POST)) {  
        if (isset($_POST['Generate'])) {*/  


?>

<
    <main class="app-content"  >
      <div class="row" style="margin-left: 250px; margin-top:120px; width:1150px;" >
       <div class="col-md-6" >
         <div class="tile" >
            <form class="login-form"  method="GET" action="#" enctype="multipart/form-data">
                
                 <h4 style="margin-left: 60px">Generate Expense Report</h4>
                 <hr style="border:2px solid #007065;">
                
                                  <a href="tra_report.php?id=<?php echo $athlete;?>"  class="btn btn-primary btn-lg" >Travel Expense </a> 
                                   <a href="health_report.php?id=<?php echo $athlete;?>"  class="btn btn-primary btn-lg" style="margin-left: 20px;">Health & Nutritions Expense</a>
                                   <br><br>
                                     <a href="Injuries_ex.php?id=<?php echo $athlete;?>"   class="btn btn-primary btn-lg">Injuries Expense</a>
                                  
                                       <a href="training_ex.php?id=<?php echo $athlete;?>"  class="btn btn-primary btn-lg"  style="margin-left: 10px;">Training Expense</a>
                                
              </form>
         </div>
       </div>
       
     </main>

     <script src="js/jquery-3.2.1.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/main.js"></script>
   
     <script src="js/plugins/pace.min.js"></script>
     
     <script type="text/javascript" src="js/plugins/chart.js"></script>
     <script type="text/javascript">
     
     </script>

     <script type="text/javascript">
        if(document.location.hostname == 'pratikborsadiya.in') {
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         ga('create', 'UA-72504830-1', 'auto');
         ga('send', 'pageview');
        }
     </script>
       </body>
    </html>
<?php


}
?>