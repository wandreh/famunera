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
		<title>About Us | Famunera</title>
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
  
  
	<!--start-image-slider---->		    <div class="wrap">
		    <div class="content">
		    	<div class="about">
		    		<h4>About Us</h4>
		    		<div class="section group">
					<div class="col_1_of_3 span_1_of_3 about-frist">
						<h3>Did You Know?</h3>
						<h5>volutpat a enim. Vivamus blandit urna </h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						<ul>
							<li><a href="#">Aenean nonummy hendrerit</a></li>
							<li><a href="#">consectetur adipisicing elit</a></li>
							<li><a href="#">tempor incididunt ut labore</a></li>
							<li><a href="#">Ut enim ad minim veniamt</a></li>
							<li><a href="#">Vivamus blandit urna</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Ut enim ad minim veniam</a></li>
							<li><a href="#">Vivamus blandit urna</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Ut enim ad minim veniam</a></li>
						</ul>
					</div>
					<div class="col_1_of_3 span_1_of_3 about-centre">
						<h3>Our Mission</h3>
						<a href="#"><img src="images/grid-img2.jpg"></a>
						<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elitvolutpat a enim. Vivamus blandit urna </h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="col_1_of_3 span_1_of_3 quites">
						<h3>Testimonials</h3>
						<blockquote><p><img src="images/quotes_alt.png"> &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p></blockquote>
						<a href="#">- Lorem ipsum.<span>Usa</span></a><br /><br />
						<blockquote><p><img src="images/quotes_alt.png"> &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p></blockquote>
						<a href="#">- Lorem ipsum.<span>Usa</span></a>
					</div>
					<div class="clear"> </div>
					<div class="section group">
						<div class="cont span_2_of_3">
						       <h3>Mobile-store General Information</h3>
							   	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>				    
						</div>
						<div class="rsidebar span_1_of_3 about-frist">
						      <h3>Fresh-links</h3>
						      <ul>
								<li><a href="#">Aenean nonummy hendrerit</a></li>
								<li><a href="#">consectetur adipisicing elit</a></li>
								<li><a href="#">tempor incididunt ut labore</a></li>
								<li><a href="#">Ut enim ad minim veniamt</a></li>
								<li><a href="#">Vivamus blandit urna</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Ut enim ad minim veniam</a></li>
								<li><a href="#">Vivamus blandit urna</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Ut enim ad minim veniam</a></li>
							</ul>
						      
						</div>
		    </div>
				</div>
				
		    	</div>
		    	</div>
		    	
		    </div>
		    <div class="clear"> </div>
	<?php include "include/footer.php"; ?></div>		
	</section>	
  </div>		
</body>
</html>
