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

                        <div>
                          <h2 style="float: right;">SHSF-2</h2>
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
                             <!--        ///////     BACK BUTTON     //////// -->
                                  <div style="float: left;">
                                      <a onclick="goBack()" class="btn btn-success btn-lg">
                                        <span class="glyphicon glyphicon-chevron-left"></span> Back
                                      </a>
                                  </div>
                                 <script type="text/javascript">
                                   function goBack(){
                                    window.history.back();
                                   }
                                 </script>
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
                                          <li><a href="view_items.php?ts_id=1&&s_year=11">SHSF-1</a></li>
                                          <li><a href="sf2_view.php?ts_id=1&&s_year=11">SHSF-2</a></li>
                                          <li><a href="sf3_view.php?ts_id=1&&s_year=11">SHSF-3</a></li>
                                          <li><a href="sf4_view.php?ts_id=1&&s_year=11">SHSF-4</a></li>
                                          <li><a href="sf5a_view.php?ts_id=1&&s_year=11">SHSF-5A</a></li>
                                          <li><a href="sf5b_view.php?ts_id=1&&s_year=11">SHSF-5B</a></li>
                                          <li><a href="sf6_view.php?ts_id=1&&s_year=11">SHSF-6</a></li>
                                          <li><a href="sf7_view.php">SHSF-7</a></li>
                                          <li><a href="sf8_view.php?ts_id=1&&s_year=11">SHSF-8</a></li>
                                          <li><a href="sf10_view.php?ts_id=1&&s_year=11">SHSF-10</a></li>
                                        </ul>
                                  </div>
              <div class="row" style="margin-top: 60px;">
                <div class="col-md-12">
                  <div class="col-md-12" align="left">
                    <a href="#">
                      <form action="sf2_attendance.php" method="POST">
                        <input type="date" name="attendance">
                        
                        <select name="subj_code" class="info" required>

                              <option>~ Subject Code ~</option>
                                                      <?php
                          $q_studinfo ="SELECT * from tvl_courses";
                          $q_studinfo_res = $dbc->query($q_studinfo);
                                                    foreach($q_studinfo_res as $item_data){
                          ?>

                              <option value="<?php echo $item_data['subj_code'];?>"><?php echo$item_data['subj_code']; ?></option>
                        <?php

                      }
                      ?>
                        </select>   
                       
                        <select name="time" class="info" required>
                            <option>~ Time ~</option> 
                              <option value="8:00am - 10:00am">8:00am - 10:00am</option>
                              <option value="10:00am - 12:00am">10:00am - 12:00am</option>
                              <option value="1:00pm - 3:00pm">1:00pm - 3:00pm</option>
                              <option value="3:00pm - 5:00pm">3:00pm - 5:00pm</option>
                        </select>
                        <select name="status" class="info" required>
                            <option>~ Status ~</option> 
                              <option value="Present">Present</option>
                              <option value="Absent">Absent</option>
                        </select>
                        <input type="text" name="ts_id" value="<?php echo $_GET['ts_id'];?>" hidden>
                        <input type="text" name="lrn" value="<?php echo $_GET['lrn'];?>" hidden>
                         <select name="remarks" class="info" required>
                            <option>~ Remarks ~</option> 
                              <option value="Present">Present</option>
                              <option value="Absent">Absent</option>
                        </select>

                     <input type="submit" name="submit" class="button" id="myBtn" value="Add Attendance" style="font-size: 14px; float: right;">
                    </a> 
                        <h1 class="animated fadeInLeft"></h1>
                        <p class="animated fadeInDown" style="padding-left:10px;" >
                          
                        </p>                                                        
                                 
                   
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
                          <div class="col-md-12" style="margin-left: -70px;">
                            <div class="col-md-4" align="center">
                                <style>
                                  .button
                                    {
                                        padding: 10px 15px;
                                        font-size: 12px;
                                        text-align: center;
                                        cursor: pointer;
                                        outline: none;
                                        color: #fff;
                                        background-color: blue;
                                        border: none;
                                        border-radius: 10px;
                                        box-shadow: 0 3px #999;
                                        }

                                        .button:hover {background-color: darkblue}

                                        .button:active {
                                          background-color: darkblue;
                                          box-shadow: 0 5px #666;
                                          transform: translateY(4px);
                                        }
                                    }
                                </style>
                              
                            </div>
                          </div>
                        </div>
                        <?php
                           $lrns=$_GET['lrn'];
                          $q_studinfo ="SELECT attendance_report.subj_code, attendance_report.time_in_out, attendance_report.status, attendance_report.remarks, attendance_report.ts_id, student_info.lrn,student_info.ts_id,student_info.last_name,student_info.first_name,student_info.middle_name, attendance_report.total_absent AS total_absent,attendance_report.date_now FROM student_info left JOIN attendance_report ON student_info.lrn=attendance_report.LRN where student_info.lrn='$lrns'";
                          $q_studinfo_res = $dbc->query($q_studinfo);
                          print '<div class="panel-body">
                          <div class="responsive-table">
                           <table id="datatables"  class="table table-bordered table-hover table-condensed table-reflow" width="100%" cellspacing="0">
                          <thead>
                            <tr style="font-size:15px; color:black;">
                              <th class="text-center">LRN</th>
                              <th class="text-center">Last Name</th>
                              <th class="text-center">First Name</th>
                              <th class="text-center">Middle Name</th>
                              <th class="text-center">Date</th> 
                              <th class="text-center">Subject Code</th>
                              <th class="text-center">Time</th>
                              <th class="text-center">Status</th>
                              <th class="text-center">Remarks</th>

                            </tr>
                          </thead>
                          <tbody>';

                          foreach($q_studinfo_res as $item_data){
                          $lrns = $item_data['lrn'];
                          $lname = $item_data['last_name'];
                          $fname = $item_data['first_name'];
                          $mname = $item_data['middle_name'];
                          $absent = $item_data['date_now'];
      
                          ?>                  
              
                          <tr style="font-size: 14px;">
                          <td><?php echo $lrns; ?></td>
                          <td><?php echo $lname; ?></td>
                          <td><?php echo $fname; ?></td>
                          <td><?php echo $mname; ?></td>
                          <td><?php echo $absent; ?></td>
                          <td><?php ?></td>
                          <td><?php ?></td>                          
                          <td><?php ?></td>                          
                          <td><?php ?></td>
                         
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