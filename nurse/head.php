
<?php
date_default_timezone_set("Asia/Manila");
$date_today =  date("Y-m-d");
require '../assets/connection/mysqli_dbconnection.php';
require('../session.php');
//get student info
$q_studinfo ="SELECT * from admin where id='$session_id'";
$q_studinfo_res = $dbc->query($q_studinfo);
$studinfo = $q_studinfo_res->fetch_assoc();
$studname= $studinfo['username']. ' ' .$studinfo['full_name'];
//get student course
$stud_program_id = $studinfo['id'];
if($stud_program_id==1){

  $stud_course='Admin';
}else if($stud_program_id==2){

  $stud_course='staff';
}else if($stud_program_id==12){

  $stud_course='BSIT';
}else{
  $stud_course='NONE';
}

    
///end of COOKIE CODES
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WISH: School Forms</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

<!-- start: Css -->
  <link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
  <link rel="stylesheet"  type="text/css" href="../asset/css/datepicker.css"/>
  <link rel="stylesheet"  type="text/css" href="../asset/css/bootstrap-datepicker.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/datepicker.min.css" />
  <link rel="stylesheet"  type="text/css" href="../asset/css/datepicker3.min.css" />
  <link rel="stylesheet"  type="text/css" href="../asset/css/animate.notify.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="../asset/css/plugins/icheck/skins/flat/red.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/simple-line-icons.css"/>
<link href="../asset/css/stylex.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="stylesheet" type="text/css" href="../asset/css/sweetalert.css"/>
  <script src="../asset/js/jquery.confirm.min.js"></script>
  <script src="../asset/js/sweetalert-dev.js"></script>
  <link rel="shortcut icon" href="../assets/img/1.jpg">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


  
  </head>
  <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-custom header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper" style="background-color: #003d1a;">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open" style="background-color: #003d1a;"> 
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="#" class="navbar-brand"  style="font-family: NewTown; letter-spacing: 2px; font-size: 25px">
                 <p>WISH-Interface Computer College, Inc. - Caloocan Campus</p>
                </a>
        
        <ul class="nav navbar-nav navbar-right user-nav">
        
                <li class="animated fadeInRight" style="color:white;margin-left:10px;margin-top:20px;" >
        <span>                        
            <?php 
              echo  date("l, F j, Y -|-  h:i:sa"); 
                        ?> &nbsp; &nbsp; &nbsp; &nbsp;
        </span>
        </li>
        
        </ul>
            </div>
          </div>
        </nav>

        