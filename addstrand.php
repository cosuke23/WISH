<?php
	include('db.php');
	require 'assets/connection/mysqli_dbconnection.php';
if(isset($_POST['submit'])){
	$new_tsid=$_POST['new_tsid'];
	$subj_code=$_POST['strand'];
	$subj_desc=$_POST['subjcode'];
  
			$sql=mysqli_query($conn,"INSERT INTO track_strand(ts_id, description, description2, year1, year2) VALUES ('$new_tsid','$subj_code','$subj_desc','11','12') ") or die(mysqli_error());
                             //         $s_year = $studinfo['s_year'];

					header("Location:add_strand.php");

}
?>