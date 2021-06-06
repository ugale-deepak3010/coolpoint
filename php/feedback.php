<?php
if(isset($_POST['feedback']))
{
	include('database.php');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	$sql="INSERT INTO feedback (name,email,subject,message) VALUES('$name','$email','$subject','$message')";
	if($conn->query($sql))
	{
		$feedback_success="mesage is sent";
	}
	else
	{
		$feedback_error="mesage is not sent";
	}
}
?>