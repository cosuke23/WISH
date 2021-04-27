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
                           <button class="btn-change"><a href="add_strand.php" style="text-decoration: none; color: white;" class="glyphicon glyphicon-plus" title="Add Strand"></a></button>     
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
                        <div style="float: right;">
                            <a href="Print/report1.php" class="btn btn-warning btn-lg">
                              <span class="glyphicon glyphicon-print"></span> Print Preview
                            </a>
                        </div>
                    </ul> 

                       
                      </div><!-- col-md-12 -->
                </div><!-- panel-body -->
              </div><!-- panel box-shadow-none -->                                      
                          <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>






    <script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>WISH-SF1</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:1054px;
margin:0 auto;
}
</style>     
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
                                          <li><a href="view_items.php?ts_id=1&&s_year=11"">SHSF-1</a></li>
                                          <li><a href="sf2_view.php?ts_id=1&&s_year=11"">SHSF-2</a></li>
                                          <li><a href="sf3_view.php?ts_id=1&&s_year=11"">SHSF-3</a></li>
                                          <li><a href="sf4_view.php?ts_id=1&&s_year=11"">SHSF-4</a></li>
                                          <li><a href="sf5a_view.php?ts_id=1&&s_year=11"">SHSF-5A</a></li>
                                          <li><a href="sf5b_view.php?ts_id=1&&s_year=11"">SHSF-5B</a></li>
                                          <li><a href="sf6_view.php?ts_id=1&&s_year=11">SHSF-6</a></li>
                                          <li><a href="sf7_view.php">SHSF-7</a></li>
                                          <li><a href="sf8_view.php?ts_id=1&&s_year=11"">SHSF-8</a></li>
                                          <li><a href="sf10_view.php?ts_id=1&&s_year=11"">SHSF-10</a></li>
                                        </ul>
                                  </div>
                          </div>
                        </div>
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