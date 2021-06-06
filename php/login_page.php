<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php
session_start();
?>
</head>

<body><center> 
	<form action="login_page.php" method="post">
		<input type="text" placeholder="email" value="" name="email" required/></br></br>
	<input type="password" placeholder="password" value="" name="password" required/></br></br>
<input type="submit" value="Login" name="submit"/>
	</form></center> 
<?php
session_start();
//if(isset($_SESSION['email'])){
include_once'database.php';
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
		$sql="select * from student_login where email='".$email."'and password='".$password."'";
		$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
		//echo"Login successfully";
		header("location:index.php");
	}
	else{
echo"Wrong credential....";
}
	 mysqli_close($conn);
}
//}else{echo"not login";}
session_destroy();
?>
</body>
</html>