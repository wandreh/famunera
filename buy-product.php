<?php
include "addons/base_url.php";
include "include/connection-key.php";
include "include/product.php";
include "include/categories.php";
include "include/adverts.php";
include "include/forums.php";
include "include/blog.php";
include "include/alerts.php";
include "addons/fix-url-values.php";
//include "isgranted.php";
$page="index.php";
//Start session
	session_start();
	
	//Check whether the current login is for a user is known and is for a seller
	if(!isset($_SESSION['SESS_ID']) || ($_SESSION['SESS_TYPE'] != "buyer") || (!isset($_SESSION['SESS_NAME'])) || (trim($_SESSION['SESS_ID']) == '')) {
		
		include "buynotok.php";
	}else{
		
		include "buyok.php";
	}
?>