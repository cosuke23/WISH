<?php
	include('db.php');
	require 'assets/connection/mysqli_dbconnection.php';
	$full_name=$_POST['full_name'];
	$lrn=$_POST['lrn'];
	$status=$_POST['status'];
	$nc=$_POST['nc'];
	$level=$_POST['level'];

			$sql=mysqli_query($conn,"INSERT INTO nc_table(lrn, completed_shs_status, description, level) VALUES ('$full_name','$status','$nc','$level') ") or die(mysqli_error());
			$q_studinfo = "SELECT * from student_info where lrn ='$lrn'";
                                      $q_studinfo_res = $dbc->query($q_studinfo);
                                      $studinfo = $q_studinfo_res->fetch_assoc();
                                      $ts_id = $studinfo['ts_id'];

				if($syear==11){
			header("Location:sf5b_view.php?ts_id=$ts_id&&s_year=11");
				} 
					else {
					header("Location:sf5b_view12.php?ts_id=$ts_id&&s_year=12");
				}
?>
