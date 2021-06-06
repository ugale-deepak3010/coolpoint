<?php
session_start();
include('database.php');
$order_person=$_SESSION['email'];

$c="cancel";
$p="price";
$total=0;
if(isset($_POST['checkout'])){
	
	for($start=7001;$start<=7020;$start++){

		$cancel=$c.$start;

		if(isset($_POST[$cancel])){

			echo 'cancelled '.$start.'<br>';
			$sql_cancel_cart="DELETE FROM cart_select WHERE user_cart='$start'";
			if($conn->query($sql_cancel_cart)){echo "delte cart";}else{echo "query error";}

		}else{
			if(isset($_POST[$start])){
				$p_price=$p.$start;
				$product_price=$_POST[$p_price];
				$qnty=$_POST[$start];
				$product_id=$start;
				
				$p_total=$product_price*$qnty;
				$total=$total+$p_total;

				$sql_orders="insert into orders (product_id,product_price,product_qnty,order_person,product_total) values ('$product_id','$product_price','$qnty','$order_person','$p_total')";
										
											if($conn->query($sql_orders)){
												echo "order are placed";
											}else{
												echo "query eror";
											}
			}
		}
		$p_total=0;
	}/* for loop end */
$delivery=10;
$final_total=$total+$delivery;
$sql_total="insert into orders(order_person,final_order_total) values ('$order_person','$final_total')";
if($conn->query($sql_total)){echo "total success..!";}else{echo "total query error";}

}else{
	echo "no checkout";
}
?>