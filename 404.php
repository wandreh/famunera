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
		<title>Famunera | Page not found</title>
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
		    	<div class="error-page">
		    		<h3>404</h3>
		    		<h5>A Page Not Found 404 error occured</h5>
		    	</div>
		    	<h4>Deals of the day</h4>
		    	<div class="section group">
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/m1.jpg">
					 <a href="#">Duis aute irure dolor in reprehenderit sed do eiusmod tempor incididunt</a>
					 <h3>$260</h3>
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/m2.jpg">
					  <a href="#">Duis aute irure dolor in reprehenderit sed do eiusmod tempor incididunt</a>
					 <h3>$150</h3>
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/m7.jpg">
					  <a href="#">Duis aute irure dolor in reprehenderit sed do eiusmod tempor incididunt</a>
					 <h3>$130</h3>
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/m4.jpg">
					  <a href="#">Duis aute irure dolor in reprehenderit sed do eiusmod tempor incididunt</a>
					 <h3>$460</h3>
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 </ul>
				</div>
			</div>
		    	</div><br />
		    </div>
		    <div class="clear"> </div>
		    </div>
	<?php include "include/footer.php"; ?> </div>		
	</section>	
  </div>		
</body>
</html>
