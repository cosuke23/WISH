.<?php 
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
                                 
                    

                        <div>
                          <h2 style="float: right;">SHSF-5A</h2>
                        </div>
                    

                       
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
                                  
                                  <style type="text/css">
                                    .info
                                    {
                                      width: 200px;
                                      height: 30px;
                                      margin:2px;
                                      margin-bottom: 20px;
                                      }
                                  </style>

                      <form action="update_form5a.php" method="POST" > 
                                 <div class="col-md-12">
                                   <h3 style="text-align: center; color: black;">Add Back Subjects</h3> <br>
                                   <div class="col-md-12" >
                                              
                                              
                                                <!--    /////     QUERY      ///// -->
                                                <?php
                                                  $ts_id=$_GET['ts_id'];
                                                  $lrn=$_GET['lrn'];
                                                  $s_year=$_GET['s_year'];
                                                  $back_subjects=$_GET['back_subjects'];
                                                   $q_studinfo = "SELECT student_info.lrn, CONCAT(student_info.last_name,' ',student_info.first_name,' ', student_info.middle_name) as full_name, semester_sy_status.* FROM semester_sy_status LEFT JOIN student_info ON student_info.lrn=semester_sy_status.lrn WHERE semester_sy_status.lrn=$lrn AND back_subjects='$back_subjects' ";
                                                   $q_studinfo_res = $dbc->query($q_studinfo);

                                                   foreach($q_studinfo_res as $item_data){

                                                   $lrns = $item_data['lrn'];
                                                   $full_name = $item_data['full_name'];
                                                   $back_subjects= $item_data['back_subjects'];
                                                   $semester_status= $item_data['semester_status'];
                                                   $sy_status= $item_data['sy_status'];
                                                ?>
                                              <?php }
                                              ?>
                                                <input type="text" name="full_name" value="<?php echo $full_name ?>" class="info" readonly >                                                 
                                                <input type="text" name="lrn" value="<?php echo $lrn ?>" class="info" hidden >

                                                <input type="text" name="subject" value="<?php echo $back_subjects ?>" class="info" readonly >

                                                <select name="semester_status">
                                                  <option>Semester Status</option>
                                                  <option value="Complete">Complete</option>
                                                  <option value="Incomplete">Incomplete</option>
                                                </select>
                                                <input type="text" name="sy_status" value="<?php echo $sy_status ?>" class="info" readonly >
                                                <input type="text" name="s_year" value="<?php echo $s_year ?>" class="info" hidden >

                                        </div>
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
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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