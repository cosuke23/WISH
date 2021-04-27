<?php
  include('db.php');



  if(isset($_POST["submit"]))  
 { 

  
  $lname=$_POST['l_name'];
  $fname=$_POST['f_name'];
  $mname=$_POST['m_name'];
  $gender=$_POST['gender'];
  $emid=$_POST['em_id'];
  $class=$_POST['classes'];
  $fund=$_POST['fund'];
  $pos=$_POST['position_designation'];
  $employment=$_POST['employment_status'];
  $deg=$_POST['deg_pos'];
  $major=$_POST['major'];
  $minor=$_POST['minor'];

  $update_sql=mysqli_query($conn, "INSERT INTO `teachers_table`(`id`, `emid`, `last_name`, `first_name`, `middle_name`, `class`, `gender`, `f_source`, `pos_desig`, `em_status`, `deg_post`, `m_s_training`, `minor`) VALUES ('','$emid','$lname','$fname','$mname','$class','$gender','$fund','$pos','$employment','$deg','$major','$minor')");
  ?>
        <?php
   
          if($update_sql==true )
    {


      $query_insert_admin="INSERT INTO `admin`(`id`, `username`, `password`, `full_name`) VALUES ('','$emid','$lname','$fname')";
      $result_order=mysqli_query($conn, $query_insert_admin);
    //  alert("student deleted");
      header("Location:sf7_view.php?ts_id=1&&s_year=11");
      exit;
    }
    else
    {
      echo "ERROR: query_reject";
      exit;
    }  
 }
?>
  
