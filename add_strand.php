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
                          <h2 style="float: left;">Add Strand / Subjects</h2>
                        </div>
                        <style type="text/css">
                          .btn
                          {
                            height: 35px;
                            width: inherit;
                            font-size: 16px;
                            border-radius: 7px;
                          }

                          .modal-header h3
                          {
                            color: white;
                            text-align: center;
                          }

                          .modal-header{
                            background-color: #2196F3;
                          }
                        </style>
                        <div style="float: right;">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><strong>+ Add Subjects</strong>
                          </button>

                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header" class="alert warning">
                                <h3 class="modal-title" id="exampleModalLongTitle">Add Subject/s</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <form action="add_tvlcourses.php" method="POST">
                              <div class="modal-body">
                                <!--    //////    CODE FOR ADDING SUBJECTS - FORM    //////  -->
                                
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="inputSubjCode">Subject Code</label>
                                      <input type="text" name="subjcode" class="form-control" id="inputSubjCode" placeholder="Subject Code">
                                    </div>

                                    <div class="form-group col-md-6">
                                      <label for="inputSubjDesc">Subject Description</label>
                                      <input type="text" name="subjdesc" class="form-control" id="inputSubjDesc" placeholder="Subject Description">
                                    </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="inputDays">Days of the Week</label>
                                      <input type="text" name="days" class="form-control" id="inputDays" placeholder="Days of the Week">
                                    </div>

                                    <div class="form-group col-md-6">
                                      <label for="inputTime">Time</label>
                                      <input type="text" name="time_in_out" class="form-control" id="inputTime" placeholder="Time">
                                    </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="inputDays">Strand</label>
                                      <select name="tsid" class="info" required>
                                                <option name="strand">Choose A Strand</option> 
                                                 <?php
                            $strand=mysqli_query($conn,"SELECT * FROM track_strand") or die(mysql_error());
                            while($strand_res=mysqli_fetch_array($strand))
                            {
                          ?> 
                                                  <option value="<?php echo $strand_res['description'];?>"><?php echo $strand_res['description'];?></option>
                                                  <?php
                                                }
                                                ?>
                                             </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                      <label for="inputYear">Year</label>
                                      <select name="s_year" class="info" required>
                                                  <option value="">Choose A Year</option> 
                                                  <option value="11">11</option>
                                                  <option value="12">12</option>
                                             </select>
                                    </div>
                                  </div>

                              </div>
                              <div class="modal-footer">
                                <input type="submit" class="btn btn-success" name="submit" value="Save">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                            </form>
                          </div>
                              
                          </div>

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
                                        <span class="glyphicon glyphicon-chevron-left"></span><strong> Back</strong>
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
                                   <h2 style="color: black; text-align: center;">Add New Strand</h2><br><br>
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

                                  <?php
                                  $querry=mysqli_query($conn,"SELECT MAX(ts_id) as new_tsid from track_strand");
                                  $row=mysqli_fetch_array($querry);
                                    $ts_id=$row['new_tsid'];
                                    $new_tsid=$ts_id+1;
                                  ?>

                                  <form action="addstrand.php" method="POST">
                                  <div class="col-md-12">
                                    <center>
                                          <label>Strand Code:</label>
                                           <input type="text" name="strand" placeholder="" class="info" required><br>
                                          <label>Strand Description:</label>
                                           <input type="text" name="subjcode" placeholder="" class="info" required><br>
                                           <input type="number" name="new_tsid" value="<?php echo $new_tsid ?>" class="info" hidden>
                                    </center>
                                  
                                     <!--        ///////     ADD BUTTON     //////// -->
                                     <style>
                                        .button
                                          {
                                              padding: 10px 30px;
                                              font-size: 20px;
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
                                            <a href=""> 
                                             <input type="submit" name="submit" class="button" onclick="myFunction()" id="demo" value="+ Add" style="font-size: 14px;">
                                            </a>
                                          </div>
                                        </div>
                                      </div>
<br><br>
                                      <?php
                          $q_studinfo ="SELECT * FROM track_strand";
                          $q_studinfo_res = $dbc->query($q_studinfo);
                          print ' 
                          <div id="print_content">
                          <div class="panel-body">
                          <div class="responsive-table">
                           <table id="datatables" class="table table-bordered table-hover table-condensed table-reflow" width="100%" cellspacing="0">                        
                          <thead>
                            <tr style="font-size:15px; color:black;">
                              <th class="text-center">Strand Code</th>
                              <th class="text-center">Strand Description</th>
                              <th class="text-center">Action</th>                        
                            </tr>
                          </thead>                          
                          <tbody>';

                          foreach($q_studinfo_res as $item_data){
                          $code = $item_data['description'];
                          $description = $item_data['description2'];
     
                          ?>                  
                          <tr style="font-size: 14px; text-align: center;">
                          <td><?php echo $code; ?></td>
                          <td><?php echo $description; ?></td>

                          <style type="text/css">                           
                          
                                table.table td a.edit {
                                    color: #FFC107;
                                }                                
                                table.table td a.archieved {
                                    color: red;
                                }
                          </style>
                          <td>
                           
                            <!--   Edit Button    -->
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip" id="2"><i class="material-icons">&#xE254;</i>
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
                          </div>
                          </div>';
                        ?>
                                </div>
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