<?php 
echo "Hello";
include('php/database.php');
//$product=$_GET['product'];
$product=7003;
$sql_product="select product_name,product_img,product_price,product_desc,product_id where product_id=$product";
$result = $conn->query($sql_product);

    while($row = mysqli_fetch_array($result)) {
         $product_name=$row['product_name'];
         $product_img=$row['product_img'];
         $product_price=$row['product_price'];
         $product_desc=$row['product_desc'];
    }
?>