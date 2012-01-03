<?php
		if(!isset($_POST['name'])) {
			require_once('models/user.php');
			global $user;
			$userid=$_SESSION['userid'];
			$user = getProfileDetails($userid);
			require "views/header.php";
			require "views/update_profile/view.php";
			require "views/footer.php";
		}
		else {
			$userid=$_SESSION['userid'];		
			updateProfile($userid, $_POST['name'], $_POST['surname'], $_POST['location'], $_POST['occupation'], $_POST['interests'], $_POST['website'] );
			header('Location: index.php?redpage=profile');
		}
?>