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
		<title>Products | famunera.com</title>
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
   
   
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids">
		    	
<div>
	 <div class="content-grids">
		    	
<div>
	<div id="wrap" align="center">
		<ul>
			<!-- Detail Boxes for above four li -->
			<div class="detail-view" id="detail-1">
				<img src="images/m1.jpg" class="detail_images" alt="" />
				<div class="detail_info">
					<label class='item_name'>Product-Name</label>
					<br clear="all" />
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam:
						<br clear="all" />
						$<span class="price">80.00</span>
					</p>
					<button  class="add-to-cart-button">Add to Cart</button>
				</div>
			</div><br />
			<div class="detail-view" id="detail-2">
				<img src="images/m2.jpg" class="detail_images" alt="" />
				<div class="detail_info">
					<label class='item_name'>Product-Name</label>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam:
						<br clear="all" />
						$<span class="price">70.00</span>
						
					</p>
					<button  class="add-to-cart-button">Add to Cart</button>
				</div>
			</div><br />
			<div class="detail-view" id="detail-3">
				<img src="images/m4.jpg" class="detail_images" alt="" />
				<div class="detail_info">
					<label class='item_name'>Product-Name</label>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam:
						<br clear="all" />
						$<span class="price">50.00</span>
					</p>
					<button  class="add-to-cart-button">Add to Cart</button>
				</div>
			</div><br />
			<div class="detail-view" id="detail-4">
				<img src="images/m6.jpg" class="detail_images" alt="" />
				<div class="detail_info">
					<label class='item_name'>Product-Name</label>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam:
						<br clear="all" />
						$<span class="price">90.00</span>
					</p>
					<button  class="add-to-cart-button">Add to Cart</button>
				</div>
			</div>
			<br clear="all" />
		</ul>
	</div>
</div>
	
		
</div>

		    </div>
		   
		    </div>
		    <div class="clear"> </div>
		    </div>
	<?php include "include/footer.php"; ?></section>	
  </div>	
   </div>	
</body>
</html>
