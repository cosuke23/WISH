<?php
	include('db.php');


	$lrns=$_GET['emid'];
	if(isset($_GET["emid"]))  
 { 
 	$sql_stud=mysqli_query($conn,"SELECT * FROM `teachers_table` WHERE emid='$emid'")or die(mysql_error());
 	$row=mysqli_fetch_array($sql_stud);
 	$emid=$row['emid']; 
 	$last_name=$row['last_name'];
 	$first_name=$row['first_name']; 	
 	$middle_name=$row['middle_name'];
 	$gender=$row['gender'];
 	$class=$row['class'];	
 	$f_source=$row['f_source'];
 	$em_status=$row['em_status']; 	
 	$deg_post=$row['deg_post'];
 	$province=$row['province'];
 	$m_s_training=$row['m_s_training'];
 	$minor=$row['minor'];


$date=date('Y-m-d H:i:s');
 	$sql_stud=mysqli_query($conn,"INSERT INTO teachers_table(emid, last_name, first_name, middle_name, class, gender, f_source, pos_desig, em_status, deg_post, m_s_training, minor) VALUES ('$emid','$last_name','$first_name','$middle_name','$class','$gender','$f_source','$pos_desig','$em_status','$deg_post','$m_s_training','$minor')")or die(mysqli_error());

	$sql=mysqli_query($conn,"DELETE FROM `teachers_table` WHERE emid='$emid'");

	?>
      <script type="text/javascript">
        window.alert('Student Successfully Deleted');
        header("Location: sf7_view.php");
        </script>
        <?php
   
          if($sql==true )
		{
			$query_dtr_del="DELETE FROM `teachers_table` WHERE emid='$emid'";
			$result_order=mysqli_query($conn, $query_dtr_del);
		//	alert("student deleted");
			header("Location:sf7_view.php");
			exit;
		}
		else
		{
			echo "ERROR: query_reject";
			exit;
		}  
 }
?>
  
