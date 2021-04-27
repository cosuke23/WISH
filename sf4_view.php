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
                        <li role="presentation" class="active">
                          <a href="sf4_view.php"  aria-expanded="true" style="padding-right: 30px;"><span class="glyphicon glyphicon-list-alt"></span> ICT </a>
                        </li>
                         
                        <li role="presentation" class="">
                          <a href="sf4_view_abm.php"  aria-expanded="true" style="padding-right: 30px;"><span class="glyphicon glyphicon-list-alt"></span> ABM </a>
                        </li>

                        <li role="presentation" class="">
                          <a href="sf4_view_brs.php" aria-expanded="true" style="padding-right: 30px;" ><span class="glyphicon glyphicon-list-alt"></span> BRS </a>
                        </li>

                        <li role="presentation" class="">
                          <a href="sf4_view_humms.php" aria-expanded="true" style="padding-right: 30px;"><span class="glyphicon glyphicon-list-alt"></span> HUMMS</a>
                        </li>

                         <li role="presentation" class="">
                          <a href="sf4_view_hos.php" aria-expanded="true" style="padding-right: 30px;"><span class="glyphicon glyphicon-list-alt"></span>  HOS </a>
                        </li>

                    </ul>

                    <!--      GRADE      -->
                      <ul id="tabs-demo3" class="nav nav-tabs nav-tabs-v3" role="tablist">
                        <li role="presentation" class="active">
                          <a href="sf4_view.php" aria-expanded="true" style="padding-right: 30px;"><span class="glyphicon glyphicon-list-alt"></span> ICT 11</a>
                        </li>
                         
                        <li role="presentation" class="">
                          <a href="#" aria-expanded="true" style="padding-right: 30px;"><span class="glyphicon glyphicon-list-alt"></span> ICT 12 </a>
                        </li>

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

                              <a href="sf1_add.php">
                                <input type="submit" name="submit"class="button" value="Print Form">
                              </a>
                            </div>
                          </div>
                        </div>

                         <?php
                          $ict_male ="SELECT student_info.lrn, student_info.ts_id, student_info.gender, COUNT(track_strand.ts_id) AS track, track_strand.description FROM student_info LEFT JOIN track_strand ON student_info.ts_id=track_strand.ts_id where student_info.gender='Male' AND track_strand.ts_id='1' GROUP BY track_strand.ts_id";

                          $ict_female ="SELECT student_info.lrn, student_info.ts_id, student_info.gender, COUNT(track_strand.ts_id) AS track, track_strand.description FROM student_info LEFT JOIN track_strand ON student_info.ts_id=track_strand.ts_id where student_info.gender='Female' AND track_strand.ts_id='1' GROUP BY track_strand.ts_id";

                          $ict_total ="SELECT student_info.lrn, student_info.ts_id,(SELECT  COUNT(track_strand.ts_id) AS track FROM student_info LEFT JOIN track_strand ON student_info.ts_id=track_strand.ts_id where student_info.gender='Male' AND track_strand.ts_id='1' GROUP BY track_strand.ts_id) as total_male,(SELECT  COUNT(track_strand.ts_id) AS track FROM student_info LEFT JOIN track_strand ON student_info.ts_id=track_strand.ts_id where student_info.gender='Female' AND track_strand.ts_id='1' GROUP BY track_strand.ts_id) as total_female, student_info.gender, COUNT(track_strand.ts_id) AS track, track_strand.description FROM student_info LEFT JOIN track_strand ON student_info.ts_id=track_strand.ts_id GROUP BY track_strand.ts_id";

                          $ict_male_res = $dbc->query($ict_male);
                          $ict_female_res = $dbc->query($ict_female);
                          $ict_total_res = $dbc->query($ict_total);
                          print '<div class="panel-body">
                          <div class="responsive-table">
                           <table id="datatables"  class="table table-bordered table-hover table-condensed table-reflow" width="100%" cellspacing="0">
                          <thead>
                            <tr style="font-size:12px; color:black;">
                              <th class="text-center">TRACK</th>
                              <th class="text-center">STRAND</th>
                        
                              <th class="text-center" colspan="3">REGISTERED LEARNERS</th> 
                              <th class="text-center" colspan="3">DROP OUT</th> 
                              <th class="text-center" colspan="3">TRANSFERRED OUT</th>   
                              <th class="text-center" colspan="3">TRANSFERRED IN</th>
                              <th class="text-center" colspan="3">SHIFTED IN</th>
                              <th class="text-center" colspan="3">SHIFTED OUT</th>  

                            <tr>
                              <th></th>
                              <th></th>

                              <th>M</th>
                              <th>F</th>
                              <th>T</th> 

                              <th>M</th>
                              <th>F</th>
                              <th>T</th> 

                              <th>M</th>
                              <th>F</th>
                              <th>T</th> 

                              <th>M</th>
                              <th>F</th>
                              <th>T</th> 

                              <th>M</th>
                              <th>F</th>
                              <th>T</th> 

                              <th>M</th>
                              <th>F</th>
                              <th>T</th>

                            </tr>
                          
                          </thead>
                          <tbody>';


                          foreach($ict_total_res as $item_data){
                          $strand = $item_data['description'];
                          $total_male= $item_data['total_male'];
                          $total_female= $item_data['total_female'];
                          $total= $item_data['track'];

                          ?>   
                          <tr style="font-size: 13px;">
                          <td></td>
                          <td><?php echo $strand; ?></td>
                          <td><?php echo $total_male; ?></td>
                          <td><?php echo $total_female; ?></td> 
                          <td><?php echo $total; ?></td>
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
                          <td></td> 
                          <td></td> 
                          <td></td> 

                                                   
                          </tr>               

                          <?php
                          }
                          '</tbody>
                          </table>
                          </div>
                          </div>';
                        ?>

<!--
                          <div class="panel-body">
                          <div class="responsive-table">
                           <table id="datatables"  class="table table-bordered table-hover table-condensed table-reflow" width="100%" cellspacing="0">
                          <thead>
                            <tr style="font-size:13px; color:black;">
                              <th class="text-center" >TRACK</th>
                              <th class="text-center">STRAND</th>
                              <th class="text-center" colspan="3">REGISTERED LEARNERS</th>  
                              <th class="text-center" colspan="3">ATTENDANCE</th>   
                              <th class="text-center" colspan="3">DROP OUT</th>   
                              <th class="text-center" colspan="3">TRANSFERRED OUT</th>   
                              <th class="text-center" colspan="3">TRANSFERRED IN</th>
                              <th class="text-center" colspan="3">SHIFTED IN</th>
                              <th class="text-center" colspan="3">SHIFTED OUT</th>                  
                            </tr>
                          </thead>
                          <tbody style="font-size: 10px; text-align: center;">
                            <td></td>
                            <td></td>

                            <td>M</td>
                            <td>F</td>
                            <td>T</td>

                            <td>M</td>
                            <td>F</td>
                            <td>T</td>

                             <td>M</td>
                            <td>F</td>
                            <td>T</td>

                            <td>M</td>
                            <td>F</td>
                            <td>T</td>

                             <td>M</td>
                            <td>F</td>
                            <td>T</td>

                            <td>M</td>
                            <td>F</td>
                            <td>T</td>

                             <td>M</td>
                            <td>F</td>
                            <td>T</td>

                          </tbody>
                        </table>
                      </div>
                       </div>
-->
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