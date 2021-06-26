<?php

  require 'lib/dao.php';
  $d = new dao();
  session_start();
  require 'adloginvalidation.php';
include 'header.php';

?>

    <main class="app-content">

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <label>Sport:</label>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Sport</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
          $q = $d->select("sport_master");
          //$data = mysqli_query($con,$q);
          $i = 0;
          while($result = mysqli_fetch_array($q)){
            $i++;
          // print_r($data);
          // exit();
        ?>
                 <tr>
          <td><?php echo $i;?></td>
          <td><?php echo $result['s_name'];?></td>
         
          <td><a href="edit_sport.php?id=<?php echo $result['s_id'];?>">Edit</a>
              <a href="lib/controller_sport.php?id=<?php echo $result['s_id'];?>"onclick="return confirm('Are you sure?')">Delete</a></td>
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