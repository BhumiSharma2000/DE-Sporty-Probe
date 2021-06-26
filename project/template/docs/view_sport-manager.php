<?php

  require 'lib/dao.php';
  $d = new dao();
  session_start();
  require 'adloginvalidation.php';
include 'header.php';

?>

    <main class="app-content" style="width: 1600px;">

      <div class="row" >
        <div class="col-md-12" >
          <div class="tile">
            <div class="tile-body">
              <label>Sport-Manager:</label>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>First-Name:</th>
                    <th>Last-Name:</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Gender</th>
                    <th>Birthdate</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Authority</th>
                    <th>Sport</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
          $q = $d->select("user_master,city_master",
            "city_master.city_id= user_master.city_id "
            ,"");
          $q1 = $d->select("user_master,state_master",
            "state_master.state_id=user_master.state_id"
            ,"");
          $q2 = $d->select("user_master,authority_master",
            "authority_master.ar_id= user_master.ar_id"
            ,"");
          $q3 = $d->select("user_master,sport_master",
            " sport_master.s_id= user_master.s_id"
            ,"");
        
           $q5 = $d->select("user_master,sport_category",
           "sport_category.sc_id= user_master.sc_id"
            ,"");
          //$data = mysqli_query($con,$q);
          $i = 0; 
          while($result = mysqli_fetch_array($q)){
            $result1 = mysqli_fetch_array($q1);
            $result2 = mysqli_fetch_array($q2);
            $result3 = mysqli_fetch_array($q3);
      
            $result5 = mysqli_fetch_array($q5);
            $i++;
          // print_r($data);
          // exit();
        ?>
                 <tr>
          <td><?php echo $i;?></td>
          <td><?php echo $result['u_fname'];?></td>
          <td><?php echo $result['u_lname'];?></td>
          <td><?php echo $result['city_name'];?></td>
          <td><?php echo $result1['state_name'];?></td>
          <td><?php echo $result['u_gender'];?></td>
          <td><?php echo $result['u_bdate'];?></td>
          <td><?php echo $result['u_email'];?></td>
          <td><?php echo $result['u_contactno'];?></td>
          <td><?php echo $result2['ar_name'];?></td>
          <td><?php echo $result3['s_name'];?></td>
         
          <td><?php echo $result5['cat_name'];?></td>
          <td><?php echo $result['isactive'];?></td>

       
          
          <td><a href="deactivateuser.php?id=<?php echo $result['u_id'];?>&action=Active">Activate</a>/
              <a href="deactivateuser.php?id=<?php echo $result['u_id'];?>">Deactiavte</a> </td>
        </tr>
          <?php
      }
      ?>
                </tbody>
              </table>
            </div>
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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