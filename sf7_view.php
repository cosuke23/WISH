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
                      
                        <div>
                          <h2 style="float: left;">School Personnel Basic Profile and Assignment for SHS</h2>
                          <h2 style="float: right;">SHSF-7</h2>
                        </div>
                    </ul>
                    <!--      GRADE      -->
                    
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
                                    
                        <div class="row">
                          <div class="col-md-12">
                            <div class="col-md-12" align="center">
                               <div style="float: right;">
                                      <a href="sf7_add_teacher.php" class="btn btn-success btn-lg">
                                        <span class="glyphicon glyphicon-plus"></span> Add Personnel Information
                                      </a>
                                  </div>
                            </div>
                          </div>
                        </div>
                       <?php
                          $q_instructor_info ="SELECT teachers_table.emid, teachers_table.last_name, teachers_table.first_name, teachers_table.middle_name, teachers_table.gender ,teachers_table.class, teachers_table.f_source, teachers_table.pos_desig, teachers_table.em_status, teachers_table.deg_post, teachers_table.m_s_training, teachers_table.minor, teachers_table_2.id, teachers_table_2.em_id, teachers_table_2.subject_advisory, teachers_table_2.grade_and_section, teachers_table_2.day, teachers_table_2.start, teachers_table_2.end, teachers_table_2.total_minutes, teachers_table_2.remarks FROM teachers_table LEFT JOIN teachers_table_2 ON teachers_table.emid group by teachers_table.emid";

                          $q_instructor_res = $dbc->query($q_instructor_info);
                          print '<div class="panel-body">
                          <div class="responsive-table">
                           <table id="datatables"  class="table table-bordered table-hover table-condensed table-reflow"  width="100%" cellspacing="0">
                          <thead>
                            <tr style="font-size:11px; color:black;">
                              <th class="text-center">Employee No.</th>
                              <th class="text-center">Name of Personnel</th>
                              <th class="text-center">Gender</th>
                              <th class="text-center">Fund Source</th>
                              <th class="text-center">Position/
                              Designation</th>
                              <th class="text-center">Nature of Appointment/
                              Employment Status </th>      
                              <th class="text-center">Degree/
                              Postgraduate</th>
                              <th class="text-center">Major/ </br>
                               Specialization/ </br>
                                Specialized Training Attended</th>
                              <th class="text-center">Minor</th>
                              <th class="text-center">Remarks</th>
                              <th class="text-center">Actions</th>                  
                            </tr>
                          </thead>
                          <tbody>';

                          foreach($q_instructor_res as $item_data){
                          $emid = $item_data['emid'];
                          $lname = $item_data['last_name'];
                          $fname = $item_data['first_name'];
                          $mname = $item_data['middle_name'];
                          $gender = $item_data['gender'];
                          $class = $item_data['class'];
                          $f_source = $item_data['f_source'];
                          $pos_desig = $item_data['pos_desig'];
                          $em_status = $item_data['em_status'];
                          $deg_post = $item_data['deg_post'];
                          $ms_training = $item_data['m_s_training'];
                          $minor = $item_data['minor'];
                          $subject = $item_data['subject_advisory'];
                          $grade_and_section = $item_data['grade_and_section'];
                          $day = $item_data['day'];
                          $start = $item_data['start'];
                          $end = $item_data['end'];
                          $total_minutes = $item_data['total_minutes'];
                          $remarks = $item_data['remarks'];
                           
                          ?>                  
              
                          <tr style="font-size: 13px;"  class="table-striped">
                          <td><?php echo $emid; ?></td>
                          <td><?php echo $lname;?> , <?php echo $fname;?> <?php echo $mname;?></td>
                          <td><?php echo $gender; ?></td>
                          <td><?php echo $f_source; ?></td>
                          <td><?php echo $class; ?></td>
                          <td><?php echo $em_status; ?></td>
                          <td><?php echo $deg_post; ?></td>
                          <td><?php echo $pos_desig; ?></td>
                          <td><?php echo $ms_training; ?></td>
                          <td><?php echo $minor; ?></td>

                          
                          <style type="text/css">
                            
                            table.table td a.add {
                                    color: green;
                                }
                                table.table td a.edit {
                                    color: #FFC107;
                                }
                                table.table td a.archieved {
                                    color: red;
                                }
                                
                          </style>
                          <td>
                            <!--   View Button    -->
                            <a href="sf7_add_subj.php?emid=<?php echo $emid; ?>&&lname=<?php echo $lname; ?>" class="add" title="Add Subject" data-toggle="tooltip" id="1"><i class="material-icons">&#xE145;</i>
                            </a>

                            <!--   Edit Button    -->
                            <a href="sf7_edit.php?emid=<?php echo $emid; ?>&&lname=<?php echo $lname; ?>" class="edit" title="Edit" data-toggle="tooltip" id="2"><i class="material-icons">&#xE254;</i>
                            </a>
                           
                             <!--   Archieved Button    -->

                            <a href="#" class="archieved" title="Move to Archieved" data-toggle="tooltip" id="4"><i class="material-icons">&#xE149;</i>
                            </a>
                          </td>
                          </tr>
            
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