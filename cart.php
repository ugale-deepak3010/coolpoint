<!DOCTYPE html>
<html lang="en">
  <head>
    <title>coolpoint</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="images/icon18.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  <?php
  error_reporting(0);
session_start();
?>
</head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 91 9988774422</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">coolpoint.aurangabad@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">30 min to 1 hour delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Cool Point</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
              <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
              <li class="nav-item"><a href="checkout.php" class="nav-link">Checkout</a></li>
            <li class="nav-item "><a href="about.php" class="nav-link active">About</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span></li>
              <li class="nav-item"><a href="php/logout.php" class="nav-link">Logout</a></li>
          </ul>
        </div>
        
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php"></a></span> <span></span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>
    <form method="post" action="checkout.php">
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">

						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>Cancel&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<!--***********   for inserting cart   *************-->
						    	<?php
								include('php/database.php');
								$product_get=$_GET[product];
								$user=$_SESSION['email'];

								
								for($start=7001;$start<=7020;$start++){
									if($product_get==$start){
										$sqlCart="insert into cart_select (user_email,user_cart) values ('$user','$start')";
										
											if($conn->query($sqlCart)){
												/*echo "cart added";*/
												}else{/*echo "Noooooooooo";*/}
									}else{/*echo 'not selected'.$start;*/}
								}
								?>
								<!--**************		for display selected cart		**********-->
								<?php 

								$sqlCartGet="SELECT user_email,user_cart from cart_select where user_email='$user'";
								
								if($res=mysqli_query($conn,$sqlCartGet)){
									if(mysqli_num_rows($res)>0){
										while($row=mysqli_fetch_array($res)){
											$user_cart=$row['user_cart'];
											/*cart found */

											$sql_product_info="SELECT product_name,product_img,product_price,product_desc FROM product_detail WHERE product_id='$user_cart'";

											if($res2=mysqli_query($conn,$sql_product_info)){
									if(mysqli_num_rows($res2)>0){
										while($row2=mysqli_fetch_array($res2)){
											//$user_cart=$row['user_cart'];

													$product_name=$row2['product_name'];
													$product_img=$row2['product_img'];
													$product_price=$row2['product_price'];
													$product_desc=$row2['product_desc'];

													echo "<!-- selected product-->
						      <tr class='text-center'>
						        <td class='product-remove'><a><span><input type='checkbox' name='cancel$user_cart'></span></a></td>
						        
						        <td class='image-prod'><div class='img' style='background-image:url(images/$product_img);'></div></td>
						        
						        <td class='product-name'>
						        	<h3>$product_name</h3>
						        	<p>$product_desc</p>
						        </td>
						        
						        <td class='price'><input type'text' name='price$user_cart' value='$product_price' style='display:none;'>$product_price</td>
						        
						        <td class='quantity'>
						        	<div class='input-group mb-3'>
					             	<input type='text' name='$user_cart' class='quantity form-control input-number' value='1' min='1' max='100'>
					          	</div>
					          </td>
						        
						        <td class='total'>RS</td>
						      </tr>
						      <!-- selected product end-->";

										}
									}
								}else{echo "<br>sql_product_info error".$sql_product_info;}



										}/*sqlCartGet  while close*/
									}
								}else{echo "query error "/*.$sqlCartGet*/;}
									
								?>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<p><button type="submit" name="checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</button></p>
    			</div>
    		</div>
			</div>
		</form>
		</section>

		
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">coolpoint</h2>
              <p>ice cream solves everything.</p>
             
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">

          </div>
        </div>
        <div class="row">
         
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>