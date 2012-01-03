<?php

	if (isset($_POST['username'])||isset($_POST['password'])) {

		echo "cool";
		$login = login( $_POST['username'], $_POST['password'] );
		
		if(isset($login)) {
			header( 'location: index.php?redpage=globalblogs' );
		}
		else {
			header( 'location: index.php?redpage=login&error=yes' );
		}
	}
	else {
		if (isset($_SESSION['userid'])) {
			header( 'location: index.php?redpage=globalblogs' );
		}
		include "views/header.php";
        include "views/login/view.php";
        include "views/footer.php";
	}
?>