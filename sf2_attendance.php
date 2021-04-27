<?php
  include('db.php');

  $lrns=$_POST['lrn'];
  $subj_code=$_POST['subj_code'];
  $time_in_out=$_POST['time'];
  $status=$_POST['status'];
  $date=$_POST['attendance'];
  $remarks=$_POST['remarks'];  
  $ts_id=$_POST['ts_id'];

  $sql_check_attendance= mysqli_query($conn,"SELECT * from attendance_report where date_now='$date'")or die(mysqli_error());

  $num_rows= mysqli_num_rows($sql_check_attendance);
		if($num_rows!=1){
	$sql=mysqli_query($conn,"INSERT INTO attendance_report( LRN, ts_id, date_now, subj_code, time_in_out, status, remarks) VALUES ('$lrns','$ts_id','$date','$subj_code','$time_in_out','$status','$remarks'") or die(mysqli_error());

						header("Location:sf2_view.php?ts_id=1&&s_year=11");
					exit;
					} else{
						?>
					<script type="text/javascript">
						alert('Successfully Updated');
					</script>

				<?php
					header("Location:sf2_view.php?ts_id=1&&s_year=11");
			}
			?>

