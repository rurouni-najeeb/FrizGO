<?php
include 'db.php';
session_start();
include 'redirect.php';

$prod = $_REQUEST['pid'];

$result = $conn->prepare("SELECT * FROM products WHERE pid = :hjhjhjh");
$result->bindParam(':hjhjhjh', $prod);

$result->execute();

$rows = $result->fetch();
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
					<h2>our Products</h2>
					<ul class="product-list">
						<li><a href="">Clothing</a></li>
						<li><a href="">Books</a></li>
						<li><a href="">Electronics</a></li>
						<li><a href="register.html">Register</a></li>
					</ul>
				</div>
				<div class="tags">
				    	<h4 class="tag_head">Tags Widget</h4>
				         <ul class="tags_links">
							<li><a href="#">Books</a></li>
							<li><a href="#">Electronics</a></li>
						</ul>
				</div>
			</div>
			<div class="new-product">
				<div class="col-md-5 zoom-grid">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="<?php echo $rows['image']; ?>">
								<div class="thumb-image"> <img src="<?php echo $rows['image']; ?>" data-imagezoom="true" class="img-responsive" alt="" /> </div>
							</li>
							<li data-thumb="<?php echo $rows['image2']; ?>">
								<div class="thumb-image"> <img src="<?php echo $rows['image2']; ?>" data-imagezoom="true" class="img-responsive" alt="" /> </div>
							</li>
							<li data-thumb="<?php echo $rows['image3']; ?>">
								<div class="thumb-image"> <img src="<?php echo $rows['image3']; ?>" data-imagezoom="true" class="img-responsive" alt="" /> </div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-7 dress-info">
					<div class="dress-name">
						<h3><?php echo $rows['name']; ?></h3>
						<span><?php echo $rows['price']; ?></span>
						<div class="clearfix"></div>
						<p></p>
					</div>
					<div class="span span1">
						<p class="left">Category</p>
						<p class="right"><?php echo $rows['category']; ?></p>
						<div class="clearfix"></div>
					</div>
					<div class="span span2">
						<p class="left">Year/model</p>
						<p class="right"><?php echo $rows['year']; ?></p>
						<div class="clearfix"></div>
					</div>
					<div class="span span3">
						<p class="left">Quantity</p>
						<p class="right"><?php
            if($rows['quantity'] <=0)
            {
              $t = "Out of stock";
$flag = 1;
            }
            else {
              $t =  $rows['quantity'];
              $flag = 0;
            }
echo $t;
            ?></p>
						<div class="clearfix"></div>
					</div>
					<div class="purchase">
						<a href="addcart.php?pid=<?php echo $rows['pid']; ?>">Purchase Now</a>
						<div class="social-icons">

						</div>
						<div class="clearfix"></div>
					</div>
					<script src="js/imagezoom.js"></script>
						<!-- FlexSlider -->
						<script defer src="js/jquery.flexslider.js"></script>
						<script>
							// Can also be used with $(document).ready()
							$(window).load(function() {
						  	$('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  	});
						});
						</script>
				</div>
				<div class="clearfix"></div>
				<div class="reviews-tabs">
      			<!-- Main component for a primary marketing message or call to action -->
      			<ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">
        			<li class="test-class active"><a class="deco-none misc-class" href="#how-to">About the product</a></li>
      			</ul>
      			<div class="tab-content responsive hidden-xs hidden-sm">
        			<div class="tab-pane active" id="how-to">
		 			<p class="tab-text"><?php echo $rows['detail']; ?></p>
        		</div>
        		<div class="tab-pane" id="features"></div>
      		</div>
		</div>
   </div>
   <div class="other-products products-grid">
		<div class="container">
			<header>
				<h3 class="like text-center">Related Products</h3>
			</header>
			<?php
			$result = $conn->prepare("SELECT count(*) FROM products ");
			$result->execute();
			$rw = $result->fetchColumn();
			$z = rand()%$rw;
			$result = $conn->prepare("SELECT * FROM products WHERE pid = :hjhjhjh");
			$result->bindParam(':hjhjhjh', $z);
			$result->execute();
			while($rows = $result->fetch()) :
			?>
			<div class="col-md-4 product simpleCart_shelfItem text-center">
				<a href="single.html"><img src="images/p1.jpg" alt="" /></a>
				<div class="mask">
					<a href="single.html">Quick View</a>
				</div>
				<a class="product_name" href="single.html">Product #1</a>
				<p><a class="item_add" href="#"><i></i> <span class="item_price">Price</span></a></p>
			</div>
			<?php
			endwhile;
 			?>
			<div class="clearfix"></div>
		</div>
	</div>
   <!-- content-section-ends -->
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
							<li><a href="terms.php">Terms and Conditons</a></li>
						</ul>
					</div>
					<div class="col-md-3 span1_of_4">
						<h4>account</h4>
						<ul class="f_nav">
							<li><a href="account.html">login</a></li>
							<li><a href="register.html">create an account</a></li>
							<li><a href="#">create wishlist</a></li>
							<li><a href="checkout.php">my shopping bag</a></li>
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
 	<script src="js/responsive-tabs.js"></script>
    <script type="text/javascript">
    	$( '#myTab a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
    });
    $( '#moreTabs a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      ( function( $ ) {
          // Test for making sure event are maintained
          $( '.js-alert-test' ).click( function () {
            alert( 'Button Clicked: Event was maintained' );
          } );
          fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
      } )( jQuery );
    </script>
</body>
</html>
