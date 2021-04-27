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
                          <h2 style="float: left;">School Personnel Basic Profile and Assignment for SHS</h2>
                          <h2 style="float: right;">SHSF-7</h2>
                        </div>
                    </ul>
                    <!--      GRADE      -->
                      <ul id="tabs-demo3" class="nav nav-tabs nav-tabs-v3" role="tablist">
                      
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
                         $em_id=$_GET['emid'];
                          $q_studinfo ="SELECT * from teachers_table where emid ='$em_id'";
                          $q_studinfo_res = $dbc->query($q_studinfo);
                          $studinfo = $q_studinfo_res->fetch_assoc();
                          $em_id = $studinfo['emid'];
                          $f_name = $studinfo['first_name']; 
                          $l_name = $studinfo['last_name'];  
                          $m_name = $studinfo['middle_name'];
                          $gender = $studinfo['gender'];   
                          $classes = $studinfo['class'];   
                          $fund= $studinfo['f_source']; 
                          $pos = $studinfo['pos_desig'];    
                          $em = $studinfo['em_status'];       
                          $deg = $studinfo['deg_post'];          
                          $major = $studinfo['m_s_training'];          
                          $minor = $studinfo['minor'];          
                        ?>
                        <form action="sf7_edit_form.php" method="POST"></br>
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
                             <h3>Peronnal Information</h3>
                                        <div class="col-md-12" >
                                              <input type="text" name="l_name" value="<?php echo $l_name?>" class="info" required >
                                              <input type="text" name="f_name" value="<?php echo $f_name?>" class="info" required>
                                              <input type="text" name="m_name" value="<?php echo $m_name?>" class="info">
                                              <select name="gender" class="info" required>
                                                <option value="Male"><?php echo $gender; ?></option>
                                                 <option value="Male">Male</option>
                                                 <option value="Female">Female</option>
                                              </select>
                                         </div> </br>
                                      <h3>Work Information</h3>
                                          <div class="col-md-12" >
                                              <input type="number" name="em_id" value="<?php echo $em_id?>" class="info" required>
                                              <input type="text" name="classes" value="<?php echo $classes ?>" class="info" required>
                                              <input type="text" name="fund" value="<?php echo $fund ?>" class="info" required>
                                              <input type="text" name="position_designation" value="<?php echo $pos?>" class="info" required>
                                              <input type="text" name="employment_status" value="<?php echo $em?>" class="info"required>
                                              <input type="text" name="deg_pos" value="<?php echo $deg?>" class="info" required>
                                              <input type="text" name="major" value="<?php echo $major?>" class="info">
                                              <input type="text" name="minor" value="<?php echo $minor?>" class="info">
                                          </div>
                              </div>  
                              </div>        
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
                    <a href="view_items.php">
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