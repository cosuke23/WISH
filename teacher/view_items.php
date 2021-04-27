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
                          <button class="btn-change"><a href="view_items.php?ts_id=<?php echo $strand_res['ts_id'];?>" style="text-decoration: none; color: white;"><strong><?php echo $strand_res['description'];?></strong></a></button>
                          <?php 
                           }
                          ?>
                        </div>

                        <div>
                          <h2 style="float: right;">SHSF-1</h2>
                        </div>
                    </ul>
                    <!--      GRADE      -->
                      <ul id="tabs-demo3" class="nav nav-tabs nav-tabs-v3" role="tablist">
                        <li role="presentation" class="active">
                          <a href="view_items.php?ts_id=1&&s_year=11
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
                        <li role="presentation" class="">
                          <a href="view_items12.php?ts_id=<?php echo $checker ?>&&s_year=12" aria-expanded="true" style="padding-right: 30px; font-size: 18px;"><span class="glyphicon glyphicon-user"></span> <?php echo $track ?> 12 </a>
                        </li>


                        <!--        ///////     PRINT BUTTON     //////// -->
                        <div  style="float: right;">
                            <a href="#" class="btn btn-warning btn-lg">
                              <span class="glyphicon glyphicon-print"></span> Print
                            </a>

                        </div>

                        <div  style="float: right;">
                            <br>

                        </div>
                       
                      </div><!-- col-md-12 -->
                     
                    </ul> 
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
                       
                       <form class="form-login" id="dForm" action="save_grade.php" method="post">
                         <?php
                          $strand = $_GET['ts_id'];
                          $q_studinfo ="SELECT * from student_info WHERE ts_id='$strand' AND s_year=11";
                          $q_studinfo_res = $dbc->query($q_studinfo);
                          print ' 
                          <div id="print_content">

                          <div class="panel-body">
                          <div class="responsive-table">
                           <table id="datatables"  class="table table-bordered table-hover table-condensed table-reflow" width="100%" cellspacing="0">
                          
                          <thead>
                            <tr style="font-size:15px; color:black;">
                              <th class="text-center">LRN</th>
                              <th class="text-center">Last Name</th>
                              <th class="text-center">First Name</th>
                              <th class="text-center">Middle Name</th>
                              <th class="text-center">Gender</th>
                              <th class="text-center">Action</th>                        
                            </tr>
                          </thead>
                          
                          <tbody>';


                          foreach($q_studinfo_res as $item_data){
                          $lrns = $item_data['lrn'];
                          $lname = $item_data['last_name'];
                          $fname = $item_data['first_name'];
                          $mname = $item_data['middle_name'];
                          $gender = $item_data['gender'];
                          $s_year = $item_data['s_year'];
      
                          ?>                  
                          <tr style="font-size: 14px;">
                          <td><?php echo $lrns; ?></td>
                          <td><?php echo $lname; ?></td>
                          <td><?php echo $fname; ?></td>
                          <td><?php echo $mname; ?></td>
                          <td><?php echo $gender; ?></td>

                          <style type="text/css">
                            
                            table.table td a.view {
                                    color: #03A9F4;
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
                            <a href="sf1_view.php?ts_id=<?php echo $strand; ?>&&lrn=<?php echo $lrns; ?>&&lname=<?php echo $lname; ?>" class="view" title="View" data-toggle="tooltip" id="1"><i class="material-icons">&#xE417;</i>
                            </a>

                            <!--   Edit Button    -->
                            <a href="sf1_edit.php?ts_id=<?php echo $strand; ?>&&lrn=<?php echo $lrns; ?>&&lname=<?php echo $lname; ?>&&s_year=<?php echo $s_year; ?>" class="edit" title="Edit" data-toggle="tooltip" id="2"><i class="material-icons">&#xE254;</i>
                            </a>
                           
                            <!--   Archieved Button    -->

                            <a href="sf1_archieved.php?lrn=<?php echo $lrns; ?>&&s_year=<?php echo $s_year; ?>" class="archieved" title="Move to Archieved" data-toggle="tooltip" id="4" onclick="myFunction()"><i class="material-icons">&#xE149;</i>
                            </a>

                            <script type="text/javascript">
                              function myFunction()
                              {
                                alert("Attention!!!\n\nLearners Information will be move to Archived Files");
                              }
                            </script>
                          </td>
                          </tr>

                          <?php
                          }
                          '</tbody>
                          </table>
                           </div>
                          </div>
                          </div>';
                        ?>
                                   
                        </form>
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