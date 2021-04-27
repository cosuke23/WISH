<?php
	include('db.php');
	$strand = $_GET['ts_id'];
	$lrns=$_POST['lrns'];
	$lname=$_POST['l_name'];
	$fname=$_POST['f_name'];
	$mname=$_POST['m_name'];
	$bk_title=$_POST['book_title'];
	$d_borrowed=$_POST['d_borrowed'];
	$d_returned=$_POST['d_returned'];
	$remarks=$_POST['remarks'];

			$sql=mysqli_query($conn,"INSERT INTO books(id, lrn, stud_name, book_title, date_issued, date_returned, remarks) VALUES ('','$lrns','$lname', '$bk_title', '$d_borrowed','$d_returned', '$remarks')") or die(mysqli_error());

				header("Location:sf3_edit.php?lrn=<?php echo $lrns; ?>");
?>
