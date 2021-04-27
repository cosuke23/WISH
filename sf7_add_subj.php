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
                          <h2 style="float: left;">School Personnel Basic Profile and Assignment for SHS</h2>
                          <h2 style="float: right;">SHSF-7</h2>
                        </div>
                    </ul>
                    </div><!-- col-md-12 -->
                        <!--        ///////     PRINT BUTTON     //////// -->
                        <div style="float: right;">
                            <a href="#" class="btn btn-warning btn-lg">
                              <span class="glyphicon glyphicon-print"></span> Print
                            </a>
                        </div>

                       
                     
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
                                 
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-12" align="left">
                       <form action="submit_form7.php" method="POST" > 
                                 <div class="col-md-12">
                                  <br>
                                   <h3>Peronnal Information</h3>
                                   <br>
                                   <div class="col-md-12" ><?php
                                   
                                   $user_query = mysqli_query($conn,"SELECT teachers_table.emid, teachers_table.last_name, teachers_table.first_name, teachers_table.middle_name, teachers_table_2.id, teachers_table_2.em_id, teachers_table_2.subject_advisory, teachers_table_2.grade_and_section, teachers_table_2.day, teachers_table_2.start, teachers_table_2.end, teachers_table_2.total_minutes, teachers_table_2.remarks FROM teachers_table LEFT JOIN teachers_table_2 ON teachers_table.emid group by teachers_table.emid")or die (mysql_error());
                                                $user_row = mysqli_fetch_array($user_query);
                                                $empid = $_GET['emid'];
                                                $lname=$user_row['last_name'];
                                                $fname=$user_row['first_name'];
                                                $mname=$user_row['middle_name'];
                                   ?>
                                              <input type="text" name="lname" value="<?php echo $lname?>, <?php echo $fname?> <?php echo $mname?>" class="info" readonly >
                                                <input type="text" name="empid" value="<?php echo $empid?>" class="info" hidden >
                                                <input type="text" name="subj" placeholder="Enter Subject" class="info">
                                                <select name="day" class="info" required>
                                                  <option>Select Day</option> 
                                                  <option value="Monday">Monday</option>
                                                  <option value="Tuesday">Tuesday</option>
                                                  <option value="Wednesday">Wednesday</option>
                                                  <option value="Thursday">Thursday</option>
                                                  <option value="Friday">Friday</option>
                                                  <option value="Saturday">Saturday</option>
                                                </select>
                                                <input type="time" name="time_start"  class="info" required >
                                                <input type="time" name="time_end"  class="info" required >

                                        </div>
                                 

                            <!--        ///////     SAVE BUTTON     //////// -->
                                     <style>
                                        .button
                                          {
                                              padding: 10px 30px;
                                              font-size: 12px;
                                              text-align: center;
                                              cursor: pointer;
                                              outline: none;
                                              color: #fff;
                                              background-color: #069e0d;
                                              border: none;
                                              border-radius: 10px;
                                              box-shadow: 0 3px #999;
                                              }

                                              .button:hover {background-color:#026106 }

                                              .button:active {
                                                background-color: #026106;
                                                box-shadow: 0 5px #666;
                                                transform: translateY(4px);
                                              }
                                          }
                                      </style>  
                                      <div class="row" style="margin-top: 60px;">
                                        <div class="col-md-12">
                                          <div class="col-md-12" align="center">
                                            <a href="#">
                                             <input type="submit" name="submit" class="button"  onclick="myFunction()" id="demo" value="Save" style="font-size: 14px;">
                                            </a>
                                          </div>
                                        </div>
                                      </div> 
                                    </form>     
                   </div> 
                      </div><!-- col-md-12 -->
                </div><!-- panel-body -->
              </div><!-- panel box-shadow-none -->   
                                <hr>
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
                           $emid=$_GET['emid'];
                          $q_studinfo ="SELECT teachers_table.emid, teachers_table.last_name, teachers_table.middle_name, teachers_table.first_name, teachers_table_2.subject_advisory, teachers_table_2.grade_and_section, teachers_table_2.day, teachers_table_2.start, teachers_table_2.end FROM teachers_table_2 LEFT JOIN teachers_table ON teachers_table.emid=teachers_table_2.em_id";

                          $q_studinfo_res = $dbc->query($q_studinfo);
                          print '<div class="panel-body">
                          <div class="responsive-table">
                           <table id="datatables"  class="table table-bordered table-hover table-condensed table-reflow" width="100%" cellspacing="0">
                          <thead>
                            <tr style="font-size:15px; color:black;">
                              <th class="text-center">Subject Advisory</th>
                              <th class="text-center">Grade and Section</th>
                              <th class="text-center">Day</th>
                              <th class="text-center">Start</th>
                              <th class="text-center">End</th>                   
                            </tr>
                          </thead>
                          <tbody>';


                          foreach($q_studinfo_res as $item_data){
                          $sub = $item_data['subject_advisory'];
                          $lname = $item_data['last_name'];
                          $fname = $item_data['first_name'];
                          $mname = $item_data['middle_name'];
                          $grade_section = $item_data['grade_and_section'];
                          $day = $item_data['day'];
                          $start = $item_data['start'];
                          $end = $item_data['end'];
      
                          ?>                  
              
                          <tr style="font-size: 14px;">
                          <td><?php echo $sub; ?></td>
                          <td><?php echo $grade_section; ?></td>                          
                          <td><?php echo $day; ?></td>
                          <td><?php echo $start; ?></td>
                          <td><?php echo $end; ?></td>
                         
            
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