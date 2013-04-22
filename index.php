<?php
	global $settings;
    	$settings = require( 'settings.php' );
	require "models/db.php";
    	require "models/user.php";
	require "models/blog.php";

    	if (!isset($_SESSION['userid'])) {
		$redpage = 'login';
	}
	else {
		$redpage = 'globalblogs';
	}
	
	if( isset( $_GET[ 'redpage' ] )&&isset($_SESSION['userid']) ){
		$redpage = $_GET[ 'redpage' ];   
    	}
	if (isset($_GET['redpage'])) {
		if ($_GET['redpage']=='register'&&!isset($_SESSION['userid'])) {
			$redpage='register';
		}
	}
	require "controllers/{$redpage}.php";

?>
