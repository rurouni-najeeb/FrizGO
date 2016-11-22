<?php
	include 'db.php';
 	session_start();
 	// include 'redirect.php';
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
						<li><a href="account.html"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
            			<li><a href="register.html"><span class="glyphicon glyphicon-reply"> </span>Create Account</a></li>
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
						<li><a href="admin.php">Admin Page</a></li>
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
								<h3>Smart But Casual</h3>
								<p>Start your shopping here...</p>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3>Shop Online</h3>
								<p>Start your shopping here...</p>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3>Pack your Bag</h3>
								<p>Start your shopping here...</p>
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
			      	});});
			  	</script>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="shop">
			<a href="register.html">SHOP COLLECTION NOW</a>
		</div>
		</div>
	</div>

	<div class="container">
		<div class="main-content">
			<div class="online-strip">
				<div class="col-md-4 follow-us">
					<h3>follow us : 
						<a class="facebook" href="#">
							<img width="40" height="40" src='images/facebook.svg' alt=""/>
						</a>
					</h3>
				</div>
				<div class="col-md-4 shipping-grid">
					<div class="shipping">
						<img src="images/shipping.png" alt="" />
					</div>
					<div class="shipping-text">
						<h3>Free Shipping</h3>
						<p>on orders over $ 199</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 online-order">
					<p>Order online</p>
					<h3>Tel:999 4567 8902</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="products-grid">
				<header>
					<h3 class="head text-center">Latest Products</h3>
				</header>
		        <?php
		        $result = $conn->prepare("SELECT * FROM products LIMIT 6");
		        $result->execute();
		        while($rows = $result->fetch()) :
		        ?>
        		<div class="col-md-4 product simpleCart_shelfItem text-center">
	            	<a href="single.php?pid=<?php echo $rows['pid']; ?>"><img style="height:200px;" src="<?php echo $rows['image']; ?>" alt="" /></a>
	            	<div class="mask">
	             		<a href="single.php?pid=<?php echo $rows['pid']; ?>">Quick View</a>
	            	</div>
	            	<a class="product_name" href="single.php?pid=<?php echo $rows['pid']; ?>"><?php echo $rows['name']; ?></a>
          		</div>
      			<?php
      			endwhile;
      			?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="other-products">
	<div class="container">
		<h3 class="like text-center">Featured Collection</h3>
		<ul id="flexiselDemo3">
			<li><a href="#"><img src="images/l1.jpg" class="img-responsive" alt="" /></a>
				<div class="product liked-product simpleCart_shelfItem">
					<a class="like_name" href="#">Jeans for Men</a>
					<p><a class="item_add" href="#"><i></i> <span class=" item_price">At Sale</span></a></p>
				</div>
			</li>
			<li><a href="#"><img src="images/l2.jpg" class="img-responsive" alt="" /></a>
				<div class="product liked-product simpleCart_shelfItem">
					<a class="like_name" href="#">Shirts for Women</a>
					<p><a class="item_add" href="#"><i></i> <span class=" item_price">At Sale</span></a></p>
				</div>
			</li>
			<li><a href="#"><img src="images/l3.jpg" class="img-responsive" alt="" /></a>
				<div class="product liked-product simpleCart_shelfItem">
					<a class="like_name" href="#">Fiction Books</a>
					<p><a class="item_add" href="#"><i></i> <span class=" item_price">Starting at Rs 100</span></a></p>
				</div>
			</li>
			<li><a href="#"><img src="images/l4.jpg" class="img-responsive" alt="" /></a>
				<div class="product liked-product simpleCart_shelfItem">
					<a class="like_name" href="#">Ebooks</a>
					<p><a class="item_add" href="#"><i></i> <span class=" item_price">Starting at Rs 50</span></a></p>
				</div>
			</li>
			<li><a href="#"><img src="images/l5.jpg" class="img-responsive" alt="" /></a>
				<div class="product liked-product simpleCart_shelfItem">
					<a class="like_name" href="#">Electronics</a>
					<p><a class="item_add" href="#"><i></i> <span class=" item_price">At Sale</span></a></p>
				</div>
			</li>
		</ul>
		    <script type="text/javascript">
			 $(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: {
			    		portrait: {
			    			changePoint:480,
			    			visibleItems: 1
			    		},
			    		landscape: {
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: {
			    			changePoint:768,
			    			visibleItems: 3
			    		}
			    	}
			    });

			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
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
							<li><a href="contact.php">Contact Info</a></li>
							<li><a href="terms.php">Terms and Conditons</a></li>
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
							<li><a href="contact.php">Facebook</a></li>
							<li><a href="contact.php">Twitter</a></li>
							<li><a href="contact.php">Instagram</a></li>
							<li><a href="contact.php">Pinterest</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
		  </div>
		</div>
	</div>
</body>
</html>