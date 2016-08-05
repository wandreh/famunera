<?php
include "addons/base_url.php";
include "include/connection-key.php";
include "include/product.php";
include "include/categories.php";
include "include/adverts.php";
include "include/forums.php";
include "include/blog.php";
include "addons/fix-url-values.php";
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>famunera :: Home</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/mobile.js"></script>
		<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 1600,
        speed: 600
      });
});
  </script>
	</head>
	<body>
		<!---start-wrap---->
		
<!-- The menu -->

    <?php include "include/nav-main.php" ?>
	
	
	<!--start-image-slider---->
					<?php
			if (isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['name']) && !empty($_GET['name']))
			{
				$product= get_named_product($con_key,$_GET['id'],readHeader($_GET['name']));
				if($product['count(pid)']==1)
				{	
						echo'
						<div class="blogNav col-2">
							<div class="blogCate">
								<h3>Buyer Panel</h3>
								<a style="" href="index.php">Cart ()</a>        
								  			        
							</div>
						</div>';					
					?>
					<form class=" col-6 style-this" action="" method="post">
						<h2><?php echo $product['pname'];?></h2>
						<img style="positon:relative;float:left;" src="Uploads/Attachment/2015-11-09/564080d3e612e.png" width="180" height="auto" alt="Gellan Gum" />
						<div class=" buy-prod" style="positon:relative;float:left;margin-left:12px">
							<h1><?php echo $product['pname'];?></h1>
							<span>Category: <em title="71010-52-1"><?php echo $product['category'];?></em></span>
							<span>Seller: <em title="391390"><?php echo $product['seller_name'];?></em></span>
							<span>Item No: <em title="E418"><?php echo $product['prod_id'];?></em></span>
							<p class="price">Price : ugx <em><?php echo $product['price'];?></em>/-</p>						
						</div>
						<div class="col-12">
						</div>
						<div class="col-3">
							<div class="signInCon">
							<dl>
										<dt>Number of items</dt>
										<dd style="z-index:6">
											<input type="number" style="width:50%" name="quantity" value="1" class="textIno" />              
										</dd>
									</dl>
							</div>
						</div>
						<div class="buy-detail">
							<p class="aboutInfo"><?php echo $product['description'];?></p>
						</div>
						<div class="col-12">
							<a class="actasbtn" href="login.php" target="_blank" class="sendInq">Login to buy product</a>
						</div>
					</form>
					<!--End-image-slider---->
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
			     	
		    	<div class="top-3-grids">
				<h4>Featured Products</h4>
		    		<div class="section group">
				<div class="grid_1_of_3 images_1_of_3">
					  <?php
						$products=get_limited_items($con_key,0,3);
						foreach( $products as $product)
						{	
							include "addons/products.php";
						}
						?>
					  <h3>Lorem Ipsum</h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 second">
					   <?php
						$products=get_limited_items($con_key,3,3);
						foreach( $products as $product)
						{	
							include "addons/products.php";
						}
						?>
					  <h3>dummy text</h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 theree">
					  <?php
						$products=get_limited_items($con_key,6,3);
						foreach( $products as $product)
						{	
							include "addons/products.php";
						}
						?>
					  <h3>simply text </h3>
				</div>
			</div>
		    	</div>
		    	
		    <div class="content-grids">
		    	<h4>Deals of the day</h4>
		    	<div class="section group">
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/m1.jpg">
					 <a href="single.html">eiusmod tempor incididunt</a>
					 <h3>$260</h3>
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/m2.jpg">
					 <a href="single.html">eiusmod tempor incididunt</a>
					 <h3>$150</h3>
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/m7.jpg">
					 <a href="single.html">eiusmod tempor incididunt</a>
					 <h3>$130</h3>
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/m4.jpg">
					 <a href="single.html">eiusmod tempor incididunt</a>
					 <h3>$460</h3>
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 </ul>
				</div>
			</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/m2.jpg">
					 <a href="single.html">eiusmod tempor incididunt</a>
					 <h3>$260</h3>
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/m6.jpg">
					<a href="single.html">eiusmod tempor incididunt</a>
					 <h3>$100</h3>
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/m7.jpg">
					 <a href="single.html">eiusmod tempor incididunt</a>
					 <h3>$180</h3>
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/m1.jpg">
					  <a href="single.html">eiusmod tempor incididunt</a>
					 <h3>$140</h3>
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 </ul>
				</div>
			</div>
		    
		    	</div>
		    	
		    
	<?php include "include/footer.php"; ?>
	</div>		
</body>
</html>
