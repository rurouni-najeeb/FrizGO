<?php
include 'db.php';
session_start();
include 'redirectadmin.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Eshop</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
            <li><a href=""><span class="glyphicon glyphicon-user"> </span><?php echo $_SESSION['name']; ?></a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-reply"> </span>Logout</a></li>
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
	<!-- content-section-starts -->
	<div class="content">
	<div class="container">
		<div class="login-page">
		   	<div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
		  		<h3>ADD NEW PRODUCTS</h3>
				<form method="post" action="admin_addpro.php" enctype="multipart/form-data">
				  	<div>
						<span>Product Name<label>*</label></span>
						<input type="text" name="name" required="required">
				  	</div>
            		<div>
            			<span>Product images<label>*</label></span>
            			<input type="file" name="file[]" multiple="multiple" required="required">
            		</div>
				  	<div>
						<span>Product Price<label>*</label></span>
						<input type="text" name="price" required="required">
				  	</div>
					<br>
				  	<span>Select a Category</span>
				  	<label class="radio-inline"><input type="radio" name="category" value="books">Books</label>
				  	<label class="radio-inline"><input type="radio" name="category" value="electronics">Electronics</label>
				  	<label class="radio-inline"><input type="radio" name="category" value="clothes">Clothes</label>
    				<br><br>
					<span>Product details (if any)<label></label></span>
					<input type="text" name="detail">
					<br><br>
          			<div>
          				<span>Product year/model<label>*</label></span>
          				<input type="text" name="year">
          			</div>
          			<br>
          			<div>
          				<span>Product quantity<label>*</label></span>
          				<input type="text" name="quantity" required="required">
          			</div>
          			<br>
					<input type="submit" value="ADD">
				</form>
		   	</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
</body>
</html>
