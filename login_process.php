<?php
// Start the session..
session_start();

// require the sql connection..
require 'assets/connection/mysqli_dbconnection.php';
include('db.php');
date_default_timezone_set("Asia/Manila");
$date_today =  date("Y-m-d");

//Show all possible problems..
//error_reporting(E_ALL | E_STRICT);
if(isset($_POST['btn-login']))
	{
		$user =$_POST['user'];
		$pass =$_POST['pass'];
	//	$password_final = crypt($password_pre, '$2a$12$xyYidadDvFewdFQZFIcDDs');
		$user_query = mysqli_query($conn,"SELECT * from admin where username = '$user' and password = '$pass'")or die(mysql_error());
		$user_row = mysqli_fetch_array($user_query);
		$num_rows= mysqli_num_rows($user_query);
				if($num_rows != 0) 
				{
					/*FOR ADMIN LOGIN*/
					if($user_row['user_level']==1)
					{
						$_SESSION['id']=$user_row['user_id'];
						setcookie('sid',$user_row['user_id'],time() + 86400);
						echo 'ok';
						header("Location: e2e_home.php");
			//			exit;
					}
					/*FOR TEACHER LOGIN*/
					else if ($user_row['user_level']==2)
					{
					$_SESSION['id']=$user_row['id'];
						setcookie('sid',$user_row['id'],time() + 86400);
						header("Location: teacher/view_items.php?ts_id=1&&s_year=11");
						exit;
					}
					/*FOR STUDENT LOGIN*/
					else if ($user_row['uuser_level']==3)
					{
					$_SESSION['id']=$user_row['id'];
						setcookie('sid',$user_row['id'],time() + 86400);
						header("Location: ");
						exit;
					}
					/*FOR RECEPTIONIST LOGIN*/
					else if ($user_row['user_level']==4)
					{
					$_SESSION['id']=$user_row['id'];
						setcookie('sid',$user_row['id'],time() + 86400);
						header("Location: receptionist/view_items.php?ts_id=1&&s_year=11");
						exit;
					}
					/*FOR REGISTRAR LOGIN*/
					else if ($user_row['user_level']==5)
					{
					$_SESSION['id']=$user_row['id'];
						setcookie('sid',$user_row['id'],time() + 86400);
						header("Location: registrar/sf_forms.php ");
						exit;
					}
					/*FOR NURSE LOGIN*/
					else if ($user_row['user_level']==6)
					{
					$_SESSION['id']=$user_row['id'];
						setcookie('sid',$user_row['id'],time() + 86400);
						header("Location: nurse/sf8_view.php?ts_id=1&&s_year=11");
						exit;
					}
					/*FOR LIBRARIAN LOGIN*/
					else if ($user_row['user_level']==7)
					{
					$_SESSION['id']=$user_row['id'];
						setcookie('sid',$user_row['id'],time() + 86400);
						header("Location: librarian/sf3_view.php?ts_id=1&&s_year=11");
						exit;
					}

				}
				else
				{
					header("Location: login.php?stud_no=$stud_no&error=13");
					exit;
				}
	
	}
	else{
		header("Location: login.php?stud_no=$stud_no&error=11");
					exit;
	}
?>
