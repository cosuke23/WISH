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
                          <h2 style="float: right;">SHSF-3</h2>
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
                          </div>
                        </div>
                          <?php
                                      //get student info
                                      $lrns=$_GET['lrn'];
                                      $q_studinfo ="SELECT * from student_info where lrn ='$lrns'";
                                      $q_studinfo_res = $dbc->query($q_studinfo);
                                      $studinfo = $q_studinfo_res->fetch_assoc();
                                      $stud_id = $studinfo['lrn'];
                                      $f_name = $studinfo['first_name']; 
                                      $l_name = $studinfo['last_name'];  
                                      $m_name = $studinfo['middle_name'];
                                      
                          ?>
                          <!--    /////    CONTENT     /////   -->
                          <div class="col-md-12">
                                   <h2 style="color: black; text-align: center;">Add Books</h2>
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
                          <form action="submit_form3.php" method="POST" >        
                           <div class="col-md-12">
                                     <h3>Student Information</h3>
                                        <div class="col-md-12" >
                                           <input type="text" value="<?php echo $stud_id; ?>" name="lrns" placeholder="LRN" class="info" readonly>
                                           <input type="text"  value="" name="l_name" placeholder="<?php echo $l_name; ?>" class="info" readonly>
                                           <input type="text"  value="" name="f_name" placeholder="<?php echo $f_name; ?>" class="info" readonly>
                                           <input type="text"  value="" name="m_name"placeholder="<?php echo $m_name;?>" class="info" readonly>
                                        </div></br></br></br>
                            </div>

                                  <div class="col-md-12">
                                     <h3>Book Information</h3>
                                        <div class="col-md-12" >
                                             <input type="text" name="book_title" placeholder="Book Title" class="info" required >
                                              <input type="date" name="d_borrowed" placeholder="Date Borrowed" class="info" required>
                                              <input type="date" name="d_returned"placeholder="Date Returned" class="info">
                                              <input type="text" name="remarks" value="Pending" class="info" readonly>
                                        </div></br></br></br>
                                  </div>

                                   <div class="col-md-12">
                                      
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
                                            <a href="sf3_view.php

                                            ">
                                             <input type="submit" name="submit" class="button"  onclick="myFunction()" id="demo" value="Add" style="font-size: 14px;">
                                            </a>
                                          </div>
                                        </div>
                                      </div>

                                      <?php

                                      $id=$_GET['lrn'];
                          $q_studinfo ="SELECT student_info.lrn, student_info.ts_id, student_info.s_year, student_info.last_name,student_info.first_name,student_info.middle_name, (books.lrn) AS bk_lrn, books.book_title, books.date_issued, books.date_returned, books.remarks FROM `student_info` LEFT JOIN books on books.lrn=student_info.lrn WHERE student_info.ts_id=1 AND student_info.s_year=11 AND books.book_title!='' AND student_info.lrn='$id' group by books.date_returned asc";
                          $date=date('Y-m-d');

                          $q_studinfo_res = $dbc->query($q_studinfo);
                          print '<div class="panel-body">
                          <div class="responsive-table">
                           <table id="datatables"  class="table table-bordered table-hover table-condensed table-reflow" width="100%" cellspacing="0">
                          <thead>
                            <tr style="font-size:15px; color:black;">
                              <th class="text-center">Book Title</th>  
                              <th class="text-center">Date Issued</th>   
                              <th class="text-center">Date Returned</th>   
                              <th class="text-center">Remarks</th>   
                              <th class="text-center">Action</th>                     
                            </tr>
                          </thead>
                          <tbody>';
                          foreach($q_studinfo_res as $item_data){
                          $lrns = $item_data['lrn'];
                          $lname = $item_data['last_name'];
                          $fname = $item_data['first_name'];
                          $mname = $item_data['middle_name'];
                          $title = $item_data['book_title'];
                          $dateissued = $item_data['date_issued'];
                          $datereturned = $item_data['date_returned'];
                          $remarks = $item_data['remarks'];
                          ?>                  
              
                          <tr style="font-size: 14px;">
                          
                          <td><?php echo $title; ?></td>
                          <td><?php echo $dateissued; ?></td> 
                             <?php if($date==$datereturned||$date>=$datereturned){ ?> 
                          <td style="color:red;"><?php echo $datereturned; ?></td>
                            <?php
                            }else{
                            ?>
                          <td><?php echo $datereturned; ?></td>
                            <?php
                            }
                            ?>
                          <td><?php echo $remarks; ?></td>

                          <style type="text/css">
                                table.table td a.edit 
                                {
                                    color: #FFC107;
                                }
                          </style>
                          <td>
                            <!--   Edit Button    -->
                            <a href="sf3_edit_books.php?lrn=<?php echo $lrns; ?>" class="edit" title="Edit" data-toggle="tooltip" id="2"><i class="material-icons">&#xE254;</i>
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
</form>
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