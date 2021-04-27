<?php
	include('db.php');

	$lrns=$_POST['lrns'];
	$tsid=$_POST['tsid'];
	$syear=$_POST['syear'];
	$lname=$_POST['l_name'];
	$fname=$_POST['f_name'];
	$mname=$_POST['m_name'];
	$gender=$_POST['gender'];
	$bday=$_POST['bday'];
	$religion=$_POST['religion'];
	$hnumber=$_POST['hnumber'];
	$street=$_POST['street'];
	$barangay=$_POST['barangay'];
	$municipality=$_POST['municipality'];
	$province=$_POST['province'];
	$father=$_POST['father'];
	$mother=$_POST['mother'];
	$guardian=$_POST['guardian'];
	$relation=$_POST['relation'];
	$cnum=$_POST['cnumber'];
	$remarks=$_POST['remarks'];


	$sql_check= mysqli_query($conn,"SELECT * from student_info where lrn='$lrns'")or die(mysqli_error());
	$num_rows= mysqli_num_rows($sql_check);
		if($num_rows!=1){
			$sql=mysqli_query($conn,"INSERT INTO student_info(lrn, ts_id, s_year, last_name, first_name, middle_name, gender, birthday, religion, house_number, street, barangay, municipality_city, province, fathers_name, mothers_name, guardian_name, relation, contact_number, remarks) VALUES ('$lrns','$tsid','$syear','$lname','$fname','$mname','$gender','$bday','$religion','$hnumber','$street','$barangay','$municipality','$province','$father','$mother','$guardian','$relation','$cnum','$remarks')") or die(mysqli_error());

			$sql_admin=mysqli_query($conn,"INSERT INTO admin(user_level, username, password, full_name) VALUES ('3','$lrns','$mname','$fname')") or die(mysqli_error());

					header("Location:view_items.php?ts_id=$tsid&&s_year=11");
					exit;
					} else{
						?>
					<script type="text/javascript">
						alert('Student LRN already exist!');
					</script>
				<?php
					header("Location:view_items?ts_id=$tsid&&s_year=11.php");
			}
			?>
