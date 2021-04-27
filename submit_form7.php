<?php
	include('db.php');

	$emid=$_POST['emid'];
	$lname=$_POST['lname'];
	$day=$_POST['day'];
	$start=$_POST['time_start'];
	$end=$_POST['time_end'];
	$subj=$_POST['subj'];
	

	$sql_check= mysqli_query($conn,"SELECT * from teachers_table where emid='$emid'")or die(mysqli_error());
	$num_rows= mysqli_num_rows($sql_check);
	$fetch_array = mysqli_fetch_array($sql_check);
	$fname = $fetch_array['first_name'];
	$mname = $fetch_array['middle_name'];
	$lname = $fetch_array['last_name'];
		if($num_rows!=0){
			$sql=mysqli_query($conn,"INSERT INTO `teachers_table_2`(`em_id`, `subject_advisory`, `grade_and_section`, `day`, `start`, `end`, `total_minutes`, `remarks`) VALUES ('$emid','$subj','Senior High','$day','$start','$end','','')") or die(mysqli_error());

					header("Location:sf7_add_subj.php?emid=$emid");
					exit;
					} else{
						?>
					<script type="text/javascript">
						alert('Student LRN already exist!');
					</script>

					<script type="text/javascript">
						window.alert("Location:sf7_add_subj.php?emid=$emid");
					</script>
				<?php
					header("Location:sf7_add_subj.php?emid=$emid");
			}
			?>
