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
                        <!-- CODE FOR DYNAMIC OUTPUT OF STRAND -->
                        <div class="wrappers">
                       <?php
                            $strand=mysqli_query($conn,"SELECT * FROM track_strand") or die(mysql_error());
                            while($strand_res=mysqli_fetch_array($strand))
                            {
                          ?>
                          <button class="btn-change"><a href="sf5b_view.php?ts_id=<?php echo $strand_res['ts_id'];?>" style="text-decoration: none; color: white;"><strong><?php echo $strand_res['description'];?></strong></a></button>
                          <?php 
                           }
                          ?>

                          <button class="btn-change"><a href="ad_strand.php" style="text-decoration: none; color: white;" class="glyphicon glyphicon-plus" title="Add Strand"></a></button>     
                        </div>

                        <div>
                          <h2 style="float: right;">SHSF-5B</h2>
                        </div>
                    </ul>
                    <!--      GRADE      -->
                      <ul id="tabs-demo3" class="nav nav-tabs nav-tabs-v3" role="tablist">
                        <li role="presentation" class="active">
                          <a href="sf5b_view.php?ts_id=1&&s_year=11" aria-expanded="true" style="padding-right: 30px; font-size: 18px;"><span class="glyphicon glyphicon-user"></span> <?php
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
                          <?php echo $track ?> 11</a>
                        </li>
                         
                        <li role="presentation" class="">
                          <a href="sf5b_view12.php?ts_id=<?php echo $checker ?>&&s_year=12" aria-expanded="true" style="padding-right: 30px; font-size: 18px;"><span class="glyphicon glyphicon-user"></span> <?php echo $track ?> 12 </a>
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
                             <!--        ///////     BACK BUTTON     ////////   -->
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
                                      <a href="sf5b_list.php?ts_id=<?php echo $_GET['ts_id']; ?>&&s_year=11" class="btn btn-success btn-lg">
                                        <span class="glyphicon glyphicon-plus"></span> Add National Certificate
                                      </a>
                                  </div>
                            </div>
                          </div>
                        </div>
                      
                         <?php
                         $syear=$_GET['s_year'];
                         $strand = $_GET['ts_id'];
                          $q_studinfo ="SELECT nc_table.id, nc_table.lrn, nc_table.completed_shs_status, nc_table.description, nc_table.level, student_info.lrn, student_info.last_name, student_info.first_name, student_info.middle_name, student_info.ts_id, student_info.s_year FROM nc_table LEFT JOIN student_info ON student_info.lrn=nc_table.lrn WHERE nc_table.completed_shs_status='Yes' AND student_info.ts_id='$strand' AND student_info.s_year=11";

                          $q_studinfo_res = $dbc->query($q_studinfo);
                          print '<div class="panel-body">
                          <div class="responsive-table">
                           <table id="datatables"  class="table table-bordered table-hover table-condensed table-reflow" width="100%" cellspacing="0">
                          <thead>
                            <tr style="font-size:15px; color:black;">
                              <th class="text-center">LRN</th>
                              <th class="text-center">Full Name</th>
                              <th class="text-center">Completed SHS <br> in 2 SYs? (Yes/No)</th>  
                              <th class="text-center">Description</th> 
                              <th class="text-center">NC Level Attained <br> (if applicable)</th> 
                              <th class="text-center">Action</th> 

                            </tr>
                          </thead>
                          <tbody>';


                          foreach($q_studinfo_res as $item_data){
                          $lrns = $item_data['lrn'];
                          $lname = $item_data['last_name'];
                          $fname = $item_data['first_name'];
                          $mname = $item_data['middle_name'];
                          $shs_status = $item_data['completed_shs_status'];
                          $description = $item_data['description'];
                          $nc_level = $item_data['level'];

                          ?>                  
              
                          <tr style="font-size: 14px;">
                          <td><?php echo $lrns; ?></td>
                          <td><?php echo $lname;?> <?php echo $fname;?> <?php echo $mname;?></td>
                          <td><?php echo $shs_status; ?></td>
                          <td><?php echo $description; ?></td> 
                          <td><?php echo $nc_level; ?></td>

                          <style type="text/css">
                            
                            
                                table.table td a.edit {
                                    color: #FFC107;
                                } 
                          </style>
                          <td>
                            <!--   Edit Button    -->
                            <a href="sf5b_edit.php?ts_id=<?php echo $checker; ?>&&lrn=<?php echo $lrns; ?>&&syear=<?php echo $syear?>" class="edit" title="Edit" data-toggle="tooltip" id="2"><i class="material-icons">&#xE254;</i>
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