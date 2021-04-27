<?php
	include('db.php');


	$lrns=$_GET['lrn'];
	if(isset($_GET["lrn"]))  
 { 

	$sql=mysqli_query($conn,"DELETE FROM `student_info` WHERE lrn='$lrns'");

	?>
      <script type="text/javascript">
        window.alert('Student Successfully Deleted');
        header("Location: view_items.php");
        </script>
        <?php
   
          if($sql==true )
		{
			$query_dtr_del="DELETE FROM `student_info` WHERE lrn='$lrns'";
			$result_order=mysqli_query($conn, $query_dtr_del);
		//	alert("student deleted");
			header("Location:view_items.php");
			exit;
		}
		else
		{
			echo "ERROR: query_reject";
			exit;
		}  
 }
?>
  
