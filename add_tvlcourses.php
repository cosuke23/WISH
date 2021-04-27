<?php
	include('db.php');
	require 'assets/connection/mysqli_dbconnection.php';
if(isset($_POST['submit'])){
	$subj_code=$_POST['subjcode'];
	$subj_desc=$_POST['subjdesc'];
	$days=$_POST['days'];
	$time_in_out=$_POST['time_in_out'];
	$days=$_POST['days'];
	$course_strand=$_POST['tsid'];
	$s_year=$_POST['s_year'];
  
			$sql=mysqli_query($conn,"INSERT INTO tvl_courses(subj_code, subj_desc, strand, time_in_out, days, course_strand, s_year) VALUES ('$subj_code','$subj_desc','$strand','$time_in_out','$days','$course_strand','$s_year') ") or die(mysqli_error());
                             //         $s_year = $studinfo['s_year'];

					header("Location:add_strand.php");

}
?>