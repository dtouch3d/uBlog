<?php
	
	require_once('models/user.php');
	global $user;
	
	$userid=$_SESSION['userid'];
	
	//$userid=9;
	$logged=true;
	
	if (isset($_GET['userid'])) {
		$userid=$_GET['userid'];
		$logged=false;
	}
	
	$user = getProfileDetails($userid);
	
	
	include('views/header.php');
	include('views/profile/view.php');
	include('views/footer.php');

?>