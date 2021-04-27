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
                          <h2 style="float: right;">SHSF-1</h2>
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
                                    
                                 <?php
                          //get student info
                         $lrns=$_GET['lrn'];
                          $q_studinfo ="SELECT * from student_info where lrn ='$lrns'";
                          $q_studinfo_res = $dbc->query($q_studinfo);
                          $studinfo = $q_studinfo_res->fetch_assoc();
                          $stud_id = $studinfo['lrn'];
                          $tsid = $studinfo['ts_id'];
                          $syear=$studinfo['s_year'];
                          $f_name = $studinfo['first_name']; 
                          $l_name = $studinfo['last_name'];  
                          $m_name = $studinfo['middle_name'];
                          $gender = $studinfo['gender']; 
                          $bday = $studinfo['birthday'];
                          $religion = $studinfo['religion'];
                          $hnumber = $studinfo['house_number'];
                          $street = $studinfo['street']; 
                          $barangay = $studinfo['barangay'];
                          $city = $studinfo['municipality_city'];
                          $province = $studinfo['province'];
                          $father = $studinfo['fathers_name'];
                          $mother = $studinfo['mothers_name'];
                          $guardian = $studinfo['guardian_name'];
                          $relation = $studinfo['relation'];
                          $cnum = $studinfo['contact_number'];
                          $remarks = $studinfo['remarks'];               
                        ?>
                        <form action="sf1_edit_form.php" method="POST"></br>
                           <div class="col-md-12">
                                   <h2 style="color: black; text-align: center;">Edit Student Information</h2>
                           </div>
                          <style>
                            .info
                            {
                              margin-top:20px;
                              margin-left:20px; 
                              border-radius: 2px;
                            }
                          </style>

                  <div class="row">
                          <div class="col-md-12">
                              <h3>Academic Information</h3>
                          </div>
                            <div class="col-md-12" >
                                <input type="number" value="<?php echo $stud_id; ?>" name="lrns" placeholder="LRN" class="info" required>
                                <?php if ($tsid==1)
                                    {
                                ?>  
                                 <select name="tsid" class="info" required>
                                      <option value="1">ICT</option>
                                      <option value="2">BRS</option>
                                      <option value="3">HOS</option>
                                      <option value="4">ABM</option>
                                      <option value="5">HUMMS</option>
                                 </select>
                                  <?php
                            }else if($tsid==2){
                               ?>
                              <select name="tsid">
                                  <option value="2">BRS</option>
                                  <option value="1">ICT</option>
                                  <option value="3">HOS</option>
                                  <option value="4">ABM</option>
                                  <option value="5">HUMMS</option>
                              </select> 
                               <?php
                               }else if($tsid==3){
                               ?>
                              <select name="tsid">
                                  <option value="3">HOS</option>
                                  <option value="2">BRS</option>
                                  <option value="1">ICT</option>
                                  <option value="4">ABM</option>
                                  <option value="5">HUMMS</option>
                              </select> 

                              <?php
                               }else if($tsid==4){
                               ?>
                              <select name="tsid">
                                  <option value="4">ABM</option>
                                  <option value="2">BRS</option>
                                  <option value="1">ICT</option>
                                  <option value="3">HOS</option>
                                  <option value="5">HUMMS</option>
                              </select> 

                              <?php
                               }else{
                               ?>
                              <select name="tsid">
                                <option value="5">HUMMS</option>
                                  <option value="2">BRS</option>
                                  <option value="1">ICT</option>
                                  <option value="3">HOS</option>
                                  <option value="4">ABM</option>
                                  
                              </select> 
                              <?php
                            }
                            ?>                               
                                <select name="syear" class="info" required>
                                    <option><?php echo $syear; ?></option> 
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                 </select>
                              <input type="text" name="remarks" value="<?php echo $remarks; ?>" placeholder="Remarks" class="info">
                          </div>
                  </div>

                  <div class="row">
                          <div class="col-md-12">
                              <h3>Personal Information</h3>
                          </div>
                            <div class="col-md-12">
                              <input type="text"  value="<?php echo $l_name; ?>" name="l_name" placeholder="Last Name" class="info" required >
                              <input type="text"  value="<?php echo $f_name; ?>" name="f_name" placeholder="First Name" class="info" required>
                              <input type="text"  value="<?php echo $m_name; ?>" name="m_name"placeholder="Middle Name" class="info">
                              <select name="gender"  class="info" required>
                               <option value="Male"><?php echo $gender; ?></option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>                               
                              </select>

                              <input type="date" value="<?php echo $bday; ?>" name="bday" placeholder="Birthday" class="info" required>
                              <input type="text" value="<?php echo $religion; ?>"name="religion" placeholder="Religion" class="info">
                            </div>
                  </div>

                    <div class="row">
                          <div class="col-md-12">
                              <h3>Parent / Guardian</h3>
                          </div>
                            <div class="col-md-12">                              
                              <input type="text" value="<?php echo $father; ?>" name="father" placeholder="Fathers Name" class="info">
                              <input type="text" value="<?php echo $mother; ?>"name="mother" placeholder="Mothers Name" class="info">
                              <input type="text" value="<?php echo $guardian; ?>"name="guardian" placeholder="Guardian" class="info"required>
                              <input type="text" value="<?php echo $relation; ?>"name="relation" placeholder="Relation" class="info"required>
                              <input type="text" value="<?php echo $cnum; ?>"name="cnumber" placeholder="Contact Number" class="info"required>
                            </div>
                          </div>
                    </div>

                  <div class="row">
                          <div class="col-md-12">
                              <h3>Address</h3>
                          </div>
                            <div class="col-md-12" >
                              <input type="number" value="<?php echo $hnumber; ?>" name="hnumber" placeholder="House No." class="info">
                              <input type="text" value="<?php echo $street; ?>"name="street" placeholder="Street" class="info">
                              <input type="text" value="<?php echo $barangay; ?>"name="barangay" placeholder="Barangay" class="info">
                              <input type="text" value="<?php echo $city; ?>"name="municipality" placeholder="Municipality"class="info">
                              <input type="text" value="<?php echo $province; ?>"name="province" placeholder="Province" class="info">
                            </div>
                  </div>
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
                    <a href="view_items.php?ts_id=1">
                     <input type="submit" name="submit" class="button" value="Save" style="font-size: 14px;">
                    </a>
                  </div>
                </div>
              </div>

                    
</form>
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