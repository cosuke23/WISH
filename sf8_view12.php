<?php 
include('head.php');
?>

      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">

          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">

                    <?php 
                    include('sidebar_inventory.php');
                    ?>
              </div>
            </div>
          <!-- end: Left Menu -->
      
          <div class="container-fluid mimin-wrapper">
          <!-- start: Content -->

            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h1 class="animated fadeInLeft"></h1>
                        <p class="animated fadeInDown" style="padding-left:10px;" >
                          
                        </p>                                                        
                                 
                    <ul id="tabs-demo3" class="nav nav-tabs nav-tabs-v3" role="tablist">
                      <style type="text/css">
                        .btn-change{
                            height: 50px;
                            width: 100px;
                            background: green;
                            margin: 20px;
                            float: left;
                            box-shadow: 0 0 1px #ccc;
                            -webkit-transition: all 0.2s ease-in-out;
                            border: 0px;
                            color: #fff;
                            font-family: Arial;
                            font-size: 20px;
                            letter-spacing: 2px;
                            margin-left:auto;
                            margin-right:auto;
                            margin-bottom:0%;
                            margin-top: 0;
                            display: block;
                        }

                        .btn-change:hover{
                            -webkit-transform: scale(1.1);
                            background: #003d1a;
                        }
                      </style>
                        <div class="wrappers">
                          <button class="btn-change"><a href="sf8_view.php?ts_id=1" style="text-decoration: none; color: white;"><strong>ICT</strong></a></button>
                         <button class="btn-change"><a href="sf8_view.php?ts_id=4" style="text-decoration: none; color: white;"><strong>ABM</strong></a></button>
                         <button class="btn-change"><a href="sf8_view.php?ts_id=2" style="text-decoration: none; color: white;"><strong>BRS</strong></a></button>
                         <button class="btn-change"><a href="sf8_view.php?ts_id=3" style="text-decoration: none; color: white;"><strong>HOS</strong></a></button>
                         <button class="btn-change"><a href="sf8_view.php?ts_id=5" style="text-decoration: none; color: white;"><strong>HUMMS</strong></a></button>
                        </div>

                        <div>
                          <h2 style="float: right;">SHSF-8</h2>
                        </div>
                    </ul>
                    <!--      GRADE      -->
                      <ul id="tabs-demo3" class="nav nav-tabs nav-tabs-v3" role="tablist">
                        <li role="presentation" class="">
                          <a href="sf8_view.php?ts_id=1&&s_year=11
                          " aria-expanded="true" style="padding-right: 30px; font-size: 18px;"><span class="glyphicon glyphicon-user"></span> 
                            <?php
                          $checker=$_GET['ts_id']; 
                          if($checker==1){
                            $track="ICT";
                          }elseif($checker==2){
                            $track="BRS";
                          }elseif ($checker==3){
                            $track="HOS";
                          }elseif ($checker==4){
                            $track="ABM";
                          }else{
                            $track="HUMMS";
                          }
                          ?>
                          <?php echo $track ?>
                           11</a>
                        </li>       
                        <li role="presentation" class="active">
                          <a href="sf8_view12.php?ts_id=<?php echo $checker ?>&&s_year=12" aria-expanded="true" style="padding-right: 30px; font-size: 18px;"><span class="glyphicon glyphicon-user"></span> <?php echo $track ?> 12 </a>
                        </li>


                        <!--        ///////     PRINT BUTTON     //////// -->
                        <div style="float: right;">
                            <a href="#" class="btn btn-warning btn-lg">
                              <span class="glyphicon glyphicon-print"></span> Print
                            </a>
                        </div>
                    </ul> 

                       
                      </div><!-- col-md-12 -->
                </div><!-- panel-body -->
              </div><!-- panel box-shadow-none -->                                      
                               
                      <div class="col-md-12 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-body">
                      <div class="col-md-12">
                       <div id="tabsDemo4Content" class="tab-content tab-content-v3">
                       
                      <!-- First Tab (Available Stocks) -->
                      <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">                        
                        <div class="row">
                          <div class="col-md-12">
                               <!--        ///////     ADD STUDENT BUTTON     //////// -->
                                  <div style="float: left;">
                                      <a href="sf1_add.php" class="btn btn-success btn-lg">
                                        <span class="glyphicon glyphicon-plus"></span> Add Student
                                      </a>
                                  </div>
                                  <!--        ///////     BREADCRUMBS     //////// -->
                                  <div style="float: right;">
                                      <style>
                                        ul.breadcrumb {
                                          padding: 8px;
                                          list-style: none;
                                          background-color: #eee;
                                        }
                                        ul.breadcrumb li {display: inline;}
                                        ul.breadcrumb li+li:before {
                                          padding: 8px;
                                          color: black;
                                          content: "/\00a0";
                                        }
                                        ul.breadcrumb li a {color: green;}
                                        </style>

                                        <ul class="breadcrumb">
                                          <li><a href="view_items.php?ts_id=1">SHSF-1</a></li>
                                          <li><a href="sf2_view.php?ts_id=1">SHSF-2</a></li>
                                          <li><a href="sf3_view.php?ts_id=1">SHSF-3</a></li>
                                          <li><a href="sf4_view.php?ts_id=1">SHSF-4</a></li>
                                          <li><a href="sf5a_view.php?ts_id=1">SHSF-5A</a></li>
                                          <li><a href="sf5b_view.php?ts_id=1">SHSF-5B</a></li>
                                          <li><a href="sf6_view.php?ts_id=1">SHSF-6</a></li>
                                          <li><a href="sf7_view.php?ts_id=1">SHSF-7</a></li>
                                          <li><a href="sf8_view.php?ts_id=1">SHSF-8</a></li>
                                          <li><a href="sf10_view.php?ts_id=1">SHSF-10</a></li>
                                        </ul>
                                  </div>
                          </div>
                        </div>
                        <?php
                          $ict_male ="SELECT student_info.lrn, student_info.ts_id, student_info.gender, COUNT(track_strand.ts_id) AS track, track_strand.description FROM student_info LEFT JOIN track_strand ON student_info.ts_id=track_strand.ts_id where student_info.gender='Male' AND track_strand.ts_id='1' GROUP BY track_strand.ts_id";

                          $ict_female ="SELECT student_info.lrn, student_info.ts_id, student_info.gender, COUNT(track_strand.ts_id) AS track, track_strand.description FROM student_info LEFT JOIN track_strand ON student_info.ts_id=track_strand.ts_id where student_info.gender='Female' AND track_strand.ts_id='1' GROUP BY track_strand.ts_id";

                          $ict_total ="SELECT student_info.lrn, student_info.ts_id, student_info.gender, COUNT(track_strand.ts_id) AS track, track_strand.description FROM student_info LEFT JOIN track_strand ON student_info.ts_id=track_strand.ts_id GROUP BY track_strand.ts_id";

                          $ict_male_res = $dbc->query($ict_male);
                          $ict_female_res = $dbc->query($ict_female);
                          $ict_total_res = $dbc->query($ict_total);
                          print '<div class="panel-body">
                          <div class="responsive-table">
                           <table id="datatables"  class="table table-bordered table-hover table-condensed table-reflow" width="100%" cellspacing="0">
                          <thead>
                            <tr style="font-size:11px; color:black; ">
                                <th rowspan="2">NO.</th>
                                <th rowspan="2">LRN</th>
                                <th rowspan="2">LEARNERS NAME</th>
                                <th rowspan="2">BIRTHDATE</br>(MM/DD/YY)</th>
                                <th rowspan="2">Age</th>
                                <th rowspan="2">WEIGHT</br>(kg)</th>
                                <th rowspan="2">HEIGHT </br>(m)</th>
                                <th rowspan="2">HEIGHT<sup>2</sup></br>(m<sup>2</sup>)</th>
                                <th colspan="2">NUTRITIONAL </br> STATUS</th>
                                <th rowspan="2">HEIGHT FOR AGE </br> (HFA)</th>
                                <th rowspan="2">REMARKS</th>
                              </tr>
                              <tr style="font-size:10px; color:black; ">
                                <th>BMI</br>(kg/m<sup>2</sup>)</th>
                                <th>BMI </br>CATEGORY</th>
                              </tr>
                              <tr>
                                <td colspan="12"  style="font-size:12px; color:black; ">MALE</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td colspan="12" style="font-size:12px; color:black; ">FEMALE</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>


                          </thead>
                          <tbody>';


                          foreach($ict_total_res as $item_data){
                          $strand = $item_data['description'];
                          $total= $item_data['track'];

                          ?>   
                                  

                          <?php
                          }
                          '</tbody>
                          </table>
                          </div>
                          </div>';
                        ?>
                      </div>
            
                  </div>

                  </div>
                </div>
              </div>
              </div>
              </div>
            </div><!-- end: content -->
            </div>

      </div>

     
<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>

<script src="asset/js/plugins/jquery.knob.js"></script>
<script src="asset/js/plugins/ion.rangeSlider.min.js"></script>
<script src="asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<script src="asset/js/plugins/jquery.mask.min.js"></script>
<script src="asset/js/plugins/select2.full.min.js"></script>
<script src="asset/js/plugins/nouislider.min.js"></script>
<script src="asset/js/plugins/jquery.validate.min.js"></script>

<script type="text/javascript" src="asset/js/bootstrapValidator.js"></script>
<script type="text/javascript" src="asset/js/moment.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="asset/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="asset/js/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="asset/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="asset/js/export.js"></script>
<script type="text/javascript" src="asset/js/dataTables.tableTools.js"></script>
<!-- custom -->
<script src="asset/js/main.js"></script>
<script src="asset/js/jquery.confirm.min.js"></script>
<script src="asset/js/jquery.confirm.js"></script>
<script src="asset/js/sweetalert-dev.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
 var js_event_dates = document.getElementById('event_dates');
 var table = $('#datatables').DataTable();
 var table = $('#datatables1').DataTable();
 var table = $('#datatables2').DataTable();
 });
</script>
<!-- end: Javascript -->
</body>
</html>