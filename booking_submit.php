<?php
	session_start();

	include 'user.php';
	// include 'appointment.php';

	$user = new User();

	if(isset($_POST['submit']))
	{
		$stdid = $_POST['student_id'];
		$stdname = $_POST['student_name'];
		$course = $_POST['course'];
		$teacher = $_POST['teacher'];
		$date_time = $_POST['date_time'];
		$details = $_POST['details'];
		$sql = $user->stu_appointment($stdid,$stdname,$course,$teacher,$date_time,$details);

		if($sql)
		{
			echo "<script>alert('Office hour is booked successfully');";
	        echo "location='newhome.html';</script>";
		}
		else
		{
			echo "<script>alert('Office hour is not booked successfully!');";
	        echo "location=newhome.html';</script>";
		}
	}
 ?>
