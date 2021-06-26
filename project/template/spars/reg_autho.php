<?php
session_start();
include "header.php";
?>

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Main CSS-->
      <link rel="stylesheet" type="text/css" href="css1/main.css">
      <!-- Font-icon css-->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Login </title>
    
    </head>
    <br>
    <br>
      <section class="login-content">

         <div class="login-box" style="height: 700px;">
         
            <img src="img1/logo1.png" style="height: 150px; margin-left:150px;">
<br>
      
            
          <form class="login-form" method ="post" action="lib/controller_sport-autho.php" enctype="multipart/form-data">
            <br>
            <br>
            <br>
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>REGISTER AUTHORITY</h3>
            <div class="form-group">
              <label class="control-label">Name of Authority</label>
               <input class="form-control" type="text" required placeholder=" Enter Sport Authority " name="sa">
      
               <?php
       if(isset($_SESSION['saerr'])){
        echo "<span style='color:red'>".$_SESSION['saerr']."</span>";
        unset($_SESSION['saerr']);
       }
                          
       if(isset($_SESSION['exist'])){
        echo "<span style='color:red'>".$_SESSION['exist']."</span>";
        unset($_SESSION['exist']);
       }
   
   ?>

          </div>
           
        <div class="form-group">
                    <label for="exampleSelect1">Sport</label>
                    <select class="form-control" name="sport">
                       <option value="0">Select Sport</option>
                       <?php
                $con= mysqli_connect('localhost', 'root', '','spars');
                
                  $sql = "SELECT s_id,s_name FROM sport_master";
                  $result = mysqli_query($con,$sql);

                  /*echo "<select name='username' class='form-control'>";*/
                  while ($row = mysqli_fetch_array($result)) {
                      echo "<option value='" . $row['s_id'] ."'>" . $row['s_name'] ."</option>";
                  }
                 /* echo "</select>";*/
               ?>
      
                     
                    </select>
                                     <?php
       if(isset($_SESSION['sporterr'])){
        echo "<span style='color:red'>".$_SESSION['sporterr']."</span>";
        unset($_SESSION['sporterr']);
       }
   ?> 
                  </div>
                    <div class="form-group row">
                  <label class="control-label col-md-3"> Office Address<br></label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" placeholder="Enter your address" name="add"></textarea>
                        <?php
       if(isset($_SESSION['add'])){
        echo "<span style='color:red'>".$_SESSION['add']."</span>";
        unset($_SESSION['add']);
       }
   ?> 
                  </div>

          </div>
           <div class="form-group">
                 <label class="control-label">Contact No (format: xxxxxxxxxx)</label>
             <input class="form-control" type="text" required placeholder=" Enter Contact No" name="cn" pattern="^\d{10}$" required >
       <?php
       if(isset($_SESSION['cnexist'])){
        echo "<span style='color:red'>".$_SESSION['cnexist']."</span>";
        unset($_SESSION['cnexist']);
       }
   ?> 
          </div>
           <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" type="text" required placeholder=" Enter Email" name="email">
                <?php
     
        
          if(isset($_SESSION['emailexist'])){
        echo "<span style='color:red'>".$_SESSION['emailexist']."</span>";
        unset($_SESSION['emailexist']);
       }
         if(isset($_SESSION['email'])){
        echo "<span style='color:red'>".$_SESSION['email']."</span>";
        unset($_SESSION['email']);
}
   ?> 
          </div>
                    <div class="form-group">
         
             <input type="submit" name="Insert" class="btn btn-primary btn-block">
          </div>

            </div>
        </form>

         
  
        </div>
        </div>
      </section>
       <br>
    <br> <br>
    <br>
    <span></span>
      </body>	
</html>