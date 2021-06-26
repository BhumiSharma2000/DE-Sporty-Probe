<!DOCTYPE html>
<html lang="en">
   <head>
    <title>Allocation</title>
<?php
session_start();
include 'header.php';
include 'abc.php';
  require 'lib/dao.php';
  $d = new dao();


         
       


?>

      <main class="app-content">
     <table>
                <?php


                                                                 

      
             $q5 = $d->select("expense_master","u_id=35");
             $i=0;
          while($result5 = mysqli_fetch_array($q5))
          

          {
            $i++;

          $q6 =$d->select("competition_master","cpt_id='$result5[cpt_id]'");
          while($result6 = mysqli_fetch_array($q6))
{
           

        ?> 
                      <tr>
                       <td> <?php echo  $i; ?></td>
                       <td><?= $result5['from_date'];?> </td>
                         <td><?= $result5['to_date'];?> </td>
                         <td><?= $result5['to_date'];?> </td>
                         <td><?= $result6['cmp_name'];?> </td>
                           <td><?= $result6['venue'];?> </td>
                            <td><?= $result5['expense'];?> </td>

                      </tr>

                      <?php 
}}
                      ?>
     </table>
    </main>
      <!-- Essential javascripts for application to work-->
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
      <!-- The javascript plugin to display page loading on top-->
      <script src="js/plugins/pace.min.js"></script>
      <!-- Page specific javascripts-->
      <script type="text/javascript" src="js/plugins/chart.js"></script>
      <script type="text/javascript">
      
      </script>
      <!-- Google analytics script-->
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