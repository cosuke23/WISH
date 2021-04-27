<?php
	include('db.php');


	$lrns=$_GET['lrn'];
	if(isset($_GET["lrn"]))  
 { 
 	$sql_stud=mysqli_query($conn,"SELECT * FROM `student_archieve` WHERE stud_lrn='$lrns'")or die(mysqli_error());
 	$row=mysqli_fetch_array($sql_stud);
 	$lrn=$row['stud_lrn']; 	
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

$num_rows= mysqli_num_rows($sql_stud);
		if($num_rows==1){
 	$sql_insert=mysqli_query($conn,"INSERT INTO student_info(lrn, ts_id, s_year, last_name, first_name, middle_name, gender, birthday, religion, house_number, street, barangay, municipality_city, province, fathers_name, mothers_name, guardian_name, relation, contact_number, remarks) VALUES ('$lrn','$ts_id','$s_year','$last_name','$first_name','$middle_name','$gender','$birthday','$religion','$house_number','$street','$barangay','$municipality_city','$province','$fathers_name','$mothers_name','$guardian_name','$relation','$contact_number','$remarks')")or die(mysqli_error());

	$sql=mysqli_query($conn,"DELETE FROM student_archieve WHERE stud_lrn='$lrns'");
	}
	?>
        <?php   
          if($sql==true )
		{
			if($s_year==11)	{
		//	alert("student deleted");
			header("Location:view_items.php?ts_id=$ts_id&&s_year=$s_year");
			exit;
		} else {
			header("Location:view_items12.php?ts_id=$ts_id&&s_year=$s_year");
			exit;
		}
		}
		
		{
			echo "ERROR: query_reject";
			exit;
		}  
 }
?>
  
