<?php
  include('db.php');



  if(isset($_POST["submit"]))  
 { 

  
  $fgrade=$_POST['fgrade'];
   $fgrade1=$_POST['fgrade1'];
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

  $update_sql=mysqli_query($conn, "INSERT INTO `tbl_grade`( `stud_lrn`, `em_id`, `subj_id`, `subj_code`, `subj_desc`, `f_grad`, `sec_grad`) VALUES ('','','','','','',''");
  ?>
        <?php
   
          if($update_sql==true )
    {


      $query_insert_admin="INSERT INTO `admin`(`id`, `username`, `password`, `full_name`) VALUES ('','$emid','$lname','$fname')";
      $result_order=mysqli_query($conn, $query_insert_admin);
    //  alert("student deleted");
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
  
