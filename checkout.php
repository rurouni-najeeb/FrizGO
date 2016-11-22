<?php
 session_start();
 include 'db.php';
 include 'redirect.php';
 $paid = "yes";
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
	<!-- checkout -->
	<div class="cart-items">
		<div class="container">
			<div class="dreamcrub">
			   	<ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Cart
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			</div>
         	<?php
         	$result = $conn->prepare("SELECT  count(*)  FROM products p,customers c, cart cr WHERE cr.pid = p.pid and c.cid = cr.customerid and c.cid = ? and cr.paid!= ?");
			$result->bindParam(1,$_SESSION['id']);
			$result->bindParam(2,$paid);
         	$result->execute();
			$res = $result->fetchColumn();
          	?>
			<h2>MY SHOPPING BAG (<?php echo $res; ?>) </h2>
			<script>$(document).ready(function(c) {
			$('.close3').on('click', function(c){
					$('.cart-header3').fadeOut('slow', function(c){
				$('.cart-header3').remove();
			});
			});
			});
			</script>
			<?php
			$result = $conn->prepare("SELECT  cr.cid as cid ,p.name as proname, image, image2, image3, price, totalprice,  cr.quantity as quant, cr.pid as pid FROM products p,customers c, cart cr WHERE cr.pid = p.pid and c.cid = cr.customerid and c.cid = ? and cr.paid != ? order by cr.cid DESC");
			$result->bindParam(1,$_SESSION['id']);
			$result->bindParam(2,$paid);
			$result->execute();
			while($rows = $result->fetch()) :
			?>
			<div  class="cart-header3">
          		<a href="deletecart.php?cid=<?php echo $rows['cid']; ?>&pid=<?php echo $rows['pid']; ?>&quantity=<?php echo $rows['quant']; ?>"><button style="float:right; margin-top:30px;margin-right:20px;"type="button" class="btn btn-danger right">Remove product</button></a>
				<div class="cart-sec simpleCart_shelfItem">
					<div  class="cart-item cyc">
						<img   src="<?php echo $rows['image']; ?>" class="img-responsive" alt="">
					</div>
					<div class="cart-item-info">
						<h3><a href="#"> <?php echo $rows['proname']; ?></a><span></span></h3>
						<ul class="qty">
							<li><p>Quantity:<?php echo $rows['quant']; ?></p></li>
              				<li><p>Total cost:<?php echo $rows['totalprice']; ?></p></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<?php
				endwhile;
			?>
	        <?php
  			$result = $conn->prepare("SELECT  sum(totalprice) as  pr from cart cr WHERE customerid = ? and paid != ? order by cr.cid DESC");
			$result->bindParam(1,$_SESSION['id']);
			$result->bindParam(2,$paid);
  			$result->execute();
			$rows = $result->fetch();
			if(strcmp($rows['pr'],"")==0)
			{
  				$link = "home.php";
  				$title = "Add products in your cart";
			}
			else {
  				$link = "payment.php?sum=".$rows['pr'];
    			$title = "Pay total : ".$rows['pr'];
			}
  			?>
         	<a href="<?php echo $link; ?>"><button style="float:right; margin-top:30px;margin-right:20px;"type="button" class="btn btn-success"><?php echo $title; ?></button></a>
		</div>
	</div>
	<!-- //checkout -->
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
</body>
</html>
