<?php
	include('db.php');
	require 'assets/connection/mysqli_dbconnection.php';
	$lrn=$_POST['lrn'];
	$s_year=$_POST['s_year'];
	$semester_status=$_POST['semester_status'];
	$back_subjects=$_POST['subject'];
	
			$sql=mysqli_query($conn,"UPDATE semester_sy_status SET semester_status='$semester_status' WHERE lrn='$lrn' AND back_subjects='$back_subjects'") or die(mysqli_error());
			$q_studinfo = "SELECT * from student_info where lrn ='$lrn'";
                                      $q_studinfo_res = $dbc->query($q_studinfo);
                                      $studinfo = $q_studinfo_res->fetch_assoc();
                                      $ts_id = $studinfo['ts_id'];
                             //         $s_year = $studinfo['s_year'];

				if($s_year==11){
			header("Location:sf5a_view.php?ts_id=$ts_id&&s_year=$s_year");
				} 
					else {
					header("Location:sf5a_view12.php?ts_id=$ts_id&&s_year=$s_year");
				}
?>
