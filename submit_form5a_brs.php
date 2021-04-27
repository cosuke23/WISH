<?php
	include('db.php');

	$full_name=$_POST['full_name'];
	$lrn=$_POST['lrn'];
	$subject=$_POST['subject'];
	$semester=$_POST['semester'];
	$year=$_POST['year'];
	$brs=$_POST['brs'];

			$sql=mysqli_query($conn,"INSERT INTO semester_sy_status(back_subjects, semester_status, sy_status, id, lrn) VALUES ('$subject', '$semester', '$year', '','$full_name') ") or die(mysqli_error());

				header("Location:$brs.php");
?>
