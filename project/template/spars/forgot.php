  <?php

session_start();

  ?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Main CSS-->
      <link rel="stylesheet" type="text/css" href="css1/main.css">
      <!-- Font-icon css-->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Login </title>
      <style type="text/css">
    
      </style>
    </head>
    <body>
     
      <section class="login-content">
        <div>
       <h3>EMAIL VERFICATION</h3>
        </div>
         <div class="login-box" style="height: 200px;">
         
            <img src="img1/logo1.png" style="height: 150px; margin-left:150px;">

          <form class="login-form" method ="post" action="sendmail.php">
            <br>
            <br>
            <br>
   
            <div class="form-group">
              <label class="control-label">EMAIL</label>
              <input class="form-control" type="text" placeholder="EMAIL" autofocus name="username" required >
                <?php
       if(isset($_SESSION['loginerror'])){
        echo "<span style='color:red'>".$_SESSION['loginerror']."</span>";
        unset($_SESSION['loginerror']);
       }
   ?>
               
            </div>
          
            <div class="form-group">
              <div class="utility">
               
            </div>
            <div class="form-group btn-container">
              <button class="btn btn-primary btn-block" type="submit" name="submit">SUBMIT</button>
            
            </div>
        </form>

       
        </div>
      </section>
      <!-- Essential javascripts for application to work-->
      <script src="js1/jquery-3.2.1.min.js"></script>
      <script src="js1/popper.min.js"></script>
      <script src="js1/bootstrap.min.js"></script>
      <script src="js1/main.js"></script>
      <!-- The javascript plugin to display page loading on top-->
      <script src="js1/plugins/pace.min.js"></script>
      <script type="text/javascript">
        // Login Page Flipbox control
        $('.login-content [data-toggle="flip"]').click(function() {
        	$('.login-box').toggleClass('flipped');
        	return false;
        });
      </script>
    </body>
  </html>