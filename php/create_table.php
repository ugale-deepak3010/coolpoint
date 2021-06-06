<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php
session_start();
?>
</head>

<body>
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db_name="dept";
	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $db_name);
	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	
	
	CREATE TABLE student_login(
		id VARCHAR(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,
		password VARCHAR(30) NOT NULL,
		date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	) 
	$conn->close();
	?>
</body>
</html>