<?php
  include('db.php');



  if(isset($_POST["submit"]))  
 { 

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

  $update_sql=mysqli_query($conn, "UPDATE `student_info` SET lrn='$lrns',ts_id='$tsid',s_year='$syear',last_name='$lname',first_name='$fname',middle_name='$mname',gender='$gender',birthday='$bday',religion='$religion',house_number='$hnumber',street='$street',barangay='$barangay',municipality_city='$municipality',province='$province',fathers_name='$father',mothers_name='$mother',guardian_name='$guardian',relation='$relation',contact_number='$cnum',remarks='$remarks' WHERE lrn='$lrns'");
  ?>
      <script type="text/javascript">
        window.alert('Student Successfully Deleted');
        header("Location: view_items.php?ts_id=1&&s_year=11");
        </script>
        <?php
   
          if($update_sql==true )
    {
      $query_dtr_del="UPDATE `student_info` SET lrn='$lrns',ts_id='$tsid',syear='$syear',last_name='$lname',first_name='$fname',middle_name='$mname',gender='$gender',birthday='$bday',religion='$religion',house_number='$hnumber',street='$street',barangay='$barangay',municipality_city='$municipality',province='$province',fathers_name='$father',mothers_name='$mother',guardian_name='$guardian',relation='$relation',contact_number='$cnum',remarks='$remarks' WHERE lrn='$lrns'";
      $result_order=mysqli_query($conn, $query_dtr_del);
    //  alert("student deleted");
      header("Location:view_items.php?ts_id=1&&s_year=11");
      exit;
    }
    else
    {
      echo "ERROR: query_reject";
      exit;
    }  
 }
?>
  
