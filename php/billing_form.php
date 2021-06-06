<?php
session_start();
include('database.php');
echo "billing form";
if(isset($_POST['billing_submit'])){

	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$street=$_POST['street'];
	$street2=$_POST['street2'];

	$town=$_POST['town'];
	$comment=$_POST['comment'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	
	/*$delivery=$_POST['delivery'];*/
	
	$order_person=$_SESSION['email'];

	$sql_billing_form="INSERT INTO billing_form(first_name,last_name,street,street2,town,comment,phone,email,order_person) VALUES ('$first_name','$last_name','$street','$street2','$town','$comment','$phone','$email','$order_person') ";

	if($conn->query($sql_billing_form)){
		echo "success";
	}else{echo "Query Error";}

}else{echo "not billing_submit not";}
?>