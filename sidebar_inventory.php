   

   <div class="profile-v1-pp" >         
        <div class="profile-v1-pp" style="text-align: center;">         
    
            <p class="centered"><img src="assets/img/pics/icc/user.png" style="height:200px; margin-top: 20px;"></p>
             <h5 class="centered" style="color: red;"><strong> > <?php echo $studname; ?> </strong></h5>
               <h6 class="centered" style="color:#ffffff"><?php echo $title; ?></h6>
                <div class="panel panel-default">
                  <div class="panel-body"><h5>&nbsp;  <?php
          
//get student info
//$q_studinfo ="SELECT * from admin where id='$stud_no'";
//$q_studinfo_res = $dbc->query($q_studinfo);
//$studinfo = $q_studinfo_res->fetch_assoc();
//$studname= $studinfo['username']. ' ' .$studinfo['name'];
// echo $studname ?>&nbsp;</h5>
                  </div> 
                     <div class="panel-footer" align="center" style="color: white; background: url('assets/img/left-bg.png'); margin-top: -72px;"><strong>Administrator</strong></div>
                </div>
        </div>
      
    </div>
  <div class="nav-side-menu" class="dropdown">
                        <label>
                          <a href="home.php" style="color: black;">
                          <i class="glyphicon glyphicon-dashboard" style="color: black;"></i> Dashboard</a>
                        </label>
                        <br>
                        <label >
                          <a href="home.php" style="color: black;"  >
                          <i class="glyphicon glyphicon-print" style="color: black;" class="dropbtn"></i><span>Print School Forms</span></a>
                          <!-- ADD DROP DOWN CHOICES FOR PRINT -->
                          
                        </label>
                        <br>
                        <label>
                          <a href="home.php" style="color: black;">
                          <i class="glyphicon glyphicon-envelope" style="color: black;"></i> Messages</a>
                        </label>
                        <br>
                        <!--
                        <label>
                          <a href="add_subject.php" style="color: black;">
                            <i class="glyphicon glyphicon-plus" style="color: black;"></i> Add Subject</a>
                        </label><br>-->                         
					             	<label>
                          <a href="logout.php" style="color: red;">
                          <i class="glyphicon fa fa-power-off" style="color: red;"></i>Logout</a>
                        </label><br>

  </div>

   