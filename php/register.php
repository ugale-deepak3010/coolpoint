<?php
/*
if(isset($_POST["submit"]))
{
//header('Location:loginafter.php');
}else{}

$username=filter_input(INPUT_POST,'username');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
$phone=filter_input(INPUT_POST,'phone');
if(!empty($username)){
if(!empty($password)){
	if(!empty($email)){
	    if(!empty($phone)){
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="profile";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
	}
	else{
		
		$sql2="select email from register where email='$email'";
		$query=mysqli_query($conn,$sql2);
	if(mysqli_num_rows($query)!==0){
		echo"email already exist";
		//header("Location: ../register.php");
	}
	else{	
	$sql="INSERT INTO register(username,email,phone,password) VALUES ('$username','$email','$phone','$password')";
	echo"connection not error";
	if($conn->query($sql))
	{
		echo "NEW RECORD IS INSERTED SUCCESSFULLY";
		header("Location: ../login.php");
	}
	else{
		//echo "Phone Number is Already Exist";
		echo "Error:".sql."<br>".$conn->error;
		}
		$conn->close();
	
	}
	}
}
}
}
}
*/

$username1=$_POST['username'];
$email1=$_POST['email'];
$password1=$_POST['password'];
$phone1=$_POST['phone'];

include('database.php');
$sql_register="INSERT INTO register(username,email,phone,password) VALUES ('$username1','$email1','$phone1','$password1')";
//$conn->query($sql_register);
if(mysqli_query($conn,$sql_register)){
	//echo "SUCCESSFULLY";
	header('location:../login.php');
}else{
	echo $sql_register;
	echo "sql error";
	echo "Error:".sql."<br>".$conn->error;
	echo $phone1;
}
?>