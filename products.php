<?php
include "addons/base_url.php";
include "include/connection-key.php";
include "include/product.php";
include "include/categories.php";
include "include/adverts.php";
include "include/forums.php";
include "include/blog.php";
include "addons/fix-url-values.php";
$page = "products.php";

?>
<html>
	<head>
		<title>Famunera posts | single </title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<link rel="stylesheet" href="css/style1.css">
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
		<div class="clear"> </div>
	<!--start-image-slider---->
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids">
<div class="webMain Index">
    <div class="floor_2 clearfix">
		<?php
		if(isset($_GET['category']) && !empty($_GET['category']))
		{	
			$page_name=$page."?category=".$_GET['category'];
			@$start=$_GET['start'];
			$eu = ($start - 0); 
			$limit = 5;
			$category=$_GET['category'];
			//$limit = 12;                                 
			$this1 = $eu + $limit; 
			$back = $eu - $limit; 
			$next = $eu + $limit;
			if(strlen($start) > 0 and !is_numeric($start))
			{
				echo "Oops Something went wrong";
				exit;
			}				
			echo '<div class="indexFeatured">';
				?>
				<h2>Products in <?php echo $_GET['category']; ?> category </h2>
				<?php
				$products=get_categorised_items($con_key,$eu,$limit,$category);
				$Count=count_categorised_items($con_key,$category);
				foreach( $products as $product)
				{	
					include "addons/products.php";
				}
				if($Count > $limit)
				{	?>
					<h2 style="width:100%;position:relative;float:left;border-bottom:2px solid #ccd0dc; color:#fe5401">From  <?php echo $Count ."  Results...";?></h2>
					<div class="page_1">
						<div class="am-fr">
							<ul class="am-pagination">				
							<?php			
								if($back >=0) 
								{ 
									echo"<li class='prev'><a href='$page_name&start=$back'>Prev</a></li>";
												
								}				
								$i=0;
								$l=1;
								for($i=0;$i < $Count;$i=$i+$limit)
								{
									if($i <> $eu)
									{
										echo " <li class='am-active'><a href='$page_name&start=$i'>$l</a></li>";
									}
									else 
									{
										echo "<li><a>$l</a></li>";
									}       
									$l=$l+1;
								}										
								if($this1 < $Count) 
								{ 
									echo "<li class='next'><a href='$page_name&start=$next'> NEXT </a></li>";
								} ?>
							</ul>
						</div>
					</div>					
	<?php		}
				
		echo '	</div>
			    <div class="indexR">
					<h2>Adverts</h2>';
					$ads=get_limited_adverts($con_key,0,2);
					foreach( $ads as $ad)
					{
						include "addons/adverts.php";
					}
		echo '	</div>';
		}
			?>
		
    <div class="floor_2 clearfix">
    	<div class="indexFeatured">
        	<h2>Featured Products</h2>
			<?php
			$products=get_limited_items($con_key,0,4);
			foreach( $products as $product)
			{	
				include "addons/products.php";
			}
			?>
        </div>
        <div class="indexR">
        	<h2>Adverts</h2>
			<?php	
			$ads=get_limited_adverts($con_key,0,2);
			foreach( $ads as $ad)
			{
				include "addons/adverts.php";
			}	?>
        </div>
    </div>
	
	</div>
</div>
<br/><br/>
		    </div>
		    </div>
	<?php include "include/footer.php"; ?></section>	
  </div>
</body>
</html>
