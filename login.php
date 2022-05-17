<?php
include 'user.php';
$user = new User();
session_start();

if (isset($_REQUEST['submit'])) 
{
	extract($_REQUEST);
	$login = $user->check_login($id,$password);
	if ($login != null) 
	{   
		$user_data = $login->fetch_assoc();

		// Registration Success 
		//echo "<script>alert('Welcome in CSE MESH');</script>";
		if ($_SESSION['role'] == "student")
		{
			$_SESSION['user_id']     = $user_data['student_id'];
			$_SESSION['user_name']   = $user_data['student_name'];
			header("location:home_student.html");
		}

		else if ($_SESSION['role'] == "teacher")
		{
			$_SESSION['user_id']     = $user_data['teacher_id'];
			$_SESSION['user_name']   = $user_data['teacher_name'];
			header("location:home_teacher.htm"); 
		}	
		else if ($_SESSION['role'] == "admin")
		{
			$_SESSION['admin_id']     = $user_data['admin_id'];
			header("location:request.php"); 
		}	
	} 
	
	else 
	{

		echo "<script>alert('Your User ID and/or Password are invalid.');";
	    echo "location='login.htm';</script>";
	}    
}  
?>
