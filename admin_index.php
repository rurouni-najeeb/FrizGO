<?php
include 'db.php';
 session_start();
include 'redirectadmin.php';

 $q = "SELECT * from products";
 $qq = $conn->prepare($q);
 $qq->execute();
 $r = $qq->fetch();
 ?>
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
						<h1><a href="admin_index.php">Admin Page</a></h1>
					</div>
	    			</div>
      				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        		<ul class="nav navbar-nav">
						<li><a href="admin_index.php">Home</a></li>
			        	<li><a href="admin_products.php?category=books">Books</a></li>
						<li><a href="admin_products.php?category=electronics">Electronics</a></li>
						<li><a href="admin_products.php?category=clothes">Clothes</a></li>
						<li><a href="contact.html">CONTACT</a></li>
	        		</ul>
	        		</div>
				</nav>
		</div>
	</div>
	<div class="banner">
		<div class="container">
			<div class="banner-bottom">
				<div class="banner-bottom-left">
				<h2>B<br>U<br>Y</h2>
				</div>
			<div class="banner-bottom-right">
				<div  class="callbacks_container">
					<ul class="rslides" id="slider4">
						<li>
							<div class="banner-info">
								<h3>Product Addition</h3>
								<p>Start your addition here...</p>
							</div>
						</li>
						<li>
							<div class="banner-info">
							   <h3>Product Updation</h3>
								<p>Start your updation here...</p>
							</div>
						</li>
						<li>
							<div class="banner-info">
						  		<h3>Product Deletion</h3>
								<p>Start your deletion here...</p>
							</div>
						</li>
					</ul>
				</div>
	  		<script src="js/responsiveslides.min.js"></script>
			<script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });

			    });
			  </script>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="shop">
			<a href="admin_add.php">ADD PRODUCTS NOW</a>
		</div>
		</div>
	</div>
	<!-- content-section-starts-here -->
	<div class="container">
		<div class="main-content">
			<div class="products-grid">
				<header>
					<h3 class="head text-center">Latest Updates to the Database</h3>
				</header>
				<?php
				$result = $conn->prepare("SELECT * FROM products LIMIT 6");
				$result->execute();
				while($rows = $result->fetch()) :
				?>
				<div class="col-md-4 product simpleCart_shelfItem text-center">
					<a href="account.html"><img style="height:200px;" src="<?php echo $rows['image']; ?>" alt="" /></a>
					<div class="mask">
						<a href="account.html">Quick View</a>
					</div>
					<a class="product_name" href="account.html"><?php echo $rows['name']; ?></a>
				</div>
				<?php
				endwhile;
		 		?>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- content-section-ends-here -->
	<div class="footer">
		<div class="container">
		 	<div class="footer_top">
				<div class="span_of_4">
					<div class="col-md-3 span1_of_4">
						<h4>Shop</h4>
						<ul class="f_nav">
							<li><a href="products.php?category=clothes">Clothing</a></li>
							<li><a href="products.php?category=books">Books</a></li>
							<li><a href="products.php?category=electronics">Electronics</a></li>
						</ul>
					</div>
					<div class="col-md-3 span1_of_4">
						<h4>help</h4>
						<ul class="f_nav">
							<li><a href="contact.html">Contact Info</a></li>
							<li><a href="terms.html">Terms and Conditons</a></li>
						</ul>
					</div>
					<div class="col-md-3 span1_of_4">
						<h4>account</h4>
						<ul class="f_nav">
							<li><a href="account.html">login</a></li>
							<li><a href="register.html">create an account</a></li>
							<li><a href="#">create wishlist</a></li>
							<li><a href="checkout.html">my shopping bag</a></li>
						</ul>
					</div>
					<div class="col-md-3 span1_of_4">
						<h4>Follow us on</h4>
						<ul class="f_nav">
							<li><a href="contact.html">Facebook</a></li>
							<li><a href="contact.html">Twitter</a></li>
							<li><a href="contact.html">Instagram</a></li>
							<li><a href="contact.html">Pinterest</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
		  </div>
		</div>
	</div>
</body>
</html>
