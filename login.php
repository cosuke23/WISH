<?php

// require the sql connection..
require 'assets/connection/mysqli_dbconnection.php';
//Show all possible problems..
error_reporting(E_ALL | E_STRICT);
date_default_timezone_set('Asia/Manila');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>WISH: Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link rel="icon" href="assets/img/img_step.jpg">
    <link rel="shortcut icon" href="assets/img/logo.png">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<?php
			header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
			header("Cache-Control: post-check=0, pre-check=0", false);
			header("Pragma: no-cache");
		?>
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
<br>
<br>
<br>

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" id="dForm" action="login_process.php" method="post">
		        <h2 class="form-login-heading" style="font-family: Newtown; letter-spacing: 3px;">LOG IN</h2>
		        <div class="login-wrap">
					
		            <input type="text" id="user" name="user" class="form-control" placeholder="Username"  required autofocus/>
		            <br>
                <input type="Password" id="pass" name="pass" class="form-control" placeholder="Password"  required autofocus />
                <br>

		            
		            <button class="btn btn-success btn-block" id="btn-login" name="btn-login" type="submit" style="font-family: Newtown; letter-spacing: 2px;">Log-in</button>
		            <hr>

					
		        
		
		        </div> 
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
       // *****************      BACKGROUND IMAGE      *******************
        $.backstretch("assets/img/pics/icc/bg4.jpg", {speed: 500});
    </script>
  </body>
</html>
