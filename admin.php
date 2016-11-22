
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
						<li><a href="admin_register.html"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>
					</ul>
				</div>
				<div class="header-right">
						<div class="cart box_1">


							<div class="clearfix"> </div>
						</div>
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
						<h1><a href="admin_index.php">FrizGo : Admin Page</a></h1>
					</div>
		    	</div>
		    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        	<ul class="nav navbar-nav">
						<li><a href="home.php">Home</a></li>
			        	<li><a href="admin_products.php?category=books">Books</a></li>
						<li><a href="admin_products.php?category=electronics">Electronics</a></li>
						<li><a href="admin_products.php?category=clothes">Clothes</a></li>
						<li><a href="contact.html">CONTACT</a></li>
		        	</ul>
		    	</div>
			</nav>
		</div>
	</div>
	<div class="content">
	<div class="container">
		<div class="login-page">
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>REGISTERED ADMINSITRATORS</h3>
				<p>If you are an admin, please log in to make any changes.</p>
				<p>If you are not registered, <a href="admin_register.html">Click Here</a> 
				<form method="post" action="admin_login.php">
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="text" name="email" required="required">
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="password" name="password" required="required">
				  </div>
				  <input type="submit" value="Login">
			    </form>
			   </div>
			   <div class="clearfix"> </div>
			 </div>
		   </div>
		</div>
	</div>
	<div class="container">
		<!-- content-section-starts-here -->
		<div class="container">
			<div class="main-content">
				<div class="products-grid">
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
