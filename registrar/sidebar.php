  
  <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
            
<p class="centered"><img src="assets/img/pics/icc/300x357.png" style="width:200px;height:250px;" ></p>
              	 
                  <h5 class="centered"><strong><?php echo $studname; ?><strong></h5>
				  <h6 class="centered" style="color:#ffffff"><?php echo $title; ?></h6>
              	  	
                  <li class="mt">
                      <a class="active" href="home.php">
                          <i class="fa fa-home"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <?php
                  if($stud_no=='1'){
                    ?>
				         
                  <?php
                }
                else{?>
                  <li class="sub-menu">
                      <a href="change_picture.php">
                          <i class="fa fa-user"></i>
                          <span>Change Profile</span>
                      </a>
                  </li>
                <?php
              }?> 
				  <li class="sub-menu">
                      <a href="school_forms.php">
                          <i class="fa fa-tasks "></i>
                          <span>School Forms</span>
                      </a>
                  </li>
             <?php
             error_reporting(0);
             require('dbcon.php');
      $q_studinfo ="SELECT * from admin where username='$session_id'";
$q_studinfo_res = $dbc->query($q_studinfo);
$studinfo = $q_studinfo_res->fetch_assoc();
$admin = $studinfo['id'];
if($stud_no==1){
?>
<li class="sub-menu">
                      <a href="admin/calendar_of_events.php">
                          <i class="fa fa-user"></i>
                          <span>List of Instructors</span>
                      </a>
                  </li>
<?php 
      }
      ?>  
                    <li class="sub-menu">
                      <a href="view_items.php">
                          <i class="fa fa-bullhorn"></i>
                          <span>List of Users</span>
                      </a>
                  

                   
                               <?php
      $q_studinfo ="SELECT * from admin where id='$session_id'";
$q_studinfo_res = $dbc->query($q_studinfo);
$studinfo = $q_studinfo_res->fetch_assoc();
$admin = $studinfo['id'];
if($stud_no!=1){
?>
                  <li class="sub-menu">
                      <a href="https://prx2.genmirror.com/browse.php?u=YKcLEA2Ibyp5HbJNC1W6RQ4KGo4%3D&b=7">
                          <i class="fa fa-youtube-square"></i>
                          <span>Youtube</span>
                      </a>
                  </li>
<?php
}
?>

				  <li class="sub-menu">
                      <a href="logout.php">
                          <i class="fa fa-gear"></i>
                          <span>Logout</span>
                      </a>
                  </li>

              </ul>
			  
              <!-- sidebar menu end-->
          </div>
      </aside>