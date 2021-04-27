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
        <link type="text/css" href="../dashboard/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="../dashboard/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="../dashboard/css/theme.css" rel="stylesheet">
        <link type="text/css" href="../dashboard/images/icons/css/font-awesome.css" rel="stylesheet">
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="#" style="color: white;font-family: Arial;">Teacher: Dashboard</a>
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
                                <li class="active"><a href="home.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>Announcements </a>
                                </li>
                                <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Messages <b class="label green pull-right">
                                    </b> </a></li>
                                <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Log Files <b class="label orange pull-right">
                                    </b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="view_items.php?ts_id=1"><i class="menu-icon icon-paste"></i>Student Grades </a></li>
                                <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Settings </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>  Maintenance </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>  Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>  All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
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
                                                    <div class="chart-other">
                                                      <h3>STRANDS</h3>  
                                                      <!-- //////    LEGENDS HERE   ///// --> 

                                                    <canvas id="pie" height="315" width="470" style="width: 315px; height: 470px;"></canvas>
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
                                                    <div class='my-legend'>
                                                        <div class='legend-title'><h3>Legends</h3></div>
                                                        <div class='legend-scale'>
                                                          <ul class='legend-labels'style="text-align: left;">
                                                            <li><span style='background:#337AB7;'></span>ICT</li>
                                                            <li><span style='background:#FC8213;'></span>BRS</li>
                                                            <li><span style='background:#8BC34A;'></span>HOS</li>
                                                            <li><span style='background:#FC8250;'></span>ABM</li>
                                                            <li><span style='background:#8BC38B;'></span>HUMMS</li>
                                                          </ul>
                                                        </div>
                                                    </div>

                                                        <style type='text/css'>
                                                          .my-legend .legend-title {
                                                            text-align: left;
                                                            margin-bottom: 5px;
                                                            font-weight: bold;
                                                            font-size: 100%;
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
                                                              var pieData = [
                                                                {
                                                                  value: <?php echo $ict ?>,
                                                                  color:"#337AB7"
                                                                },
                                                                {
                                                                  value : <?php echo $brs ?>,
                                                                  color : "#FC8213"
                                                                },
                                                                {
                                                                  value : <?php echo $hos ?>,
                                                                  color : "#8BC34A"
                                                                },
                                                                {
                                                                  value : <?php echo $abm ?>,
                                                                  color : "#FC8250"
                                                                },
                                                                {
                                                                  value : <?php echo $humms ?>,
                                                                  color : "#8BC38B"
                                                                } 
                                                              
                                                              ];
                                                              new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
                                                    </script>
                                                   </div>
                                                  </div>
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

        <script src="../dashboard/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../dashboard/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="../dashboard/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../dashboard/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="../dashboard/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="../dashboard/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../dashboard/scripts/common.js" type="text/javascript"></script>


       <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

       </script>


    </body>
</html>