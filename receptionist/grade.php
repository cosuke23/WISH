<?php
	include('db.php');

	$lrns=$_POST['lrns'];
	$tsid=$_POST['tsid'];
	$subj_id=$_POST['subj_id'];
	$em_id=$_POST['em_id'];
	$syear=$_POST['syear'];
	$lname=$_POST['l_name'];
	$fname=$_POST['f_name'];
	$mname=$_POST['m_name'];
	$gender=$_POST['gender'];
	$subj_code=$_POST['subj_code'];
	$subj_desc=$_POST['subj_desc'];
	$f_grad=$_POST['f_grad'];
	$sec_grade=$_POST['sec_grade'];

	$sql_check= mysqli_query($conn,"INSERT INTO `tbl_grade`(`id`, `stud_lrn`, `em_id`, `subj_id`, `subj_code`, `subj_desc`, `f_grad`, `sec_grad`) VALUES ('','$lrns','$em_id','$subj_id','$subj_code','$subj_desc','$f_grad','$sec_grad')")or die(mysqli_error());

	$num_rows= mysqli_num_rows($sql_check);
		if($num_rows!=1){
				header("Location:sf1_edit.php?strand=ICT");
					exit;
					} else{
						?>
					<script type="text/javascript">
						alert('Student LRN already exist!');
					</script>

					<script type="text/javascript">
						window.alert("Location:sf1_add.php?strand=ICT");
					</script>
				<?php
					header("Location:view_items.php?strand=ICT");
			}
			?>
