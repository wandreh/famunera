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
		<title> News posts | famunera.com</title>
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
 
	<div class="clear"> </div>
		<div id="wrapper">
	<section id="content">
		<div class="content-scroll">	
	<!--start-image-slider---->
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids">
		    	<div class="blog">
		    		<div class="blog-grid">
		    			<h4>Blog</h4>
		    			<div class="blog-grid-header">
		    				<h3>Duis aute irure dolor in reprehenderit</h3>
		    				<ul>
		    					<li><img src="images/cal.png" alt=""><a href="#">February 21, 2013</a></li>
		    					<li><img src="images/admin.png" alt=""><a href="#">Admin</a></li>
		    					<li><img src="images/post-in.png" alt=""><a href="#">10</a></li>
		    				</ul>
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/grid-img1.jpg">
				</div>
				<div class="grid span_2_of_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<div class="button"><span><a href="#">Read More</a></span></div>
			   </div>
		   </div>
		   
		    		</div>
		    		<div class="blog-grid">
		    			<div class="blog-grid-header">
		    				<h3>Duis aute irure dolor in reprehenderit</h3>
		    				<ul>
		    					<li><img src="images/cal.png" alt=""><a href="#">February 21, 2013</a></li>
		    					<li><img src="images/admin.png" alt=""><a href="#">Admin</a></li>
		    					<li><img src="images/post-in.png" alt=""><a href="#">10</a></li>
		    				</ul>
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/grid-img2.jpg">
				</div>
				<div class="grid span_2_of_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<div class="button"><span><a href="#">Read More</a></span></div>
			   </div>
		   </div>
		   
		    		</div>
		    		<div class="blog-grid">
		    			<div class="blog-grid-header">
		    				<h3>Duis aute irure dolor in reprehenderit</h3>
		    				<ul>
		    					<li><img src="images/cal.png" alt=""><a href="#">February 21, 2013</a></li>
		    					<li><img src="images/admin.png" alt=""><a href="#">Admin</a></li>
		    					<li><img src="images/post-in.png" alt=""><a href="#">10</a></li>
		    				</ul>
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/grid-img3.jpg">
				</div>
				<div class="grid span_2_of_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<div class="button"><span><a href="#">Read More</a></span></div>
			   </div>
		   </div>
		   
		    		</div>
		    		<div class="blog-grid">
		    			<div class="blog-grid-header">
		    				<h3>Duis aute irure dolor in reprehenderit</h3>
		    				<ul>
		    					<li><img src="images/cal.png" alt=""><a href="#">February 21, 2013</a></li>
		    					<li><img src="images/admin.png" alt=""><a href="#">Admin</a></li>
		    					<li><img src="images/post-in.png" alt=""><a href="#">10</a></li>
		    				</ul>
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/grid-img1.jpg">
				</div>
				<div class="grid span_2_of_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<div class="button"><span><a href="#">Read More</a></span></div>
			   </div>
		   </div>
		   
		    		</div>
		    		<div class="clear"> </div>
		    		<div class="pagnation">
		    			<ul>
		    				<li><a href="#">1</a></li>
		    				<li><a href="#">2</a></li>
		    				<li><a href="#">3</a>....</li>
		    				<li><a href="#">Next</a></li>
		    			</ul>
		    		</div>
		    	</div>
		    </div>
		    </div>
		    <div class="clear"> </div>
		    </div>
		<?php include "include/footer.php"; ?></div>		
	</section>	
  </div>		
</body>
</html>
