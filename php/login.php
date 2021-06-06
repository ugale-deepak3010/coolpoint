<?php

session_start();
include_once'database.php';
	$email=$_POST['email'];
	$password=$_POST['password'];
		$sql="select * from register where email='".$email."'and password='".$password."'";
		$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
		$_SESSION['email']=$email;
		echo $_SESSION['email'];
		//echo"Login successfully";
		header("location:../index.php");
	}
	else{
echo"<h2>Wrong credential....</h2>";
}
?>