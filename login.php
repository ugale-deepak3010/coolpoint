<head>
    <title>Cool Point</title>
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
	<style>
	.login-div{
	align:center;
	margin:2%;

	}
	</style>
<?php
session_start();

?>
</head>
  <body class="goto-here">
		<div  class="py-1 bg-primary">
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
 <div align="center" class="login-div" >
	</section>			
			<section class="main-content">				
				<div>
					<div class="span5"align="center">	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);">
				
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
						<form action="php/login.php" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Your email</label><br>
									<div class="controls">
										<input type="text" placeholder=" Enter your email" id=" email" name="email" class=" input-xlarge" required/>
									</div>
								</div><br>
								<div class="control-group">
									<label class="control-label">Password</label><br>
									<div class="controls">
										<input type="password" placeholder="Enter your password" id="password" name="password" class="input-xlarge" required/>
									</div>
									<p class="reset"> <a style="color:red" tabindex="4" href="register.php" title="Recover your username or password">new User / Register</a></p>
								</div>
								<div class="control-group">
									<input name="submit" tabindex="3" class="btn btn-danger large" type="submit" value="Sign into your account">
									<hr>
								</div>
							</fieldset>
						</form>				
					</div>
				</div>
				<div>
				</div>
			</section>	
		</div>
		
</body>