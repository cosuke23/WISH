<?php
include('db.php');

 session_start(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_COOKIE['sid']))
 { 
 	header("Location: login.php");
 	exit;
 }

 $session_id=$_SESSION['id'];

 $user_query = mysqli_query($conn,"SELECT * FROM admin where id= '$session_id'") or die(mysqli_error());
 $user_row = mysqli_fetch_array($user_query);
 $studname = $user_row['username'].' '.$user_row['full_name'];

 $stud_no = $user_row['id'];
 $title = "";
//$full=$title. ' ' .$user_row['fname']. ' ' .$user_row['lname'];
//$stud_program_id = $user_row['usertype'];
?>