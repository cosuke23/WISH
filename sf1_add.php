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

                                  <div class="col-md-12">
                                   <h2 style="color: black; text-align: center;">Add New Student Information</h2>
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
                                  <form action="submit_form1.php" method="POST">
                                  <div class="col-md-12">
                                     <h3>Academic Information</h3>
                                        <div class="col-md-12" >
                                            <input type="number" name="lrns" placeholder="LRN" class="info" required>

                                             <select name="tsid" class="info" required>
                                                <option>Choose A Strand</option>
                                                                <?php
                            $strand=mysqli_query($conn,"SELECT * FROM track_strand") or die(mysql_error());
                            while($strand_res=mysqli_fetch_array($strand))
                            {
                          ?> 
                                                  <option value="<?php echo $strand_res['ts_id'];?>"><?php echo $strand_res['description'];?></option>
                                                  <?php
                                                }
                                                ?>
                                             </select>                                            
                                            <select name="syear" class="info" required>
                                                <option>Choose A Year</option> 
                                                  <option value="11">11</option>
                                                  <option value="12">12</option>
                                             </select>
                                             <input type="text" name="remarks" placeholder="Remarks" class="info">
                                        </div>

                                  <div class="col-md-12">
                                     <h3>Peronnal Information</h3>
                                        <div class="col-md-12" >
                                              <input type="text" name="l_name" placeholder="Last Name" class="info" required >
                                              <input type="text" name="f_name" placeholder="First Name" class="info" required>
                                              <input type="text" name="m_name"placeholder="Middle Name" class="info">
                                              <select name="gender" class="info" required>
                                                <option> Gender </option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                              </select>
                                              <input type="date" name="bday" placeholder="Birthday" class="info" required>
                                              <input type="text" name="father" placeholder="Fathers Name" class="info">
                                              <input type="text" name="mother" placeholder="Mothers Name" class="info">
                                              <input type="text" name="guardian" placeholder="Guardian" class="info" required>
                                              <input type="text" name="relation" placeholder="Relation" class="info" required>
                                              <input type="text" name="cnumber" placeholder="Contact Number" class="info"required>
                                        </div>
                                  </div>

                                   <div class="col-md-12">
                                     <h3>Address</h3>
                                        <div class="col-md-12" >
                                              <input type="number" name="hnumber" placeholder="House No." class="info"required>
                                              <input type="text" name="street" placeholder="Street" class="info"required>
                                              <input type="text" name="barangay" placeholder="Barangay" class="info"required>
                                              <input type="text" name="municipality" placeholder="Municipality"class="info" required>
                                              <input type="text" name="province" placeholder="Province" class="info">
                                              <input type="text" name="religion" placeholder="Religion" class="info">
                                        </div>
                                  </div>

                                   <!--        ///////     PRINT BUTTON     //////// -->
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
                                             <input type="submit" name="submit" class="button" id="demo" value="Save" style="font-size: 14px;">
                                          </div>
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