<?php
session_start();
include 'db.php';
include 'redirect.php';

$cat = $_REQUEST['category'];
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
<link href="css/component.css" rel='stylesheet' type='text/css' />
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
						<li><a href=""><span class="glyphicon glyphicon-user"> </span><?php echo $_SESSION['name']; ?></a></li>
            			<li><a href="logout.php"><span class="glyphicon glyphicon-reply"> </span>Logout</a></li>
					</ul>
				</div>
				<div class="header-right">
          			<div class="cart box_1">
            			<a href="checkout.php">
              			<h3><a style="color:white;" href="checkout.php" >Shopping cart</a></h3>
            			</a>
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
						<h1><a href="admin.php">FrizGo</a></h1>
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
		<!-- content-section-starts -->
	<div class="container">
	   <div class="products-page">
			<div class="products">
				<div class="product-listy">
					<h2>Our Products and Services</h2>
					<ul class="product-list">
						<li><a href="">Books</a></li>
						<li><a href="">Electronics</a></li>
						<li><a href="">Clothing</a></li>
						<li><a href="register.html">Register</a></li>
					</ul>
				</div>
			</div>
			<div class="new-product">
				<div class="new-product-top">
					<ul class="product-top-list">
						<li><a href="home.php">Home</a>&nbsp;<span>&gt;</span></li>
					</ul>
					<p class="back"><a href="index.html">Back to Previous</a></p>
					<div class="clearfix"></div>
				</div>
				<div class="mens-toolbar">
                 	<div class="sort">
               	   		<div class="sort-by">
			            	<label>Sort By</label>
			            	<select>
			                	<option value="">Position</option>
			                    <option value="">Name</option>
			                    <option value="">Price</option>
			            	</select>
	                   	</div>
	    		    </div>
		    	        <ul class="women_pagenation">
					     	<li>Page:</li>
					     	<li class="active"><a href="#">1</a></li>
					     	<li><a href="#">2</a></li>
				  	    </ul>
	               	<div class="clearfix"></div>
			    </div>
			    <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
				<div class="cbp-vm-options">
					<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
					<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
				</div>
				<div class="pages">
        	 		<div class="limiter visible-desktop">
               			<label>Show</label>
                  		<select>
                            <option value="" selected="selected">9</option>
                            <option value="">15</option>
                            <option value="">30</option>
                  		</select> per page
               		</div>
       	   		</div>
				<div class="clearfix"></div>
				<ul>
					<?php
						$result = $conn->prepare("SELECT * FROM products WHERE category = :hjhjhjh");
						$result->bindParam(':hjhjhjh', $cat);
						$result->execute();
						while($rows = $result->fetch()) :
					?>
					<li>
						<a class="cbp-vm-image" href="single.php?pid=<?php echo $rows['pid']; ?>">
						<div class="simpleCart_shelfItem">
							<div class="view view-first">
					   			<div class="inner_content clearfix">
									<div class="product_image">
										<img style="height:200px;" src="<?php echo $rows['image']; ?>" class="img-responsive" alt=""/>
										<div class="mask">
			                       			<div class="info">Quick View</div>
					                  	</div>
										<div class="product_container">
									   		<div class="cart-left">
										 		<p class="title"><?php echo $rows['name']; ?></p>
									   		</div>
									   		<div class="pricey"><span class="item_price">$<?php echo $rows['price']; ?></span></div>
									   		<div class="clearfix"></div>
								     	</div>
								  	</div>
			                    </div>
		                    </div>
		                </div>
						</a>
						<div class="cbp-vm-details"></div>
						<a class="cbp-vm-icon cbp-vm-add item_add" href="addcart.php?pid=<?php echo $rows['pid']; ?>">Add to cart</a>
					</li>
					<?php
						endwhile;
					?>
				</ul>
				</div>
				<script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/classie.js" type="text/javascript"></script>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
   	</div>
   <!-- content-section-ends -->
		<div class="other-products">
			<div class="container">
				<h3 class="like text-center">Featured Collection</h3>
				<ul id="flexiselDemo3">
				<?php
					$result = $conn->prepare("SELECT * FROM products order by pid asc");
					$result->execute();
					while($rows = $result->fetch()) :
				?>
				<li style="text-align:center; "><a href="single.php?pid=<?php echo $rows['pid']; ?>"><img style="margin-left: 5px; margin-right:5px; margin-bottom: 10px; width:280px; height:200px;"src="<?php echo $rows['image']; ?>" class="img-responsive"/></a>
					<div style="text-align:center; width:280px" class="product liked-product simpleCart_shelfItem">
						<a class="like_name" href="single.php?pid=<?php echo $rows['pid']; ?>"></a>
						<h3 style=""><?php echo $rows['name']; ?></h3>
					</div>
				</li>
				<?php
					endwhile;
				?>
				</ul>
				<script type="text/javascript">
					$(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 3,
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
				    			visibleItems: 4
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
							<li><a href="products.php?category=clothing">Clothing</a></li>
							<li><a href="products.php?category=books">Books</a></li>
							<li><a href="products.php?category=electronics">Electronics</a></li>
						</ul>
					</div>
					<div class="col-md-3 span1_of_4">
						<h4>help</h4>
						<ul class="f_nav">
							<li><a href="contact.php">Contact Info</a></li>
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
