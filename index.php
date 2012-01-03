<?php
	global $settings;
    $settings = require( 'settings.php' );
	require "models/db.php";
    require "models/user.php";
	require "models/blog.php";
    //$user = getCurrentUser();
    $redpage = 'login';

	if( isset( $_GET[ 'redpage' ] ) ){
		$redpage = $_GET[ 'redpage' ];   
    }
	
    /*
    if( $user == false && !in_array( $page, array( 'login', 'register', 'dologin', 'doregister' ) ) ){
        header( 'Location: ./?page=login' );
        exit();
    }
    $whitelist = array( 'posts', 'post', 'dopost', 'docomment', 'login', 'register', 'dologin', 'doregister' );
    if( !in_array( $page, $whitelist ) ){
        die( "Could not find page $page." );
    }*/
 
	require "controllers/{$redpage}.php";

?>