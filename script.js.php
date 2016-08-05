<?php
include "../sql_handler/connection-key.php";
include "../addons/base_url.php";
include "../sql_handler/buyer.php";

	$Mail=($_POST['email']);
	$Pwd=($_POST['password']);

	$result=grant_buyer_access($con_key, $Mail,$Pwd);
	$sql=$result['count(buyer_id)'];
	if($sql==1)
	{
		session_start();
		//On access being granted
		session_regenerate_id();
		$_SESSION['SESS_ID'] = $result['buyer_id'];
		$_SESSION['SESS_NAME'] = $result['username'];
		$_SESSION['SESS_TYPE'] = "buyer";;
		session_write_close();
		header("location: index.php");
		exit();
	}
	else {		
	header("location: login.php");			
	exit();
	}		
?>