 <?php
  require('dbcon.php');
  require('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WISH: Dashboard</title>
        <link type="text/css" href="dashboard/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="dashboard/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="dashboard/css/theme.css" rel="stylesheet">
        <link type="text/css" href="dashboard/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    <?php
      header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
      header("Cache-Control: post-check=0, pre-check=0", false);
      header("Pragma: no-cache");
    ?>

    <!--static chart-->
<script src="dashboard/new/js/Chart.min.js"></script>
<!--//charts-->
    </head>
  
    <body>
        <div class="navbar navbar-fixed-top" >
            <div class="navbar-inner" style="background-color: #003d1a;">
                <div class="container" >
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="#" style="color: white;font-family: Arial;">Admin: Dashboard</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">

                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                         
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper" >
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="home.php"><i class="menu-icon icon-dashboard"  style="color: white;"></i>Dashboard
                                </a></li>
                                <li><a href="add_strand.php"><i class="menu-icon icon-plus"  style="color: white;"></i>Add Strand / Subjects </a>                                  
                                </li>
                                <li><a href="message.html"><i class="menu-icon icon-download-alt"  style="color: white;"></i>Strand Archived Files <b class="label green pull-right">
                                    </b> </a></li>
                                <li><a href="task.html"><i class="menu-icon icon-tasks"  style="color: white;"></i>Log Files <b class="label orange pull-right">
                                    </b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="sf_forms.php"><i class="menu-icon icon-paste" style="color: white;"></i>School Forms </a></li>
                                <li><a href="archieved.php"><i class="menu-icon icon-download-alt"  style="color: white;"></i>Learner's Archived Files </a></li>
                                <li><a href="archieved2.php"><i class="menu-icon icon-download-alt"  style="color: white;"></i>Employee's Archived Files </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"  style="color: white;"></i>Charts </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog" style="color: white;">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Settings </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>  Maintenance </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>  Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>  All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="logout.php"><i class="menu-icon icon-signout"  style="color: white;"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <!-- INSERT TABLE CHART-->
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-envelope"></i><b>Messages</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-group"></i><b>Users</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-exchange"></i><b>Log Files</b>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="row-fluid">
                                            <div class="span12">
                                               <!-- /////    ICT   ///// -->
                                                <div class="btn-box small span12">
                                                  <div class="col-md-6 chart-blo-1">
                                                        <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>

                                                      <!-- //////    LEGENDS HERE   ///// --> 
                                                    <canvas id="pie" height="315" width="470" style="width: 315px; height: 300px;"></canvas>
                                                    <?php
                                                      $conn = mysqli_connect('localhost', 'root', '', 'lis');
                                                      //QUERY FOR TOTAL ICT
                                                      $query_ict = mysqli_query($conn, "SELECT SUM(student_info.ts_id) AS total, track_strand.ts_id, track_strand.description FROM student_info LEFT JOIN track_strand ON student_info.ts_id=track_strand.ts_id WHERE student_info.ts_id=1");
                                                      $row=mysqli_fetch_array($query_ict);
                                                      $ict=$row['total'];
                                                      //QUERY FOR TOTAL BRS
                                                      $query_brs = mysqli_query($conn, "SELECT SUM(student_info.ts_id) AS total, track_strand.ts_id, track_strand.description FROM student_info LEFT JOIN track_strand ON student_info.ts_id=track_strand.ts_id WHERE student_info.ts_id=2");
                                                      $row=mysqli_fetch_array($query_brs);
                                                      $brs=$row['total'];
                                                      //QUERY FOR TOTAL HOS
                                                      $query_hos = mysqli_query($conn, "SELECT SUM(student_info.ts_id) AS total, track_strand.ts_id, track_strand.description FROM student_info LEFT JOIN track_strand ON student_info.ts_id=track_strand.ts_id WHERE student_info.ts_id=3");
                                                      $row=mysqli_fetch_array($query_hos);
                                                      $hos=$row['total'];
                                                      //QUERY FOR TOTAL ABM
                                                      $query_abm = mysqli_query($conn, "SELECT SUM(student_info.ts_id) AS total, track_strand.ts_id, track_strand.description FROM student_info LEFT JOIN track_strand ON student_info.ts_id=track_strand.ts_id WHERE student_info.ts_id=4");
                                                      $row=mysqli_fetch_array($query_abm);
                                                      $abm=$row['total'];
                                                       //QUERY FOR TOTAL HUMMS
                                                      $query_humms = mysqli_query($conn, "SELECT SUM(student_info.ts_id) AS total, track_strand.ts_id, track_strand.description FROM student_info LEFT JOIN track_strand ON student_info.ts_id=track_strand.ts_id WHERE student_info.ts_id=5");
                                                      $row=mysqli_fetch_array($query_humms);
                                                      $humms=$row['total'];
                                                    ?>

                                                    <script>
                                                        window.onload = function () {

                                                        var chart = new CanvasJS.Chart("chartContainer", {
                                                          animationEnabled: true,
                                                          title:{
                                                            text: "Strand",
                                                            horizontalAlign: "left"
                                                          },
                                                          data: [{
                                                            type: "doughnut",
                                                            startAngle: 10,
                                                            //innerRadius: 60,
                                                            indexLabelFontSize: 17,
                                                            dataPoints: [
                                                              { y: <?php echo $ict ?>, label: "ICT - <?php echo $ict ?>" },
                                                              { y: <?php echo $brs ?>, label: "BRS - <?php echo $brs ?>" },
                                                              { y: <?php echo $hos ?>, label: "HOS - <?php echo $hos ?>" },
                                                              { y: <?php echo $abm ?>, label: "ABM - <?php echo $abm ?>" },
                                                              { y: <?php echo $humms ?>, label: "HUMMS - <?php echo $humms ?>" }
                                                            ]
                                                          }]
                                                        });
                                                        chart.render();

                                                        }
                                                        </script>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="span4">
                                      <div class="btn-box small span12">
                                        <div class="col-md-6 chart-blo-1">
                                           <div class="dygno">
                                               <h2>Year Level</h2>                      
                                              <canvas id="doughnut" height="300" width="470" style="width: 150px; height: 150px;"></canvas>
                                              <?php
                                                //QUERY FOR TOTAL G11
                                                      $query_g11 = mysqli_query($conn, "SELECT COUNT(s_year) AS totalyear FROM student_info where s_year=11");
                                                      $row=mysqli_fetch_array($query_g11);
                                                      $g11=$row['totalyear'];

                                                //QUERY FOR TOTAL G12
                                                      $query_g12 = mysqli_query($conn, "SELECT COUNT(s_year) AS totalyear FROM student_info where s_year=12");
                                                      $row=mysqli_fetch_array($query_g12);
                                                      $g12=$row['totalyear']; 
                                              ?>
                                              <div class='my-legend'>
                                                        <div class='legend-title'><h4>Legends</h4></div>
                                                        <div class='legend-scale'>
                                                          <ul class='legend-labels' style="text-align: left;">
                                                            <li><span style='background: red;'></span>Grade 12 - <strong><?php echo $g12?></strong></li>
                                                            <li><span style='background:#337AB7;'></span>
                                                              Grade 11 - <strong><?php echo $g11?></strong></li>
                                                          </ul>
                                                        </div>
                                              </div>

                                                        <style type='text/css'>
                                                          .my-legend .legend-title {
                                                            text-align: left;
                                                            margin-bottom: 5px;
                                                            font-weight: bold;
                                                            font-size: 100%;
                                                            margin-left: 30px;
                                                            }
                                                          .my-legend .legend-scale ul {
                                                            margin: 0;
                                                            margin-bottom: 5px;
                                                            padding: 0;
                                                            float: left;
                                                            list-style: none;
                                                            font-size: 18px;
                                                            }
                                                          .my-legend .legend-scale ul li {
                                                            font-size: 80%;
                                                            list-style: none;
                                                            margin-left: 0;
                                                            line-height: 18px;
                                                            margin-bottom: 2px;
                                                            }
                                                          .my-legend ul.legend-labels li span {
                                                            display: block;
                                                            float: left;
                                                            height: 16px;
                                                            width: 30px;
                                                            margin-right: 5px;
                                                            margin-left: 0;
                                                            border: 1px solid #999;
                                                            }
                                                          
                                                        </style>
                                                  <script>
                                                    var doughnutData = [
                                                    {
                                                      value: <?php echo $g11 ?>,
                                                      label: "Grade-11",
                                                      color:"#337AB7"
                                                    },
                                                    {
                                                      value : <?php echo $g12 ?>,
                                                      label: "Grade-12",
                                                      color : "red"
                                                    }
                                                    ];
                                                    new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
                                                  </script>
                                            </div>  
                                         </div>
                                      </div>
                                    </div>

                                    <div class="span4">
                                      <div class="btn-box small span12">
                                        <div class="col-md-6 chart-blo-1">
                                           <div class="dygno2">
                                               <h2>Gender</h2>                                          
                                              <canvas id="doughnut2" height="300" width="470" style="width: 150px; height: 150px;"></canvas>
                                              <?php
                                                //QUERY FOR TOTAL MALE
                                                      $query_male = mysqli_query($conn, "SELECT COUNT(gender) AS totalgender FROM student_info where gender='Male'");
                                                      $row=mysqli_fetch_array($query_male);
                                                      $male=$row['totalgender']; 

                                                 //QUERY FOR TOTAL FEMALE
                                                      $query_female = mysqli_query($conn, "SELECT COUNT(gender) AS totalgender FROM student_info where gender='Female'");
                                                      $row=mysqli_fetch_array($query_female);
                                                      $female=$row['totalgender']; 
                                              ?>
                                                <div class='my-legend'>
                                                        <div class='legend-title'><h4>Legends</h4></div>
                                                        <div class='legend-scale'>
                                                          <ul class='legend-labels' style="text-align: left;">           
                                                            <li><span style='background:pink;'></span>Female - <strong><?php echo $female?></strong></li>
                                                             <li><span style='background: #337AB7;'></span>Male - <strong><?php echo $male?></strong></li>
                                                          </ul>
                                                        </div>
                                              </div>

                                                        <style type='text/css'>
                                                          .my-legend .legend-title {
                                                            text-align: left;
                                                            margin-bottom: 5px;
                                                            font-weight: bold;
                                                            font-size: 100%;
                                                            margin-left: 30px;
                                                            }
                                                          .my-legend .legend-scale ul {
                                                            margin: 0;
                                                            margin-bottom: 5px;
                                                            padding: 0;
                                                            float: left;
                                                            list-style: none;
                                                            font-size: 18px;
                                                            }
                                                          .my-legend .legend-scale ul li {
                                                            font-size: 80%;
                                                            list-style: none;
                                                            margin-left: 0;
                                                            line-height: 18px;
                                                            margin-bottom: 2px;
                                                            }
                                                          .my-legend ul.legend-labels li span {
                                                            display: block;
                                                            float: left;
                                                            height: 16px;
                                                            width: 30px;
                                                            margin-right: 5px;
                                                            margin-left: 0;
                                                            border: 1px solid #999;
                                                            }
                                                          
                                                        </style>
                                                  <script>
                                                    var doughnutData = [
                                                    {
                                                      value: <?php echo $male ?>,
                                                      color:"#337AB7"
                                                    },
                                                    {
                                                      value : <?php echo $female ?>,
                                                      color : "pink"
                                                    }
                                                    ];
                                                    new Chart(document.getElementById("doughnut2").getContext("2d")).Doughnut(doughnutData);
                                                  </script>
                                            </div>  
                                         </div>
                                      </div>
                                    </div>

                                     <div class="span4">
                                      <div class="btn-box small span12">
                                        <div class="col-md-6 chart-blo-1">
                                           <div class="dygno2">
                                               <h2>Age</h2>
                                          
                                              <canvas id="doughnut3" height="300" width="470" style="width: 150px; height: 150px;"></canvas>
                                              <?php
                                                //QUERY FOR TOTAL MALE
                                                      $query_male = mysqli_query($conn, "SELECT COUNT(gender) AS totalgender FROM student_info where gender='Male'");
                                                      $row=mysqli_fetch_array($query_male);
                                                      $male=$row['totalgender']; 

                                                 //QUERY FOR TOTAL FEMALE
                                                      $query_female = mysqli_query($conn, "SELECT COUNT(gender) AS totalgender FROM student_info where gender='Female'");
                                                      $row=mysqli_fetch_array($query_female);
                                                      $female=$row['totalgender']; 
                                              ?>
                                                  <script>
                                                    var doughnutData = [
                                                    {
                                                      value: <?php echo $male ?>,
                                                      color:"#337AB7"
                                                    },
                                                    {
                                                      value : <?php echo $female ?>,
                                                      color : "pink"
                                                    }
                                                    ];
                                                    new Chart(document.getElementById("doughnut3").getContext("2d")).Doughnut(doughnutData);
                                                  </script>
                                            </div>  
                                         </div>
                                      </div>
                                    </div>

                                </div>
                            </div>
                            
                           
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <footer style=" height: 50px; text-align: center; background-color:#003d1a; ">
          <h3 class="copyright" style="color: white; text-align: center; font-size: 15px;">Copyright &copy; 2019 All rights reserved. WISH-ICC</h3>        
        </footer>

        <script src="table/canvasjs.min.js"></script>
        <script src="dashboard/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="dashboard/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="dashboard/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="dashboard/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="dashboard/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="dashboard/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="dashboard/scripts/common.js" type="text/javascript"></script>


       <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

       </script>


    </body>
</html>