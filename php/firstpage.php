
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<center>
<title>Untitled Document</title>
	<form action="firstpage.php" method="post">
<?php
session_start();
session_unset();
echo $_SESSION['email'];
?>
</head>

	<body ><h1 style="color: #B93336">Student Signup Page</h1>
	<input type="text" value="" placeholder="student name" name="student_name"/></br></br>
	<input type="text" value="" placeholder="email" name="email"/></br></br>
	<input type="text" value="" placeholder="contact number" name="number"/></br></br>
	<input type="password" value="" placeholder="password" name="password"/></br></br>
	<input type="submit" value="Submit" name="submit"/></br></br>
	
</form>

<?php
include_once 'database.php';
if(isset($_POST['submit']))
{	 
	
	/*
	 // Check for existing user with the new id
$sql = "SELECT COUNT(*) FROM student_login WHERE email = '$_POST[email]'";
$result = mysqli_query($conn,$sql);
if (!$result) {
echo'A database error occurred in processing your '.
'submission.\nIf this error persists, please '.
'contact you@example.com.';
}
if(mysqli_result($result,0,0)>0) {
	echo'A user already exists with your chosen userid. Please try another.';
}
	*/
	
	
	
	 $student_name = $_POST['student_name'];
	 $email = $_POST['email'];
	$contact = $_POST['number'];
	 $password = $_POST['password'];
	$sql2="select email from student_login where email='".$email."'";
	$query=mysqli_query($sql2,$conn);
	if(mysqli_num_rows($query)!=0){
		echo"email already exist";
	}
	else{
	if($student_name!=''&$email!=''&$contact!=''&$password!=''){
	$sql = "INSERT INTO student_login (student_name,email,contact,password)
	 VALUES ('$student_name','$email','$contact','$password')";
		 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		 ?>
		 <br><a href="login_page.php" style="border: thick">go to login page </a>
		 <?php
	 } else {
		echo "Error:".mysqli_error($conn);
	 }
	 mysqli_close($conn,$sql);
	} else {
		echo"some fields are blanks";
	}
	}
}
?>

</body>
</center>
</html>