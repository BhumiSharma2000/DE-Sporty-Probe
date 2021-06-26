<!DOCTYPE html>
<html lang="en">
   <head>
    <title>Health Expense</title>
<?php
session_start();
include 'header.php';
include 'abc.php';
  require 'lib/dao.php';
  $d = new dao();
extract($_GET);


           $q = $d->select("user_master","u_id='$id'");
          $result = mysqli_fetch_array($q);
  

         $q1 = $d->select("user_master,sport_master",
            " sport_master.s_id= user_master.s_id AND u_id ='$id'"
            ,"");
          /*    $q1 =  $d->select("sport_master","s_id='$result[s_id]'");*/
        $result1 = mysqli_fetch_array($q1);

        
           $q3 = $d->select("user_master,sport_category",
           "sport_category.sc_id= user_master.sc_id AND u_id ='$id'"
            ,"");

            $q2 =  $d->select(" authority_master","ar_id='$result[ar_id]'");
        $result2 = mysqli_fetch_array($q2);



         
        $result3 = mysqli_fetch_array($q3);
       
$athlete = $id;

?>

      <main class="app-content">
      <div class="app-title">
        <div>
          <form method="GET">
          <h1><i class="fa fa-file-text-o"></i> <a href="report-type.php?athlete=<?php echo $id;?>"> Expense Report</a> </h1>
          <div></div>
        </form>
          <p>A Athlete Expense Report</p>
          <p>
            
          </p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>

        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h2 class="page-header"><i class="fa fa-file-text" aria-hidden="true"></i> &nbsp;Health Expense Report</h2>
                </div>
                <div class="col-6">
                  <h5 class="text-right"><?= date("d/m/20y");?></h5>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-4">
                  <b> Athlete Name :</b><?= $result['u_fname']." " .$result['u_lname']; ?> <br>
                   <b> Authority :</b> <?= $result2['ar_name'];?><br>
                    <b> Sport:</b>  <?= $result1['s_name'];?><br>
                      <b> Sport Category:</b>  <?=$result3['cat_name']?><br>
      

                </div>
                <div class="col-4">
                  <b> Sport Maanger :</b> Virendra Desai <br>
                   

                </div>
                <div class="col-4"></div>
              </div>
              <br>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>From Date</th>
                        <th>To Date</th>
                        <th>Nutritions</th>
                        <th>Expense</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php


                                                                 

      
             $q5 = $d->select("expense_master","u_id='$id' AND ex_type_id=4");
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
                           <td><?= $result5['nutrition'];?> </td>
                            <td><?= $result5['expense'];?> </td>

                      </tr>

                      <?php 
}}
                      ?>

                    </tbody>

                  </table>
                  <hr style="height:1px;border:none;color:#333;background-color:#333; width: 100px; margin-left: 950px;" />
                <!--   <hr style="width: 100px; margin-left: 850px;" size="30"> -->

                <?php
                $qr = "SELECT SUM(expense) AS totalsum FROM expense_master where u_id ='$id' ANd ex_type_id=4";

$results= mysqli_query($conn,$qr);

$row = mysqli_fetch_assoc($results); 

$sum = $row['totalsum'];


/*
$als = "totalsum";
                $ttl  = $d->sum_data('expense','expense_master' ,"u_id=35",'$als');

                           $row = mysqli_fetch_assoc($ttl);
                           $sum = $row[$als];
                   */      
                ?>
                   <p style="margin-left: 950px;" ><b> Total</b> <?= $sum; ?></p>
                </div>
              </div>
              <br>
              <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
              </div>
            </section>
          </div>
        </div>
      </div>
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