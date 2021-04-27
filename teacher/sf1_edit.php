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
                        <div class="wrappers">
                          <button class="btn-change"><a href="view_items.php" style="text-decoration: none; color: white;"><strong>ICT</strong></a></button>
                         <button class="btn-change"><a href="sf1_view_abm.php" style="text-decoration: none; color: white;"><strong>ABM</strong></a></button>
                         <button class="btn-change"><a href="sf1_view_brs.php" style="text-decoration: none; color: white;"><strong>BRS</strong></a></button>
                         <button class="btn-change"><a href="sf1_view_hos.php" style="text-decoration: none; color: white;"><strong>HOS</strong></a></button>
                         <button class="btn-change"><a href="sf1_view_humms.php" style="text-decoration: none; color: white;"><strong>HUMMS</strong></a></button>
                        </div>

                        <div>
                          <h2 style="float: right; color: black;">Teacher Dashboard</h2>
                        </div>
                    </ul>
                    <!--      GRADE      -->
                      <ul id="tabs-demo3" class="nav nav-tabs nav-tabs-v3" role="tablist">
                        <li role="presentation" class="active">
                          <a href="view_items.php" aria-expanded="true" style="padding-right: 30px; font-size: 18px;"><span class="glyphicon glyphicon-user"></span> ICT 11</a>
                        </li>
                         
                        <li role="presentation" class="">
                          <a href="sf1_view_ict12.php" aria-expanded="true" style="padding-right: 30px; font-size: 18px;"><span class="glyphicon glyphicon-user"></span> ICT 12 </a>
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
                          $remarks = $studinfo['remarks'];
                          /*
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
                            
                          */             
                        ?>
                        <form action="grade.php" method="POST"></br>
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
                              <h3>Student Information</h3>
                          </div>
                              <label>Student No.:</label>
                                <input type="text" value="<?php echo $stud_id; ?>" name="lrns" placeholder="LRN" class="info" readonly>
                                <label>Strand:</label>
                                <?php if ($tsid==1 )
                                    {
                                ?>  
                                <input type="text" name="tsid" value="ICT" readonly>
                                  <?php
                            }else if($tsid==2){
                               ?>
                              <input type="text" name="tsid" value="BRS" readonly> 
                               <?php
                               }else if($tsid==3){
                               ?>
                              <input type="text" name="tsid" value="HOS" readonly>

                              <?php
                               }else if($tsid==4){
                               ?>
                              <input type="text" name="tsid" value="ABM" readonly>
                              <?php
                               }else{
                               ?>
                              <input type="text" name="tsid" value="HUMMS" readonly> 
                              <?php
                            }
                            ?>
                                <label>Year:</label>
                                <input type="text" name="syear" value="<?php echo $syear; ?>" placeholder="Year Level" class="info" readonly>
                                <label>Remarks:</label>
                                <input type="text"  value="<?php echo $remarks; ?>" name="remarks" placeholder="Remarks" class="info" readonly>
                                <label>Student Name:</label>
                                <input type="text" name="name" value="<?php echo $l_name; ?>, <?php echo $f_name; ?>, <?php echo $m_name; ?>" placeholder="Student Name" class="info" readonly>
                          </div>
                        </br></br>
                  </div>
                  
                   <hr>
   <div class="row" style="margin-top: 20px;">
   <div class="col-lg-3 col-md-3 col-sm-12">
        <form method="post" action="sf1_edit.php">
          <h3 style="color: black;">Input Learner Grade</h3> 
            <hr>    
            <input type="hidden" name="id" value="<?php echo $id;?>">
            
    <div class="form-group">
      <label style="color: black;">Subject Code</label>
      <input type="text" class="form-control" value="" name="subj_code" placeholder="Enter Subject Code" required>
    </div>
    
    <div class="form-group">
      <label style="color: black;">Grade</label>
      <input type="text" class="form-control" value="" name="f_grad" placeholder="Enter Grade" required>
    </div>
  </br>
  <button type="submit" name="update" class="btn btn-success" style="float: right;">Save</button>
            
</form>
        </div>
        
        <div class="col-lg-9 col-md-9 col-sm-12">
          
            <table class="table table-responsive table-hover">
   <thead style="background-color: #3282b8; color: white;">
      <tr>
         <th style="text-align: center;">Subject Code</th>
         <th style="text-align: center;">Description</th>
         <th style="text-align: center;">Grade</th>
          <th colspan="2"  style="text-align: center;">Manage</th>
      </tr>
   </thead>
                
   <tbody>
       
       <?php 
       $sql_check= mysqli_query($conn,"SELECT * FROM tbl_grade ")or die(mysqli_error());


       while($row=$sql_check->fetch_array()):?>
      
      <tr>
         
         <td style="text-align: center;"><?php echo $row['subj_code'];?></td>
         <td style="text-align: center;"><?php echo $row['subj_desc'];?></td>
         <td style="text-align: center;"><?php echo $row['f_grad'];?></td>
         <td>
          <a href="#" class="btn btn-warning">Edit</a>
              <a href="#" class="btn btn-danger">Delete</a>
         <!--
         <a href="index.php?edit=<?php echo $row['id'];?>" class="btn btn-warning">Edit</a>
              <a href="process.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
          -->

          </td>
      </tr>
      <?php endwhile; ?>
   </tbody>
                
                
</table>
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

<!-- end: Javascript -->
</body>
</html>