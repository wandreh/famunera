<?php
include "addons/base_url.php";
include "include/connection-key.php";
include "include/buyer.php";

?>
<!DOCTYPE HTML>
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
		<div class="webMain gloBlog">
	<div class="webContent signUp clearfix" align="center">
<?php
if (isset($_POST['source']))
{
	if (!empty($_POST['password']) && !empty($_POST['username']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($mail=$_POST['email']))
	{		
		$pwd=md5($_POST['password']);
		$repwd=md5($_POST['repassword']);
		$mobile=$_POST['mobile'];
		$mail=$_POST['email'];
		$uname=$_POST['username'];
		$sname=$_POST['first_name'];
		$lname=$_POST['last_name'];
		$result=check_buyer_exists($con_key, $mail,$uname);
		if($result['count(buyer_id)']==0){
			add_buyer($con_key,$sname,$lname ,$uname,$mobile,$mail,$pwd);
		echo "<p class='' style='color: white;background-color: green;padding: 18px;font-size: 20px;margin-top: 10px;margin-bottom: -30px;'>you have success fully registd for this account</p>";
		}else{
		echo "<p class='' style='color: white;background-color: red;padding: 18px;font-size: 20px;margin-top: 10px;margin-bottom: -30px;'>Either your username or email is already used</p>";
		}
		
	}
	else{
		echo "enter all details";		
	}
}
?>
<form id="register_form" method="post" action="">
	<div class="sighUpInfo">
    	<h3> </h3>
		<dl class="clearfix">
        	<dt style=" font-size: 14px;">First Name:</dt>
            <dd class="clearfix">
            	<div class="fa">
                	<input type="text" value="" name="first_name" class="textIn textIn_2" placeholder="First Name" autocomplete="off" style="width:350px;" />
                </div><br/><dt style=" font-size: 14px;">Second Name:</dt>
            	<div class="fa">
                	<input type="text" value="" name="last_name" class="textIn textIn_2" placeholder="Last Name" autocomplete="off" style="width:350px;" />
                </div>
            </dd>
        </dl><br/>
		<dl class="clearfix">
        	<dt style=" font-size: 14px;">Username:</dt>
            <dd>
            	<input type="text" value="" name="username" placeholder="User Name" class="textIn textIn" autocomplete="off" style="width:350px;" />
            </dd>
        </dl><br/>
        <dl class="clearfix">
        	<dt style=" font-size: 14px;">login email:</dt>
            <dd>
            	<input type="text" name="email" value="" placeholder="Valid Email address"class="textIn textIn" autocomplete="off" style="width:350px;" />
               <!--  <span class="error">Please enter your E-mail Address.</span> -->
            </dd>
        </dl><br/>
		<dl class="clearfix">
			<dt style=" font-size: 14px;">Mobile:</dt>
			<dd class="clearfix">
			
				
				<input type="text" name="mobile" id="mobile" placeholder="Mobile Number" class=" textIn" autocomplete="off" style="width:350px;"  />
			</dd>
		</dl><br/>
        <dl class="clearfix">
        	<dt style=" font-size: 14px;">login password:</dt>
            <dd>
            	<input type="password" value="" id="dpass" name="password" placeholder="password" class="textIn textIn_1" style="width:350px;" />
            </dd>
        </dl><br/>
        <dl class="clearfix">
        	<dt style=" font-size: 14px;">Confirm:</dt>
            <dd>
            	<input type="password" value="" name ="repassword" placeholder="Confirm password" id="redpass"  onkeyup="checkPass()" class="textIn textIn_1" style="width:350px;" />
				<label id="matched" style="font-size: 16px;color: red;display:none">Passwords donot match</label>
            </dd>
			<script>
				function checkPass(){
					passwd1=document.getElementById("dpass").value;
					passwd2=document.getElementById("redpass").value;
					
					if(passwd1!="" && passwd2!="" && passwd1 ==passwd2)
					{
						document.getElementById("matched").style.display="none";		
					}
					else 
					{
						document.getElementById("matched").style.display="block";		
					}
				}
				
			</script>
        </dl>
        <dl class="clearfix">
        	<dt>&nbsp;</dt>
            <dd>
            	<p style=" font-size: 14px;">Upon creating my account, I agree to:</p>
                <p>
                	<input type="checkbox" name="Agreement" id="Agreement" disabled="disabled" checked="checked" />
                    <label for="Agreement" style=" font-size: 14px;">The <em>Famunera.com</em> <a href="About/terms_of_use.php" target="_blank" style=" font-size: 14px;">Terms of Service</a></label>
                </p>
              
            </dd>
        </dl>
        <dl class="clearfix">
        	<dt>&nbsp;</dt>
            <dd>
				<input type="submit" name="source" value="register" class="  "/>
            </dd>
        </dl>
    </div>
	</form>
    <div class="signUpLogin">
    	<div class="already">
        	<h3 style=" font-size: 14px;">Already a Member?</h3>
            <a href="buyers/login.php">Sign In</a>
        </div>	
       
    </div>
</div>

</div>
<br/>
		    </div>
		    </div>
	<?php include "include/footer-session-buyer.php"; ?></section>	
  </div>
</body>
</html>
