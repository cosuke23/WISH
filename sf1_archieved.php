<?php
	include('db.php');


	$lrns=$_GET['lrn'];
	if(isset($_GET["lrn"]))  
 { 
 	$sql_stud=mysqli_query($conn,"SELECT * FROM `student_info` WHERE lrn='$lrns'")or die(mysql_error());
 	$row=mysqli_fetch_array($sql_stud);
 	$lrn=$row['lrn']; 	
 	$ts_id=$row['ts_id'];
 	$s_year=$row['s_year'];
 	$last_name=$row['last_name'];
 	$first_name=$row['first_name']; 	
 	$middle_name=$row['middle_name'];
 	$gender=$row['gender'];
 	$birthday=$row['birthday'];
 	$religion=$row['religion']; 	
 	$house_number=$row['house_number'];
 	$street=$row['street'];
 	$barangay=$row['barangay']; 	
 	$municipality_city=$row['municipality_city'];
 	$province=$row['province'];
 	$fathers_name=$row['fathers_name'];
 	$mothers_name=$row['mothers_name'];
 	$guardian_name=$row['guardian_name'];
 	$relation=$row['relation'];
 	$contact_number=$row['contact_number'];
 	$remarks=$row['remarks'];


$date=date('Y-m-d H:i:s');
 	$sql_stud=mysqli_query($conn,"INSERT INTO `student_archieve`(`lrn`, `stud_lrn`, `ts_id`, `s_year`, `last_name`, `first_name`, `middle_name`, `gender`, `birthday`, `religion`, `house_number`, `street`, `barangay`, `municipality_city`, `province`, `fathers_name`, `mothers_name`, `guardian_name`, `relation`, `contact_number`, `remarks`, `date`) VALUES('','$lrn','$ts_id','$s_year','$last_name','$first_name','$middle_name','$gender','$birthday','$religion','$house_number','$street','$barangay','$municipality_city','$province','$fathers_name','$mothers_name','$guardian_name','$relation','$contact_number','$remarks','$date')")or die(mysqli_error());

	$sql=mysqli_query($conn,"DELETE FROM `student_info` WHERE lrn='$lrns'");

	?>
    
        <?php
   
          if($sql==true )
		{
			$query_dtr_del="DELETE FROM `student_info` WHERE lrn='$lrns'";
			$result_order=mysqli_query($conn, $query_dtr_del);
		//	alert("student deleted");
			header("Location:view_items.php?ts_id=$ts_id&&s_year=11");
			exit;
		}
		else
		{
			echo "ERROR: query_reject";
			exit;
		}  
 }
?>
  
