 
<!DOCTYPE html>
<html>
<head>
<title>Shop</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li><a href="admin.php"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
            			<li><a href="admin_register.html"><span class="glyphicon glyphicon-reply"> </span>Create Account</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<div class="banner-top">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
		    	<div class="navbar-header">
		        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        	<span class="sr-only">Toggle navigation</span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
		        	</button>
					<div class="logo">
						<h1><a href="home.php">FrizGo</a></h1>
					</div>
		    	</div>
		    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        	<ul class="nav navbar-nav">
						<li><a href="home.php">Home</a></li>
			        	<li><a href="products.php?category=books">Books</a></li>
						<li><a href="products.php?category=electronics">Electronics</a></li>
						<li><a href="products.php?category=clothes">Clothes</a></li>
						<li><a href="contact.php">CONTACT</a></li>
		        	</ul>
		    	</div>
			</nav>
		</div>
	</div>
	<br/></br></br></br><br/></br></br></br>
	<div class='container'>
		<div class="alert alert-danger" role="alert">
		  <h2 class="alert-heading">Invalid Username or Password</h2>
		  <p><h4>Administrator Priviledges Required</h4> For making changes to the product database, administrator priviledges are required. Make sure you are an administrator and already have an administrator account</p>
		  <p class="mb-0"><h4><a href="admin.php">Log In as Admin</a></h4></p>
		</div>
	</div>
	<br/></br></br></br><br/></br></br></br>
	<div class="footer">
		<div class="container">
		 <div class="footer_top">
			<div class="span_of_4">
				<div class="col-md-3 span1_of_4">
					<h4>Shop</h4>
					<ul class="f_nav">
						<li><a href="admin_products?category=electronics">Electronics</a></li>
						<li><a href="admin_products?category=books">Books</a></li>
						<li><a href="admin_products?category=clothes">Clothes</a></li>
					</ul>
				</div>
				<div class="col-md-3 span1_of_4">
					<h4>help</h4>
					<ul class="f_nav">
						<li><a href="contact.php">Contact Info</a></li>
						<li><a href="terms.php">Terms and Conditions</a></li>
					</ul>
				</div>
				<div class="col-md-3 span1_of_4">
					<h4>account</h4>
					<ul class="f_nav">
						<li><a href="account.html">login</a></li>
						<li><a href="register.html">create an account</a></li>
						<li><a href="#">create wishlist</a></li>
						<li><a href="checkout.html">my shopping bag</a></li>
						<li><a href="#">brands</a></li>
					</ul>
				</div>
				<div class="col-md-3 span1_of_4">
						<h4>Follow us on</h4>
						<ul class="f_nav">
							<li><a href="contact.php">Facebook</a></li>
							<li><a href="contact.php">Twitter</a></li>
							<li><a href="contact.php">Instagram</a></li>
							<li><a href="contact.php">Pinterest</a></li>
						</ul>
					</div>
		  </div>
		</div>
		</div>
</body>
</html>
