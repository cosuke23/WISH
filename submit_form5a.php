<?php
	include('db.php');
	require 'assets/connection/mysqli_dbconnection.php';
	$full_name=$_POST['full_name'];
	$lrn=$_POST['lrn'];
	$subject=$_POST['subject'];
	$semester=$_POST['semester'];
	$year=$_POST['year'];
	$syear=$_POST['syear'];
	$location=$_POST['ict'];

			$sql=mysqli_query($conn,"INSERT INTO semester_sy_status(back_subjects, semester_status, sy_status, id, lrn) VALUES ('$subject', '$semester', '$year', '','$full_name') ") or die(mysqli_error());
			$q_studinfo = "SELECT * from student_info where lrn ='$lrn'";
                                      $q_studinfo_res = $dbc->query($q_studinfo);
                                      $studinfo = $q_studinfo_res->fetch_assoc();
                                      $ts_id = $studinfo['ts_id'];
                             //         $s_year = $studinfo['s_year'];

				if($syear==11){
			header("Location:sf5a_view.php?ts_id=$ts_id&&s_year=$syear");
				} 
					else {
					header("Location:sf5a_view_ict12.php?ts_id=$ts_id&&s_year=$syear");
				}
?>
